<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/ui/navbar.css')}}" rel="stylesheet">
    <title>导览行</title>
</head>
<body>
    @section('navbar')
        <div class="navbar">
            <img src="" alt="Logo" class="logo">
            <ul class="nav-links">
                <li class="link"><a href="{{route('home')}}">首頁</a></li>
                <li class="link"><a href="{{route('about-me')}}">關於我</a></li>
                <li class="link"><a href="{{route('service')}}">服務</a></li>
                <li class="link"><a href="{{route('contact-me')}}">聯係我</a></li>
            </ul>
            <ul class="user-links">
                <li class="link"><a href="{{route('register')}}">注冊</a></li>
                <li class="link"><a href="{{route('login')}}">登入</a></li>
            </ul>
        </div>
    @show
</body>
</html>
