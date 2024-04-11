@extends('layouts.base')

@section('title', 'Добавление объявления :: Мои объявления')

@section('main')

    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="form-control">
            <label for="txtFile">Товар</label>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-control">
            <label for="txtContent">Описание</label>
            <input name="content" id="txtContent" class="form-control">
        </div>
        <div class="form-control">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection
