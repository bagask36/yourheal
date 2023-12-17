@extends('back.layout.template')

@section('title', 'Dashboard - Admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card text-bg-primary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Articles</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $total_articles }} Articles</h5>
                    <a href="{{ url('articles') }}" class="text-white">View Article</a>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-bg-secondary mb-3" style="max-width: 100%;">
                <div class="card-header">Total Categories</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $total_categories }} Categories</h5>
                    <a href="{{ url('categories') }}" class="text-white">View Categories</a>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h4>List of Articles</h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($latest_article as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->Category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>


@endsection