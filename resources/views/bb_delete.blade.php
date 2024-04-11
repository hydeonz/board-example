@extends('layouts.base')

@section('title','Удаление объявления :: Мои объявления')

@section('main')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price}}</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <p><a href="{{ route('index') }}">Вернуться назад</a></p>
    <p>Автор: {{ $bb->user->name }}</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection
