<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    @livewireStyles
</head>
<body>
    <div class="app">
        <header class="header">
            <h1 class="header__heading">Laravel12-test</h1>
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                    <form class="form" action="/logout" method="post">
                        @csrf
                        <button class="header-nav__button">logout</button>
                    </form>
                </li>
                @else
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/login">login</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/register">register</a>
                </li>
                @endif
            </ul>
        </nav>
        </header>
        <main>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="content">
            @yield('content')
        </div>
        </main>
    </div>
    @livewireScripts
</body>
</html>
