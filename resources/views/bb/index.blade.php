
@extends('layouts.base')

@section('title', 'Главная')
@section('content')
    <h1>Объявления</h1>
    @if(count($bbs))
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Товар</td>
                <td>Цена</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        <tbody>
            @foreach($bbs as $bb)
            <tr>
                <td><h3>{{$bb->title}}</h3></td>
                <td>{{$bb->price}}</td>
                <td>
                    <a href="{{route('detail', $bb->id)}}">Подробнее</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@endsection