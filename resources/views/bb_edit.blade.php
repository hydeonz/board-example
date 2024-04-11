@extends('layouts.base')

@section('title', 'Правка объявления :: Мои объявления')

@section('main')

    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-control">
            <input name="title" id="txtTitle"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title',$bb->title) }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-control">
            <input name="content" id="txtContent"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('content',$bb->content) }}">
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-control">
            <input name="price" id="txtPrice"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('price',$bb->price) }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>
@endsection
