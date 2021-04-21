{{--@extends('errors::minimal')--}}

{{--@section('title', __('Server Error'))--}}
{{--@section('code', '500')--}}
{{--@section('message', __('Server Error'))--}}
@extends('layout')

@section('content')
    <section>
        <h1>500 - Fout bij het uitvoeren van de aanvraag</h1>
        <p>Gebruik de navigatiebalk hierboven om terug te gaan naar een normale pagina, geef het graag ook aan aan de beheerder van deze website hoe u hier terecht bent gekomen zodat ze dit op kunnen oplossen.</p>
    </section>
@endsection
