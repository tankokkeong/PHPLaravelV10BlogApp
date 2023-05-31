<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    @extends('layouts.header')
    @vite('resources/js/app.js')
</head>
<body>
    <div id="login-container">
        <div class="login-box">
            <div class="login-title mt-2">
                <h1 class="text-center">Sign up</h1>

                <div class="input-container">
                    <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" onkeyup="enterSignUp()">
                    </div>

                    <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="full-name" aria-describedby="emailHelp" onkeyup="enterSignUp()">
                    </div>

                    <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" onkeyup="enterSignUp()">
                    </div>

                    <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" onkeyup="enterSignUp()">
                    Already have an account? <a href="{{ route('Login') }}">Login now</a>!
                    </div>
                    
                    <div class="form-group" id="error-prompt" style="color:red;"></div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>