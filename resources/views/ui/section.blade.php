<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/ui/section.css')}}" rel="stylesheet">
    <title>屏首</title>
</head>
<body>
    @section('section')
        <div class="section">
            <p class="section-title">
                @yield('title', '默认标题')
            </p>
            <p class="section-description">
                @yield('description', '默认内容')
            </p>
        </div>
        @stack('section')
    @show
</body>
</html>
