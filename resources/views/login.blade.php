<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @extends('layouts.header')
    @vite('resources/js/app.js')
</head>
<body>
    <div id="login-container">
        <div class="login-box">
            <div class="login-title mt-2">
                <h1 class="text-center">Login</h1>

                <div class="input-container">
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul class="pl-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <form action="/Login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password">
                            No account? <a href="{{ route('SignUp') }}">Sign Up</a> now!
                        </div>
                        
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>