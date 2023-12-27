@extends('layouts.mainLayout')

@section('auth')

    <div class="text-center">
    
    <main class="form-signin infopage">
      <form>
       
        <h1 class="h3 mb-3 fw-normal">Вход в систему</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email адрес</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Пароль</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Запомнить меня
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">© 2023</p>
      </form>
    </main>
    
    <script src="https://bootstrap-4.ru/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</div>
   
@endsection