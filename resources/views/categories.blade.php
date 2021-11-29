@extends('layouts.main')

@section('container')
    {{-- @dd($categories); --}}
    <h5 class="mb-5">Post Categories</h5>
    <div class="container my-5">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-4 p-3">
                    <a href="/posts?category={{ $category->slug }}" class="d-block">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/random/?{{ $category->slug }}" class="card-img"
                                alt="..." height="500" width="400">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title flex-fill text-center p-4 fs-4"
                                    style="background-color: rgba(0, 0, 0, .7)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <ul>
      <li>
         <a href="/categories/{{ $category->slug }}">
            <h4>
               {{ $category->name }}
            </h4>
         </a>
      </li>
   </ul> --}}
@endsection
