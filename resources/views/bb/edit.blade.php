@extends('layouts.base')

@section('title', 'Редактировать объявление')

@section('content')
<form action="{{ route('bb.update', [ 'bb' => $bb->id ]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="textTitle">Товар</label>
        <input type="text" 
                name="title" 
                id="textTitle" 
                class="form-control @error('title') is-invalid @enderror"
                value="{{ old('title', $bb->title) }}">
        @error('title')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="textContent">Описание</label>
        <textarea name="content" id="textContent" 
        class="form-control @error('content') is-invalid @enderror" rows="3">{{ old('content', $bb->content) }}</textarea>
        @error('content')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="textPrice">Цена</label>
        <input type="text" name="price" id="textPrice" 
            class="form-control @error('price') is-invalid @enderror" 
            value="{{ old('price', $bb->price) }}">
        @error('price')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection