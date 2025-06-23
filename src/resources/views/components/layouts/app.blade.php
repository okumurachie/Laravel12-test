<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    @livewireStyles
</head>
<body>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="app">
        <header class="header">
            <h1 class="header__heading">Laravel12-test</h1>
        </header>
    <main>
    <div class="content">
        {{ $slot }}
    </div>
    </main>
    </div>
    @livewireScripts
</body>
</html>
