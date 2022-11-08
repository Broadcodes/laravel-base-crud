@extends('layout.app')

@section('title')
    Aggiungi nuovo fumetto
@endsection

@section('container')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title"></label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="series"></label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date"></label>
            <input type="text" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type"></label>
            <input type="text" name="type" id="type">
        </div>
        <div>
            <label for="price"></label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="thumb"></label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="description"></label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Salva">
        </div>
    </form>
@endsection
