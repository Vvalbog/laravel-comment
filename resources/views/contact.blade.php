@extends('layouts.app')

@section('title')
Страница контактов
@endsection

@section('content')

<h1>Страница контактов</h1>



<form action="{{ route('contact-form')}}" method="post">
    @csrf
<div class="form-group mt-2">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control ">
    </div>
    <div class="form-group mt-2">
    <label for="email">Введите email</label>
    <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group mt-2">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>
    <div class="form-group mt-2">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
    <button type="submit" class="btn btn-success mt-2">Отправить</button>
</div>
</form>
@endsection