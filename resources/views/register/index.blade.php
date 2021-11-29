@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-5">
            <main class="form-registration">
                <form>
                    <h1 class="h3 mb-3 fw-normal">Please fill form below</h1>

                    <div class="form-floating ">
                        <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="ilham gilang">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="username" placeholder="ilham_gilang">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register Now</button>
                </form>
                <small class="text-center d-block mt-3">Already have an account? <a href="/register">Login here!</a></small>
            </main>
        </div>
    </div>
@endsection
