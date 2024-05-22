@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <form class="form mt-5" action="{{ route('login') }}" method="post">
                    @csrf
                    <h3 class="text-center text-white">login</h3>
                    <div class="form-group">
                        <label for="email" class="text-white">Email:</label><br>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    @error('email')
                        <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group mt-3">
                        <label for="password" class="text-white">Password:</label><br>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    @error('password')
                        <span class="d-block mt-2 fs-6 text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group mt-3">
                        <label for="remember-me" class="text-white"></label><br>
                        <input type="submit" name="submit" class="btn btn-white btn-md" value="submit">
                    </div>
                    <div class="text-right mt-2">
                        <a href="/register" class="text-white">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    </body>

    </html>
