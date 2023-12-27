@extends('layouts.mainLayout')

@section('auth')

    <div class="text-center">
    <main class="form-signin infopage">

      @if (session('message'))
      <div role="alert" aria-live="assertive" id="success" aria-atomic="true" class="alert alert-success" data-bs-autohide="false">
        
          {{session('message')}}
        
      </div>
      <script>
        setTimeout(function() {
        let success = document.getElementById('success');
        success.style.display = 'none';
        }, 2000);
        </script>
      @endif

      <form action="{{route('store_view')}}" method="post" enctype="multipart/form-data">
      @csrf
        <h1 class="h3 mb-3 fw-normal">Добавление продукта</h1>
  
        <div class="form-floating">
          <input  type="text" name="brand_name" class="form-control" id="brand_name" placeholder="varchar(255)">
          <label for="brand_name">brand_name</label>
        </div>
        <div class="form-floating">
          <input type="file" name="image" class="form-control" id="image" placeholder="">
          <label for="image">Image</label>
        </div>
        <div class="form-floating">
          <input type="text" name="car_model_id" class="form-control" id="car_model_id" placeholder="integer">
          <label for="car_model_id">car_model_id</label>
        </div>
        <div class="form-floating">
          <input type="text" name="color_id" class="form-control" id="color_id" placeholder="integer">
          <label for="color_id">color_id</label>
        </div>
        <div class="form-floating">
          <input type="text" name="price" class="form-control" id="price" placeholder="integer">
          <label for="price">price</label>
        </div>
        <div class="form-floating">
          <input type="text" name="presence_id" class="form-control" id="presence_id" placeholder="integer">
          <label for="presence_id">presence_id</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Добавить</button>
      </form>
    </main>
    
    <script src="https://bootstrap-4.ru/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</div>
   
@endsection