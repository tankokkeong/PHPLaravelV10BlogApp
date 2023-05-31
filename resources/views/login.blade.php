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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" onkeyup="enterSignIn()">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" onkeyup="enterSignIn()">
                        No account? <a href="{{ route('SignUp') }}">Sign Up</a> now!
                    </div>
                    
                    <div class="form-group" id="error-prompt" style="color:red;"></div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>