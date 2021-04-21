{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}
@extends('layout')

@section('content')
    <section>
        <h1>404 - Pagina is niet gevonden</h1>
        <p>We hebben de pagina waar wij u naar genavigeerd hebben niet gevonden.</p>
        <p>Gebruik de navigatiebalk hierboven om terug te gaan naar een normale pagina, geef het graag ook aan aan de beheerder van deze website hoe u hier terecht bent gekomen zodat ze dit op kunnen oplossen.</p>
    </section>
@endsection
