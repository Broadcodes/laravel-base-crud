@extends('layout.app')

@section('title')
    Lista Fumetti
@endsection

@section('container')
    @foreach ($comics as $elementComic)
        <a href="{{ route('comics.show', $elementComic->id) }}"><h3>{{$elementComic->title}}</h3></a>
    @endforeach
@endsection
