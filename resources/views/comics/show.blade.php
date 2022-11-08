@extends('layout.app')

@section('title')
    Dettagli fumetto
@endsection

@section('container')
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Thumb</th>
                <th>Price</th>
                <th>Series</th>
                <th>Sale_date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                <td>€{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
            </tr>
        </tbody>
    </table>
@endsection
