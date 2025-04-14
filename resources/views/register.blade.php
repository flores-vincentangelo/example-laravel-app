<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <div>logged in </div>
    @endauth

    @guest
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="password" name="password" id="password" placeholder="Password">
        <button>Register</button>
    </form>
        
    @endguest
</body>
</html>