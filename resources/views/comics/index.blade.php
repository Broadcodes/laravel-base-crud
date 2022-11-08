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
            </a>
            <form action="{{ route('comics.destroy', $elementComic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input id="deleteInput" type="submit" value="Cancella">
            </form>
        @endforeach
    </div>
    <script language="JavaScript" type="text/javascript" src="js/app.js"></script>
@endsection
