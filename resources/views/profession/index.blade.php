@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        @foreach($articles as $article)
            <ul>
                <div class="list">
                    <div class="icon"><img src="{{ $article->icon }}" alt="{{ $article->title }} logo"></div>
                    <a href="{{ route('profession.show', $article->id) }}"><h3>{{ $article->title }}</h3></a>
                </div>
                <p>{{ $article->excerpt }}</p>
            </ul>
            <br>
        @endforeach
        <div class="form-group">
            <button type="button" onclick="location.href='{{ route('profession.create') }}';" class="btn btn-secondary mb-2">Bedrijf toevoegen</button>
        </div>
        <div class="list">
        Pagina {{ $articles->currentPage() }}/{{ $articles->lastPage() }}
            {{--page buttons--}}
            @if(!empty($articles->previousPageUrl()))
                <a href="{{ $articles->previousPageUrl() }}">◀</a>
            @endif
            @if(!empty($articles->nextPageUrl()))▶
                <a href="{{ $articles->nextPageUrl() }}"></a>
            @endif
        </div>
    </section>
@endsection
