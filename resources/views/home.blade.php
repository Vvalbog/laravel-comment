@extends('layouts.app')

@section('title')
Главная страница
@endsection

@section('content')

<h1>Главная страница</h1>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Distinctio deleniti hic optio tenetur vitae eligendi doloribus mollitia 
    ipsam ratione animi quas eos corrupti sequi inventore repellat et, neque non itaque?
</p>
@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection

