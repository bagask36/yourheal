<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax())
        {
            $article = Article::with('Category')->latest()->get();

            return DataTables::of($article)
            ->addIndexColumn()
            ->addColumn('categories_id', function($article) {
                return $article->Category->name;
            })
            ->addColumn('status', function($article) {
                if ($article-> status == 0) {
                    return '<span class="badge bg-danger">Private</span>';
                } else {
                    return '<span class="badge bg-success">Published</span>';
                }
                
            })
            
            ->addColumn('button', function($article) {
                return '<div class="text-center">
                            <a href="articles/'.$article->id.'" class="btn btn-secondary">Detail</a>
                            <a href="articles/'. $article->id .'/edit" class="btn btn-primary">Edit</a>
                            <a href="#" onclick="deleteArticle(this)" data-id="'.$article->id.'"class="btn btn-danger">Delete</a>

                        </div>';
            })
            ->rawColumns(['categories_id', 'status', 'button'])
            ->make();

        }
        return view('back.article.index');
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.article.create', [
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        // Validate the request data using the rules defined in ArticleRequest
        $data = $request->validated();
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();

            // Store the file in the public/back directory
            $file->storeAs('public/back', $fileName);

            // Update the 'img' field in the data array with the generated filename
            $data['img'] = $fileName;
            $data['slug'] = Str::slug($data['title']);
        }

        // Create a new Article using the validated data
        Article::create($data);

        // Redirect with a success message
        return redirect(url('articles'))->with('success', 'Data Article has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('back.article.show', [
            'article' => Article::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.article.update', [
            'article' =>  Article::find($id),
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();
        
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();

            // Simpan file di direktori public/back
            $file->storeAs('public/back', $fileName);

            // Hapus file gambar lama
            Storage::delete('public/back/'.$request->oldImg);

            // Perbarui kolom 'img' dengan nama file yang baru dihasilkan
            $data['img'] = $fileName;
        }
        else {
            // Jika tidak ada gambar yang diunggah, gunakan gambar lama
            $data['img'] = $request->oldImg;
        }

        $data['slug'] = Str::slug($data['title']);

        // Perbarui artikel yang sesuai dengan ID
        Article::find($id)->update($data);

        // Redirect dengan pesan sukses
        return redirect(url('articles'))->with('success', 'Data Article has been updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $article = Article::find($id);

    if (!$article) {
        // Handle case where article is not found
        return redirect(url('articles'))->with('error', 'Article not found');
    }

    // Delete the associated image file
    Storage::delete('public/back/' . $article->img);

    // Delete the article
    $article->delete();

    return redirect(url('articles'))->with('success', 'Data Article has been deleted');
}
}
