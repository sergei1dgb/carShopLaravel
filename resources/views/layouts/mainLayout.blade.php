<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
	<!-- Bootstrap core CSS -->
	
    @vite(['resources/css/style.css'])
    <title>Магазин одежды от SERG</title>
</head>

<body>
<header class="p-3 bg-info text-white" style="">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <x-application-logo></x-application-logo>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('index')}}" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="{{ route('contacts')}}" class="nav-link px-2 text-white">Контакты</a></li>
          <li><a href="{{ route('about')}}" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="{{ route('show_reviews')}}" class="nav-link px-2 text-white">Отзывы</a></li>
          <li><a href="{{ route('order_basket')}}" class="nav-link px-2 text-white">Корзина</a></li>
        </ul>
       
       
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="text-end">
        @if (!Auth::user())
       
          <a type="button" href="{{ route('login')}}" class="btn btn-outline-light me-2">Войти</a>
          <a type="button" href="{{ route('register')}}" class="btn btn-warning">Регистрация</a>
        @elseif (Auth::user())
          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </button>
            <ul class="dropdown-menu">
              @if (Auth::user()->email === 'admin@mail.ru')
              <li><a class="dropdown-item" href="{{route('store_view')}}">Добавить товар на страницу</a></li>  
              @endif
              <li><a class="dropdown-item" href="{{route('profile.edit')}}">Профиль</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                this.closest('form').submit();">Выход</a>
            </form>
          </li>
            </ul>
          </div>

        
        @endif
      </div>
      </div>
    </div>
  </header>
<main>
    @yield('content')
    @yield('about')
    @yield('reviews')
    @yield('order_basket')
    @yield('auth')
    @yield('registration')
   
</main>
<footer>
        
</footer>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>