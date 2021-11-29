@extends('layouts.main')
@section('container')
    {{-- @dd($posts[0]->slug); --}}
    <h1 class="mb-5">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <a href="/posts/{{ $posts[0]->slug }}">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}"
                    class="card-img-top hero-post" alt="{{ $posts[0]->category->slug }}">
            </a>
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-dark">{{ $posts[0]->title }}</a></h5>
                <p><small> By:
                        <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        <span class="text-muted">{{ $posts[0]->created_at->diffForHumans(['parts' => 2]) }}</span>
                    </small>
                </p>
                </p>
                <p class="card-text text-dark">{!! $posts[0]->excerpt !!}</p>
                <a class="card-text d-block" href="/posts/{{ $posts[0]->slug }}">
                    <small class="  text-muted"> {{ $posts[0]->created_at }}</small>
                </a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                {{-- pake method skip 1 karena kan array ke 1(index0) sudah dipake di atas --}}
                @foreach ($posts->skip(1) as $post)
                    <div class="col-12 col-md-4 p-2 my-2">
                        <div class="card">
                            <div class="position-absolute text-white px-3 py-2 rounded"
                                style="background-color: rgba(0, 0, 0, .8)">
                                <a class="text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <div class="d-block overflow-hidden">
                                <a href="/posts/{{ $post->slug }}">
                                    <img class="card-image-top" height="300" width="100%"
                                        src="https://source.unsplash.com/random/500x500?{{ $post->category->slug }}"
                                        alt="{{ $post->category->name }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <a class="text-dark" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                </h5>
                                <p><small> By:
                                        <a
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        <span
                                            class="text-muted">{{ $post->created_at->diffForHumans(['parts' => 2]) }}</span>
                                    </small>
                                </p>
                                <a class="card-text text-dark d-block py-2"
                                    href="/posts/{{ $post->slug }}">{!! $post->excerpt !!}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">Post not Found</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
