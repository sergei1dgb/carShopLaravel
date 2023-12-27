@extends('layouts.mainLayout')
@section('reviews')
<div class="form-reviews">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    
                        <li>{{$error}}</li>
                    
                @endforeach
            </ul>
        </div>
    @endif

@auth
<form method="POST" action="/reviews/submit">
    @csrf
    <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
    <input type="text" name="email" id="email" placeholder="Введите email" class="form-control">
    <input type="text" name="subject" id="subject" placeholder="Напишите кратко тему отзыва" class="form-control">
    <textarea type="text" name="message" id="message" placeholder="Напишите текст отзыва" class="form-control"></textarea>
    <button type="submit" class="btn btn-success">Отправить</button>
    </form>
    @endauth
    
</div>
    <div class="form-reviews">
    @foreach ($reviews as $el)
    <div class="alert alert-warning">        
            <h3>{{$el->name}}</h3>
            <p><b>{{$el->email}}</b></p>
            <p>{{$el->subject}}<br>
                {{$el->message}}
            </p> 
</div>
@endforeach
</div>
@endsection