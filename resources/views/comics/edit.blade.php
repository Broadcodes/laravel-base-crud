@extends('layout.app')

@section('title')
    Modifica {{ $comic->title }}
@endsection

@section('container')
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}" required>
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}">
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"> {{ old('description', $comic->description) }} </textarea>
        </div>
        <div>
            <input type="submit" value="Modifica">
        </div>

    </form>
@endsection
