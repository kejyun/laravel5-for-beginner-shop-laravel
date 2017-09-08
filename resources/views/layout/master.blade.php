<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Shop Laravel</title>
        <script src="/assets/js/jquery-2.2.4.min.js" defer></script>
        <script src="/assets/js/bootstrap.min.js" defer></script>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/shop_laravel.css">
    </head>
    <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Shop Laravel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(session()->has('user_id'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商品 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/merchandise/create">建立</a></li>
                                <li><a href="/merchandise/manage">管理</a></li>
                            </ul>
                        </li>
                        <li><a href="/user/auth/sign-out">登出</a></li>
                    @else
                        <li><a href="/user/auth/sign-in">登入</a></li>
                        <li><a href="/user/auth/sign-up">註冊</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    </body>
</html>