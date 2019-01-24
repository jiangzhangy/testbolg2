<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','weibo')-美尔曼博客</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
            <a href="/" class="navbar-brand">美尔曼-微博</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item"><a href="/help" class="nav-link text-white">帮助</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">登录</a></li>
            </ul>
        </div>
    </nav>
   <div class="container">
       @yield('content')
   </div>
</body>
</html>