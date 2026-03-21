@extends('layouts.app')

@section('content')
    <section class="slider mt-4">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $index => $post)
                            <div class="slider-item">
                                <div class="slider-item-content">
                                    <div class="post-thumb mb-4">
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            <img src="{{ $post->image ? asset('images/' . $post->image) : 'images/slider/slider' . ($index + 1) . '.jpg' }}"
                                                alt="" class="img-fluid">
                                        </a>
                                    </div>

                                    <div class="slider-post-content">
                                        @if ($post->category)
                                            <span
                                                class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">{{ $post->category->name }}</span>
                                        @endif
                                        <h3 class="post-title mt-1"><a
                                                href="{{ route('posts.show', $post->id) }}">{{ Str::limit($post->content, 50) }}</a>
                                        </h3>
                                        <span
                                            class="text-muted text-capitalize">{{ $post->created_at->format('F j, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="slider-item">
                            <div class="slider-item-content">
                                <div class="post-thumb mb-4">
                                    <a href="#">
                                        <img src="images/slider/slider1.jpg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-post-content">
                                    <span
                                        class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Welcome</span>
                                    <h3 class="post-title mt-1"><a href="#">No posts yet. Check back soon!</a></h3>
                                </div>
                            </div>
                        </div>
                    @endif
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
                                <p class="text-center">No posts available yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="m-auto">
                    <div class="pagination mt-5 pt-4">
                        <ul class="list-inline">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-2 section-padding gray-bg pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="subscribe-footer text-center">
                        <div class="form-group mb-0">
                            <h2 class="mb-3">Subscribe Newsletter</h2>
                            <p class="mb-4">Subscribe my Newsletter for new blog posts , tips and info.
                            <p>
                            <div class="form-group form-row align-items-center mb-0">
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="btn btn-dark ">Subscribe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
