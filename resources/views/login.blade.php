<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <button>Log in</button>
    </form>
</body>
</html>