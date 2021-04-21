@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <div class="form-group">
            <button type="button" onclick="location.href='{{ route('profession.index') }}';" class="btn btn-primary mb-2">Terug naar lijst</button>
            <button type="button" onclick="location.href='{{ route('profession.edit', $article->id) }}';" class="btn btn-secondary mb-2">Bewerken</button>
        </div>
        <div class="list">
            <div class="icon"><img src="{{ $article->icon }}" alt="{{ $article->title }} logo"></div>
            <h1>{{ $article->title }}</h1>
        </div>
        <?= $article->body ?>
        <p>Bron: <a href="{{ $article->url }}">{{ $article->url }}</a></p>
    </section>
@endsection
