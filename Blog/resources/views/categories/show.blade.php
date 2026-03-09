@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Category Details</h3>
                </div>
                <div class="card-body">
                    <h4>Category Name: {{ $category->name }}</h4>
                    <p><strong>ID:</strong> {{ $category->id }}</p>
                    <p><strong>Created At:</strong> {{ $category->created_at}}</p>
                    <p><strong>Updated At:</strong> {{ $category->updated_at}}</p>

                    <hr>

                    <h5>Posts in this Category:</h5>
                    @if($category->posts->count() > 0)
                        <ul>
                            @foreach($category->posts as $post)
                                <li>{{ $post->content }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No posts in this category.</p>
                    @endif

                    <hr>

                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

