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
        <h3>Study Monitor</h3>
        {{--        year--}}
        @foreach($sortedCourses as $key_year => $courses_year)
            <h4>Jaar {{ $key_year+1 }}</h4>
            {{--        quarter--}}
            @foreach($courses_year as $key_quarter => $value_quarter)
                <hr>
                <div class="list">
                    <div class="list_heading">
                        @if($key_quarter == 0)
                            Overig
                        @else
                            B{{ $key_quarter }}
                        @endif
                    </div>
                    @foreach($value_quarter as $course)
                        {{--                    one item--}}
                        <a href="{{ route('courses.edit', $course->id) }}"> {{-- ability to click the grade to edit --}}
                            <div class="list_item">
                                <h6>{{ $course->name }}</h6>
                                <h7>Onderdelen:</h7>
                                <br>
                                @if($course->grades->isEmpty())
                                    <p>N/A</p>
                                @else
                                    @foreach($course->grades as $grade)
                                        {{ $grade->test_name }} - @if(empty($grade->best_grade)) N/A @else {{ $grade->best_grade }} @endif<br>
                                    @endforeach
                                @endif
                                <br>
                                <p>te behalen: {{ $course->credits }} EC</p>
                                <p>behaald: <?php
                                    if($course->started){
                                        if($course->average) {
                                            echo $course->average;
                                        } else {
                                            echo("gestart");
                                        }
                                    } else {
                                        echo("nog te doen");
                                    }?></p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        @endforeach
        <hr>
        <div class="list">
            <p>kleuren:</p>
            <p class="list_item_color">nog niet gestart</p>
            <p class="list_item_color started">gestart</p>
            <p class="list_item_color completed">compleet</p>
            <p class="list_item_color redo">redo</p>
        </div>
        <p>Huidig: {{ $currentEcs }}, NBSA limiet minimaal: 45/60 EC</p>
        <hr>
        <div class="form-group">
            <button type="button" onclick="location.href='{{ route('courses.create') }}';" class="btn btn-secondary mb-2">Toevoegen</button>
            Klik op het item om te bewerken
        </div>
    </section>

    <section>
        <h3>Study Gids</h3>
        <div class="list">
            <a href="https://learn.hz.nl/my/" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/hz-university-of-applied-sciences.png" alt="HZ logo"></div>
                    HZ Learn
                </div>
            </a>
            <a href="https://teams.microsoft.com/" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/microsoft-office-teams.svg" alt="Teams logo"></div>
                    Microsoft Teams (web)
                </div>
            </a>
            <a href="https://apps.hz.nl/rooster/default.aspx" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/hz-university-of-applied-sciences.png" alt="HZ logo"></div>
                    Rooster
                </div>
            </a>
            <a href="https://apps.hz.nl/WebshopApp/default.aspx" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/hz-university-of-applied-sciences.png" alt="HZ logo"></div>
                    Webshop
                </div>
            </a>
            <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/hz-university-of-applied-sciences.png" alt="HZ logo"></div>
                    studievoortgang
                </div>
            </a>
            <a href="https://www.w3schools.com/" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/w3schools.png" alt="w3schools logo"></div>
                    w3 Schools.com
                </div>
            </a>
            <a href="https://www.codecademy.com/learn" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/Codecademy.png" alt="CodeAcademy logo"></div>
                    CodeAcademy
                </div>
            </a>
            <a href="https://zefanjajobse.github.io/" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/github.svg" alt="Github logo"></div>
                    (persoonlijk) GitHub Page
                </div>
            </a>
            <a href="https://github.com/" target="_blank">
                <div class="button">
                    <div class="icon"><img src="/resources/images/logo's/github.svg" alt="Github logo"></div>
                    GitHub
                </div>
            </a>
        </div>
    </section>
    <script src="/resources/colors.js"></script>
    <script src="/resources/alert-close.js"></script>
@endsection
