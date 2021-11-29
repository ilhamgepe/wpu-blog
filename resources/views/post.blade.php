@extends('layouts.main')

@section('container')
    {{-- @dd($post); --}}
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="text-center">{{ $post->title }}</h3>
                <a href="/posts/{{ $post->slug }}">
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}"
                        class="card-img-top hero-post img-fluid" alt="{{ $post->category->slug }}">
                </a>
                <article>
                    <p>By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> On <a
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    {{-- {{ $post->body }} kalo pake ini, lebih aman, tp karna kita pgn nambahin tag <P> kedalam body kita bisa menggunakan yg di bawah --}}
                    {!! $post->body !!}
                </article>
            </div>
            <div class="col-4">
                @foreach ($posts as $post)
                    @if ($postId !== $post->id)
                        <div class="d-none d-md-block col-12  p-2 my-2">
                            <div class="card">
                                <div class="position-absolute text-white px-3 py-2 rounded"
                                    style="background-color: rgba(0, 0, 0, .8)">
                                    <a class="text-white"
                                        href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                </div>
                                <div class="d-block overflow-hidden">
                                    <a href="/posts/{{ $post->slug }}">
                                        <img class="card-image-top" height="250" width="100%"
                                            src="https://source.unsplash.com/random/500x500?{{ $post->category->slug }}"
                                            alt="{{ $post->category->name }}">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title ">
                                        <a class="text-dark"
                                            href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h2>
                                    <p><small> By:
                                            <a
                                                href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>
                                            <span
                                                class="text-muted">{{ $post->created_at->diffForHumans(['parts' => 2]) }}</span>
                                        </small>
                                    </p>
                                    <a class="card-text text-dark d-block py-2"
                                        href="/posts/{{ $post->slug }}">{!! $post->excerpt !!}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <a href="/posts" class="btn btn-primary my-3">Back</a>
@endsection
