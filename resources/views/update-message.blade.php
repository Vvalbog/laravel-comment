@extends('layouts.app')

@section('title')
Обновление записи
@endsection

@section('content')

<h1>Обновление записи</h1>



<form action="{{ route('contact-update-submit', $data->id)}}" method="post">
    @csrf
<div class="form-group mt-2">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control ">
    </div>
    <div class="form-group mt-2">
    <label for="email">Введите email</label>
    <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group mt-2">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>
    <div class="form-group mt-2">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">{{ $data->message }}</textarea>
    <button type="submit" class="btn btn-success mt-2">Обновить</button>
</div>
</form>
@endsection