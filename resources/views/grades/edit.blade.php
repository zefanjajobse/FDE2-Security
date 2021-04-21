@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>Bewerk toetsitem voor {{ $grade->course->name }}</h3>
        <br>
        <form method="POST" action="{{ route('grades.update', $grade->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" id="course_id" name="course_id" value="{{ $grade->course_id }}">
            <div class="form-row">
                <div class="col">
                    <label for="test_name">Soort toets:</label>
                    <input class="form-control @error('test_name') is-invalid @enderror"  type="text" id="test_name" name="test_name" placeholder="Soort toets (required)" value="{{ (old('test_name') == null) ? $grade->test_name : old('test_name') }}">
                    <div class="invalid-feedback">
                        Vul een type toets in van minimaal 8 tekens
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="lowest_passing_grade">Laagst haalbare cijfer:</label>
                    <input class="form-control input-sm @error('lowest_passing_grade') is-invalid @enderror" type="number" step="0.1" id="lowest_passing_grade" name="lowest_passing_grade" placeholder="Nummer tussen 0 en 10" value="{{ (old('lowest_passing_grade') == null) ? $grade->lowest_passing_grade : old('lowest_passing_grade') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 0 en 10
                    </div>
                </div>
                <div class="col">
                    <label for="best_grade">Huidige cijfer:</label>
                    <input class="form-control input-sm @error('best_grade') is-invalid @enderror" type="number" id="best_grade" step="0.1" name="best_grade" placeholder="Nummer tussen 0 en 10" value="{{ (old('best_grade') == null) ? $grade->best_grade : old('best_grade') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 0 en 10
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Opslaan</button>
                <button type="button" onclick="location.href='{{ route('courses.edit', $grade->course_id) }}';" class="btn btn-secondary mb-2">Annuleren</button>
            </div>
        </form>
        <form method="POST" action="{{ route('grades.destroy', $grade->id) }}">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Weet je het zeker?')" class="btn btn-secondary mb-2" type="submit">Verwijderen</button>
        </form>
    </section>
@endsection
