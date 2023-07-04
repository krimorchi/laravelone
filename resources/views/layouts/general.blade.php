<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HTML-форма Laravel</title>
  <meta charset='utf-8'>
  
  <link rel="stylesheet" type="text/css" href="{{ url('/build/assets/app-bbd6a014.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('/build/assets/app-66e7f68a.js') }}" /> 
  <link rel="stylesheet" type="text/css" href="{{ url('/css/general.css') }}"/>
  {{-- style="background-color: bisque; border-radius: 20px;" --}}
</head>
<body class="general">
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                        <a class="nav-link" href="/main">Главная</a>
                                        <a class="nav-link" href="/posts">Посты</a>
                                        <a class="nav-link" href="/posts/create">Создание статьи</a>
                                        <a class="nav-link" href="/about">О нас</a>
                                        <a class="nav-link" href="/contacts">Контакты</a>
                                </div>
                        </div>
                </div>
              </nav>
        @yield('main')
        @yield('posts')
        @yield('create')
        @yield('edit')
        @yield('about')
        @yield('contacts')
</body>
</html>