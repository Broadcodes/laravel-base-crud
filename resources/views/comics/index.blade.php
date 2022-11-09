@extends('layout.app')

@section('title')
    Lista Fumetti
@endsection

@section('container')
    <div class="add">
        <h2><a href="{{ route('comics.create') }}">Clicca qui</a> se vuoi aggiungere un nuovo fumetto</h2>
    </div>

    <div class="containerCards">
        @foreach ($comics as $elementComic)
            <div class="card">
                <a href="{{ route('comics.show', $elementComic->id) }}">
                    <img src="{{ $elementComic->thumb }}" alt="{{ $elementComic->title }}">
                    <h3>{{ $elementComic->title }}</h3>
                </a>
                <form action="{{ route('comics.destroy', $elementComic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input onclick="return confirm('Vuoi davvero cancellare il fumetto?')" type="submit" value="Cancella">
                </form>
            </div>
        @endforeach
    </div>
@endsection
