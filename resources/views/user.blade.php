@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post BY {{ $userName }}</h1>
    {{-- @dd($posts[0]); --}}
    @if (count($posts))
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-sm-12 p-2 my-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $post->title }}
                                </h5>
                                <p>By: <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                                    <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                </p>
                                <p class="card-text">{!! $post->excerpt !!}</p>
                                <a class="btn btn-primary" href="/posts/{{ $post->slug }}">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <h3>Category ini belum ada postingan</h3>
    @endif

    <a href="/posts" class="btn btn-success my-3">Back</a>

@endsection
