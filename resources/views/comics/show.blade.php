@extends('layout.app')

@section('title')
    Dettagli fumetto
@endsection

@section('container')

<img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

<div>
    <h2>Title: {{ $comic->title }}</h2>
    <h3>Price: €{{ $comic->price }}</h3>
    <h3>Series: {{ $comic->series }}</h3>
    <h3>Sale_date: {{ $comic->sale_date }}</h3>
    <h3>Type: {{ $comic->type }}</h3>
    <p>Description: {{ $comic->description }}</p>
</div>

<a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
<a href="{{ route('comics.index') }}">Torna Indietro</a>
@endsection
