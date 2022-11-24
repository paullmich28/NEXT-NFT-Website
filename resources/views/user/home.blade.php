<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <p>{{Auth::guard('web')->user()->name}}</p>
    <p>{{Auth::guard('web')->user()->username}}</p>
    <a href="{{route('user_logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
    <form action="{{route('user_logout')}}" id="logout-form" method="POST">
        @csrf
    </form>
</body>
</html>