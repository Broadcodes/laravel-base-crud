@extends('layout.app')

@section('title')
    Aggiungi nuovo fumetto
@endsection

@section('container')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required value="{{ old('title', '') }}">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{ old('series', '') }}">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', '') }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{ old('type', '') }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" step=".01" name="price" id="price" value="{{ old('price', '') }}">
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb', '') }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"> {{ old('description', '') }} </textarea>
        </div>
        <div>
            <input type="submit" value="Salva">
        </div>
    </form>
@endsection
