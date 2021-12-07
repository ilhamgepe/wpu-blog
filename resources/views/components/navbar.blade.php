<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        {{-- <a href="#" class="navbar-brand">Hello guys</a> --}}
        <img src="{{ asset('img/logo.png') }}" class="navbar-brand" width="80" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- @dd($title) --}}
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>
            <div class="nav-link">
                <div class="row align-items-center">
                    <div class="col-12 order-2 order-lg-0 col-lg-8">
                        <form class="d-flex" action="/posts" method="GET">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('author'))
                                <input type="hidden" name="author" value="{{ request('author') }}">
                            @endif
                            <input name="search" class="form-control me-2" type="search" placeholder="Search..."
                                value="{{ request('search') }}" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                    @auth
                        <div class="col-12 col-lg-4">

                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Welcome, {{ auth()->user()->name }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-light"
                                            aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                            <li>
                                                <hr class="dropdown-devider">
                                            </li>
                                            <li>
                                                <form action="/logout" method="POST">
                                                    @csrf
                                                    <button class="btn dropdown-item">logout</button>
                                                </form>
                                                {{-- <a class="dropdown-item" href="#">Log Out</a> --}}
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-lg-4">
                            <ul class="d-flex navbar-nav text-center text-lg-end">
                                <li class="nav-item">
                                    <a href="/login" class="nav-link fs-5 {{ $active === 'login' ? 'active' : '' }}"><i
                                            class="bi bi-box-arrow-in-right"></i>
                                        Login</a>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
