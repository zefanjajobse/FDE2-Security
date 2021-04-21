@extends('layout')

@section('headers')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <section>
        <h3>Profiel</h3>
        <div class="list">
            <img width="265" height="265" src="./resources/images/Zefanja-Jobse_SKT_6233_T.jpg" alt="my picture">
            <iframe width="265" height="265" id="gmap_canvas" src="https://maps.google.com/maps?q=oud-vossemeer&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        </p>
        Wedstrijd ICT beheer: <a href="https://worldskillsnetherlands.nl/stf/uitslagen/skills-heroes-2020/">skills-heroes-2020</a>
        (mijn opleiding was netwerkbeheerder maar ik deed mee als ICT beheerder)<br>
        </p>
        <table>
            <tr>
                <th>opleidingen</th>
            </tr>
            <tr>
                <td>HZ HBO ICT</td>
                <td>2020 - heden</td>
            </tr>
            <tr>
                <td>Scalda: ICT Netwerkbeheer Niveau 4</td>
                <td>2017 - 2020</td>
            </tr>
            <tr>
                <td>Scalda: ICT Medewerker Beheer Niveau 3</td>
                <td>2016 - 2017</td>
            </tr>
            <tr>
                <td>Scalda: ICT Medewerker Niveau 2</td>
                <td>2015 - 2016</td>
            </tr>
        </table>
        </p>
        <table>
            <tr>
                <th>Hobby´s en Interesses</th>
            </tr>
            <tr>
                <td>foto's maken/bewerken</td>
            </tr>
            <tr>
                <td>geluidstechniek</td>
            </tr>
            <tr>
                <td>andere helpen/in IT</td>
            </tr>
            <tr>
                <td>eigen codeerprojecten (grotendeels python)</td>
            </tr>
        </table>
        </p>
        <table>
            <tr>
                <th>Werkervaring</th>
            </tr>
            <tr>
                <td>Vrijwilligerswerk – netwerkbeheerder Christengemeente Tholen</td>
                <td>2017 - heden</td>
            </tr>
            <tr>
                <td>Vrijwilligerswerk – netwerk/systeem beheerder bij nachamu</td>
                <td>Juli 2018 - heden</td>
            </tr>
        </table>
    </section>
@endsection
