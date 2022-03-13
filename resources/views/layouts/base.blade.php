<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title') | Объявления</title>
  </head>
  <body>
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
              <div class="container">
                <a href="{{ route('index') }}" class="navbar-brand mr-auto">Главная</a>
                @guest
                <a href="{{ route('register') }}" class="navbar-item item-link">Регистрация</a>
                <a href="{{ route('login') }}" class="navbar-item item-link">Вход</a>
                @endguest
                @auth
                <span>Привет, <strong>{{ Auth::user()->name }}</strong></span>
                <a href="{{ route('home') }}" class="navbar-item item-link">Мои объявления</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="form-inline">
                  @csrf
                  <input type="submit" class="btn btn-danger" value="Выход">
                </form>
                @endauth
              </div>
          </nav>
            @yield('content')
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>