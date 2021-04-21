@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>Nieuwe bedrijfinformatie</h3>
        <form method="POST" action="{{ route('profession.store') }}">
            @csrf
            <div class="form-group list">
                <label for="title">Titel:</label><br>
                <input class="form-control input-sm @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Titel (required)" value="{{ old('title') }}"><br>
                <div class="invalid-feedback">
                    Vul een titel in van minimaal 8 tekens
                </div>
                <label for="excerpt">Descriptie:</label><br>
                <input class="form-control input-sm @error('excerpt') is-invalid @enderror" type="text" id="excerpt" name="excerpt" placeholder="Descriptie (required)" value="{{ old('excerpt') }}"><br>
                <div class="invalid-feedback">
                    Vul een kleine descriptie in van minimaal 10 tekens
                </div>
                <label for="body">Inhoud:</label><br>
                <textarea class="form-control input-lg @error('body') is-invalid @enderror" type="text" id="body" name="body" placeholder="Inhoud (required)" rows="12">{{ old('body') }}</textarea><br>
                @error('body')
                    <div class="invalid-feedback">
                        minimaal 20 karakters, max 9999
                    </div>
                @enderror
                <label for="url">evt. bron:</label><br>
                <input class="form-control input-sm @error('url') is-invalid @enderror" type="text" id="url" name="url" placeholder="https://..." value="{{ old('url') }}"><br>
                <div class="invalid-feedback">
                    Moet een geldige url zijn wanneer ingevuld
                </div>
                <label for="icon">evt. icoon:</label><br>
                <input class="form-control input-sm @error('icon') is-invalid @enderror" type="text" id="icon" name="icon" placeholder="https://..." value="{{ old('icon') }}"><br>
                <div class="invalid-feedback">
                    Moet een geldige url zijn wanneer ingevuld
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
                <button type="button" onclick="location.href='{{ route('profession.index') }}';" class="btn btn-secondary mb-2">Annuleren</button>
            </div>
        </form>
    </section>
@endsection
