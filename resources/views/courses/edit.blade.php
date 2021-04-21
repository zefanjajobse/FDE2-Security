@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    @if (session('status'))
        <div id="alert" class="alert alert-success alert-dismissible">
            {{ session('status') }}
        </div>
    @endif
    <section>
        <h3>Bewerk onderdeel</h3>
        <hr>
        <h3>toetsitems</h3>
        <table>
            <tr>
                <th>Toetsnaam</th>
                <th>Beste cijfer</th>
                <th>Laagst haalbare cijfer</th>
            </tr>
            @if($course->grades->isEmpty())
                <td>N/A</td>
            @else
                @foreach($course->grades as $grade)
                    <tr>
                        <td>{{ $grade->test_name }}</td>
                        <td>{{ $grade->best_grade }}</td>
                        <td>{{ $grade->lowest_passing_grade }}</td>
                        <td><button type="button" onclick="location.href='{{ route('grades.edit', $grade->id) }}';" class="btn btn-secondary mb-2">Bewerken</button></td>
                    </tr>
                @endforeach
            @endif
        </table>
        <br>
        <div class="form-group">
            <button type="button" onclick="location.href='{{ route('grades.create', ['course' => $course->id]) }}';" class="btn btn-secondary mb-2">Toevoegen</button>
        </div>
        <br>
        <hr>
        <form method="POST" action="{{ route('courses.update', $course->id) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="col">
                    <label for="course_name">CU-code:</label>
                    <input class="form-control @error('CU_code') is-invalid @enderror" type="text" id="CU_code" name="CU_code" placeholder="CU-code (required)" value="{{ (old('CU_code') == null) ? $course->CU_code : old('CU_code') }}">
                    <div class="invalid-feedback">
                        Vul een cursusnaam in van minimaal 3 tekens
                    </div>
                </div>
                <div class="col">
                    <label for="test_name">Naam:</label>
                    <input class="form-control @error('name') is-invalid @enderror"  type="text" id="name" name="name" placeholder="Cursusnaam (required)" value="{{ (old('name') == null) ? $course->name : old('name') }}">
                    <div class="invalid-feedback">
                        Vul een type toets in van minimaal 8 tekens
                    </div>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <label for="credits">Te behalen EC:</label>
                    <input class="form-control input-sm @error('credits') is-invalid @enderror" type="number" step="0.1" id="credits" name="credits" placeholder="Nummer tussen 1 en 99" value="{{ (old('credits') == null) ? $course->credits : old('credits') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 1 en 99
                    </div>
                </div>
                <div class="col">
                    <label for="school_year">Cursus is in schooljaar</label>
                    <input class="form-control input-sm @error('school_year') is-invalid @enderror" type="number" id="school_year" name="school_year" placeholder="Nummer tussen 1 en 4" value="{{ (old('school_year') == null) ? $course->school_year : old('school_year') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 1 en 4
                    </div>
                </div>
                <div class="col">
                    <label for="quarter">Cursus is in kwartaal:</label>
                    <input class="form-control input-sm @error('quarter') is-invalid @enderror" type="number" id="quarter" name="quarter" placeholder="Nummer tussen 0 en 4, 0 voor globaal vak" value="{{ (old('quarter') == null) ? $course->quarter : old('quarter') }}"><br>
                    <div class="invalid-feedback">
                        Dit moet een hoeveelheid zijn tussen 0 en 4, 0 voor een globaal vak
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-check">
                    <input class="form-check-input @error('started') is-invalid @enderror" type="checkbox" id="started" name="started" <?php
                        if(old('started') == null) {
                            if($course->started) {
                                echo "checked";
                            }
                        } else {
                            echo "checked";
                        }
                        ?>>
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
        <form method="POST" action="{{ route('courses.destroy', $course->id) }}">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Weet je het zeker?')" class="btn btn-secondary mb-2" type="submit">Verwijderen</button>
        </form>
    </section>
    <script src="/resources/alert-close.js"></script>
@endsection
