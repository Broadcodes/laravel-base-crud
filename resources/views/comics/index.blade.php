@extends('layout.app')

@section('title')
    Lista Fumetti
@endsection

@section('container')
    <div>
        <a href="{{ route('comics.create') }}">
            <h2>Aggiungi nuovo fumetto</h2>
        </a>
    </div>

    <div>
        @foreach ($comics as $elementComic)
            <a href="{{ route('comics.show', $elementComic->id) }}">
                <h3>{{ $elementComic->title }}</h3>
                <form action="{{ route('comics.destroy', $elementComic->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="button" value="Cancella">
                </form>
            </a>
        @endforeach
    </div>
@endsection
