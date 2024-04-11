<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Объявления</title>
    <link href="{{ asset('styles/main.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}"
           class="navbar-brand mt-auto">Главная</a>
        @guest
            <a href="{{ route('register') }}"
               class="navbar-item nav-link">Регистрация</a>
            <a href="{{ route('login') }}"
               class="navbar-item nav-link">Вход</a>
        @endguest
        @auth
            <a href="{{ route('home') }}"
               class="navbar-item nav-link">Мои объявления</a>
            <form action="{{ route('logout') }}" method="post" class="form-check-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
        @endauth
    </nav>
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('main')
</div>
</body>
</html>
