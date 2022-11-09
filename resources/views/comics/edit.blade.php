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
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>
        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" step=".01" name="" id="price" value="{{ $comic->price }}">
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"> {{ $comic->description }} </textarea>
        </div>
        <div>
            <input type="submit" value="Modifica">
        </div>

    </form>
@endsection
