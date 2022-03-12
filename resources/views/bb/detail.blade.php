@extends('layouts.base')

@section('title', $bb->title)

@section('content')
    <h1>{{$bb->title}}</h1>
    <p>{{$bb->content}}</p>
    <p>{{$bb->price}} руб.</p>
    <p><a href="{{route('index')}}">Все объявления</a></p>
@endsection