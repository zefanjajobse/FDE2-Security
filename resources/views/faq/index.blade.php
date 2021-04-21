@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>FAQ</h3>
        <ol>
            @foreach($faqs as $faq)
            <li>{{ $faq->title }}
                <p>{{ $faq->body }}</p>
                <p>@if($faq->link)<a href={{$faq->link}}>{{$faq->link}}</a>@endif</p>
                <div class="form-group list">
                    <button type="button" onclick="location.href='{{ route('faq.edit', $faq->id) }}';" class="btn btn-secondary mb-2">Bewerken</button>&nbsp;
                    <form method="POST" action="{{ route('faq.destroy', $faq->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Weet je het zeker?')" class="btn btn-secondary mb-2" type="submit">Verwijderen</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ol>
        <div class="form-group">
            <button type="button" onclick="location.href='{{ route('faq.create') }}';" class="btn btn-secondary mb-2">Toevoegen</button>
        </div>
        <div class="list">
            Pagina {{ $faqs->currentPage() }}/{{ $faqs->lastPage() }}
            {{--page buttons--}}
            @if(!empty($faqs->previousPageUrl()))
                <a href="{{ $faqs->previousPageUrl() }}">◀</a>
            @endif
            @if(!empty($faqs->nextPageUrl()))▶
            <a href="{{ $faqs->nextPageUrl() }}"></a>
            @endif
        </div>
    </section>
@endsection
