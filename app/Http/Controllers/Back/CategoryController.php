<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.category.index', [
            'categories' => Category::orderBy('id', 'DESC')->get()
        ]);
        
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|min:3'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('success', 'Category has beed added');
    }

    public function update(Request $request, string $id)
    {
    $data = $request->validate([
        'name' => 'required|min:3',
    ]);

    $data['slug'] = Str::slug($data['name']);

    Category::find($id)->update($data);

    return back()->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
    
        return back()->with('success', 'Category has been deleted');
        }
}
