@extends('layouts.app')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-header-content text-center">
                        <h2 class="page-header-title">{{ $category->name }}</h2>
                        <p class="text-muted">Browse all posts in {{ $category->name }} category</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @forelse($posts as $post)
                            <div class="col-lg-3 col-md-6">
                                <article class="post-grid mb-5">
                                    <a class="post-thumb mb-4 d-block" href="{{ route('posts.show', $post->id) }}">
                                        <img src="{{ $post->image ? asset('images/' . $post->image) : 'images/news/f1.jpg' }}"
                                            alt="" class="img-fluid w-100">
                                    </a>
                                    @if ($post->category)
                                        <span
                                            class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">{{ $post->category->name }}</span>
                                    @endif
                                    <h3 class="post-title mt-1"><a
                                            href="{{ route('posts.show', $post->id) }}">{{ Str::limit($post->content, 40) }}</a>
                                    </h3>

                                    <span
                                        class="text-muted letter-spacing text-uppercase font-sm">{{ $post->created_at->format('F j, Y') }}</span>

                                </article>
                            </div>
                        @empty
                            <div class="col-lg-12">
                                <div class="empty-state text-center py-5">
                                    <h3>No posts in this category yet</h3>
                                    <p>Check back later for new posts in {{ $category->name }}</p>
                                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">Back to Home</a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                @if ($posts->hasPages())
                    <div class="m-auto">
                        <div class="pagination mt-5 pt-4">
                            <ul class="list-inline">
                                {{ $posts->links('pagination::bootstrap-4') }}
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="mb-4">Browse Other Categories</h3>
                </div>
                @foreach ($categories->where('id', '!=', $category->id)->take(6) as $cat)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="category-card text-center p-4 mb-4"
                            style="background: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <h5 class="mb-2">{{ $cat->name }}</h5>
                            <span class="text-muted font-sm">{{ $cat->posts_count }} posts</span>
                            <a href="{{ route('categories.show', $cat->id) }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
