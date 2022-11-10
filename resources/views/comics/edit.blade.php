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
            <input class="@error('title') is-validator @enderror" type="text" name="title" id="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <h5>{{ __('Il titolo è obbligatorio') }}</h5>
            @enderror
        </div>
        <div>
            <label for="series">Series</label>
            <input class="@error('series') is-validator @enderror" type="text" name="series" id="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
            <h5>{{ __('Il campo Serie deve essere una stringa e avere una lunghezza massima di 50 caratteri') }}</h5>
            @enderror
        </div>
        <div>
            <label for="sale_date">Sale date</label>
            <input class="@error('sale_date') is-validator @enderror" type="text" name="sale_date" id="sale_date"
                value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
            <h5>{{ __('Il campo Data deve avere un formato YYYY-MM-DD') }}</h5>
            @enderror
        </div>
        <div>
            <label for="type">Type</label>
            <input class="@error('type') is-validator @enderror" type="text" name="type" id="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
            <h5>{{ __('Il campo Tipo deve essere una stringa e avere una lunghezza massima di 50 caratteri') }}</h5>
            @enderror
        </div>
        <div>
            <label for="price">Price</label>
            <input class="@error('price') is-validator @enderror" type="text" name="price" id="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
            <h5>{{ __('Il campo Prezzo deve contenere un valore di tipo numerico') }}</h5>
            @enderror
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input class="@error('thumb') is-validator @enderror" type="text" name="thumb" id="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
            <h5>{{ __('Il campo URL deve contenere un link valido') }}</h5>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="@error('description') is-validator @enderror" name="description" id="description" cols="30"
                rows="10"> {{ old('description', $comic->description) }} </textarea>
            @error('description')
            <h5>{{ __('Il campo Descrizione deve essere una stringa di caratteri') }}</h5>
            @enderror
        </div>
        <div>
            <input type="submit" value="Modifica">
        </div>

    </form>

    <a href="{{ route('comics.show', $comic->id) }}">Torna indietro</a>
@endsection
