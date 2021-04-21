@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>Nieuw onderdeel</h3>
        <br>
        <form method="POST" action="{{ route('courses.store') }}">
            @csrf
            <div class="form-row">
                <div class="col">
                    <label for="course_name">CU-code:</label>
                    <input class="form-control @error('CU_code') is-invalid @enderror" type="text" id="CU_code" name="CU_code" placeholder="CU-code (required)" value="{{ old('CU_code') }}">
                    <div class="invalid-feedback">
                        Vul een cursusnaam in van minimaal 3 tekens
                    </div>
                </div>
                <div class="col">
                    <label for="test_name">Naam:</label>
                    <input class="form-control @error('name') is-invalid @enderror"  type="text" id="name" name="name" placeholder="Cursusnaam (required)" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        Vul een type toets in van minimaal 8 tekens
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="credits">Te behalen EC:</label>
                    <input class="form-control input-sm @error('credits') is-invalid @enderror" type="number" id="credits" step="0.1" name="credits" placeholder="Nummer tussen 1 en 99" value="{{ old('credits') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 1 en 99
                    </div>
                </div>
                <div class="col">
                    <label for="school_year">Cursus is in schooljaar</label>
                    <input class="form-control input-sm @error('school_year') is-invalid @enderror" type="number" id="school_year" name="school_year" placeholder="Nummer tussen 1 en 4" value="{{ old('school_year') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 1 en 4
                    </div>
                </div>
                <div class="col">
                    <label for="quarter">Cursus is in kwartaal:</label>
                    <input class="form-control input-sm @error('quarter') is-invalid @enderror" type="number" id="quarter" name="quarter" placeholder="Nummer tussen 0 en 4, 0 voor globaal vak" value="{{ old('quarter') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 0 en 4, 0 voor een globaal vak
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-check">
                    <input class="form-check-input @error('started') is-invalid @enderror" type="checkbox" id="started" name="started" {{ old('started') ? 'checked' : '' }}>
                    <label class="form-check-label" for="started">Gestart aan cursus</label>
                    <div class="invalid-feedback">
                        Mag 1 of 0 zijn
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
                <button type="button" onclick="location.href='{{ route('dashboard') }}';" class="btn btn-secondary mb-2">Annuleren</button>
            </div>
        </form>
    </section>
@endsection
