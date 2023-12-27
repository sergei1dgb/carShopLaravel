@extends('layouts.mainLayout')

@section('content')
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Авто из США</h1>
        <p class="lead text-muted">Здесь Вы найдете самые актуальные предложения от нашей компаниии по покупке автомобиля.</p>
        
      </div>
    </div>
  </section>
 
  <div class="album py-5 bg-light">
    <div class="container">
     
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">

        @foreach ($products as $product)
       <div class="col">
        <div class="card shadow-sm">
          <img src="{{ asset('storage').'/'.$product->fileUrl}}" alt="image.png">
          <div class="card-body">
            <b><p class="card-text">{{$product->brand_name}}</p></b>
            <div class="d-flex justify-content-between align-items-center">
              <div class="col"><i>
                <p>Кузов: {{$product->car_model['name']}}</p>
                <p>Цвет: {{$product->color_model['name']}}</p>
                <p>Наличие: {{$product->presence_model['status']}}</p>
                <p>Цена: {{$product->price}}</p></i>
              </div>
              <div class="col align-self-end  col-md-4 ">
                <button onclick='window.location.href="{{route('order_basket')}}"' type="button" class="btn btn-info">Заказать</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
      </div>
    </div>
   
  
  </div>
  
</main>
<div class="pagination justify-content-center">

   {{ $products->links() }} 

</div>
@endsection