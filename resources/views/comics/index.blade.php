@extends('layout.app')

@section('title')
    Lista Fumetti
@endsection

@section('container')
    <div>
        <a href="">
            <h2>Aggiungi nuovo fumetto</h2>
        </a>
    </div>

    <div>
        @foreach ($comics as $elementComic)
            <a href="{{ route('comics.show', $elementComic->id) }}">
                <h3>{{ $elementComic->title }}</h3>
            </a>
        @endforeach
    </div>
@endsection
