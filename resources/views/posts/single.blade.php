@extends('layouts.app')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <article class="post-single">
                        <div class="post-thumb">
                            <img src="{{ $post->image ? asset('images/' . $post->image) : 'images/fashion/img-1.jpg' }}"
                                alt="" class="img-fluid w-100">
                        </div>

                        <div class="single-post-content">
                            @if ($post->category)
                                <span
                                    class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $post->category->name }}</span>
                            @endif

                            <h2 class="post-title mt-2">{{ $post->content }}</h2>

                            <div class="post-meta mb-4">
                                <span class="text-muted text-capitalize">
                                    <i class="ti-time mr-2"></i>{{ $post->created_at->format('F j, Y') }}
                                </span>
                                @if ($post->user)
                                    <span class="text-muted text-capitalize ml-3">
                                        <i class="ti-user mr-2"></i>{{ $post->user->name }}
                                    </span>
                                @endif
                            </div>

                            <div class="post-content">
                                <p>{{ $post->content }}</p>
                            </div>
                        </div>

                        <div class="post-btm d-flex justify-content-between mt-5 pt-4 border-top">
                            <div class="post-tags">
                                @if ($post->category)
                                    <span class="font-secondary text-color">Posted in:</span>
                                    <a href="{{ route('categories.show', $post->category->id) }}"
                                        class="text-dark">{{ $post->category->name }}</a>
                                @endif
                            </div>

                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget widget-categories mb-5">
                            <h3 class="widget-title h4 mb-4">Categories</h3>
                            <ul class="list-inline widget-list">
                                @php
                                    $categories = \App\Models\Category::withCount('posts')->get();
                                @endphp
                                @foreach ($categories as $category)
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                                        <span class="badge badge-primary">{{ $category->posts_count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget-recent-post mb-5">
                            <h3 class="widget-title h4 mb-4">Recent Posts</h3>
                            <ul class="recent-post-list">
                                @php
                                    $recentPosts = \App\Models\Post::with('category')->where('status', 'published')->latest()->take(5)->get();
                                @endphp
                                @foreach ($recentPosts as $recentPost)
                                    <li class="d-flex align-items-center mb-4">
                                        <div class="post-thumb mr-3">
                                            <img src="{{ $recentPost->image ? asset('images/' . $recentPost->image) : 'images/news/f1.jpg' }}"
                                                alt="" class="img-fluid"
                                                style="width: 70px; height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title mb-2">
                                                <a
                                                    href="{{ route('posts.show', $recentPost->id) }}">{{ Str::limit($recentPost->content, 30) }}</a>
                                            </h5>
                                            <span
                                                class="text-muted text-capitalize font-sm">{{ $recentPost->created_at->format('F j, Y') }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
