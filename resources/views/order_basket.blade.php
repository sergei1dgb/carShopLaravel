@extends('layouts.mainLayout')

@section('reviews')
<form method="POST" action="">
    <input type="text" name="name" placeholder="Введите имя" class="form-control">
    <input type="text" name="email" placeholder="Введите email" class="form-control">
    <input type="text" name="name" placeholder="Напишите кратко тему отзыва" class="form-control">
    <input type="text" name="name" placeholder="Напишите текст отзыва" class="form-control">
    <button type="submit" class="form-control"></button>
</form>
@endsection