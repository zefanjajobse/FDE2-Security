@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>Bewerk FAQ item</h3>
        <form method="POST" action="{{ route('faq.update', $faq->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group list">
                <label for="title">Vraag:</label><br>
                <input class="form-control input-sm @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Vraag (required)" value="{{ (old('title') == null) ? $faq->title : old('title') }}"><br>
                <div class="invalid-feedback">
                    Vul een vraag in van minimaal 8 tekens
                </div>
                <label for="body">Antwoord:</label><br>
                <textarea class="form-control input-lg @error('body') is-invalid @enderror" type="text" id="body" name="body" placeholder="Antwoord (required)" rows="5">{{ (old('body') == null) ? $faq->body : old('body') }}</textarea><br>
                @error('body')
                <div class="invalid-feedback">
                    minimaal 20 karakters, max 9999
                </div>
                @enderror
                <label for="link">evt. link:</label><br>
                <input class="form-control input-sm @error('link') is-invalid @enderror" type="text" id="link" name="link" placeholder="https://..." value="{{ (old('link') == null) ? $faq->link : old('link') }}"><br>
                <div class="invalid-feedback">
                    Moet een geldige url zijn wanneer ingevuld
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
                <button type="button" onclick="location.href='{{ route('faq.index') }}';" class="btn btn-secondary mb-2">Annuleren</button>
            </div>
        </form>
    </section>
@endsection
