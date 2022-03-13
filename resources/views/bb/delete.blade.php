@extends('layouts.base')

@section('title', 'Удалить объявление')

@section('content')
<form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Удалить">
</form>
@endsection