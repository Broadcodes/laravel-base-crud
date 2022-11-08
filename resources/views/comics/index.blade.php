@extends('layout.app')

@section('title')
    Lista Fumetti
@endsection

@section('container')
    @foreach ($comics as $elementComic)
        <a href=""><h3>{{$elementComic->title}}</h3></a>
    @endforeach
@endsection
