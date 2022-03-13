@extends('layouts.base')

@section('title', 'Мои объявления')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <p class="text-right"><a href="{{ route('bb.add') }}">Добавить объявление</a></p>
        @if(count($bbs))
            <table class="table-stripped table">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена</th>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bbs as $bb)
                        <tr>
                            <td><h3>{{ $bb->title }}</h3></td>
                            <td>{{ $bb->price }}</td>
                            <td>
                                <a href="{{ route('bb.edit', [ 'bb' => $bb->id ]) }}">Изменить</a>
                            </td>
                            <td>
                                <a href="{{ route('bb.delete', [ 'bb' => $bb->id ]) }}">Удалить</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
