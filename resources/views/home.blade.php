<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    @extends('layouts.header')
    @vite('resources/js/app.js')
</head>
<body>
    @auth
        <h1>You're logged in!</h1>
        <form action="/Logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else
        <h1>Unauthorized</h1>
    @endauth
</body>
</html>