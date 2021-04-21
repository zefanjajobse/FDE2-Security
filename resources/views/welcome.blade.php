@extends('layout')

@section('content')
    <section>
        <h3>
            Het HBO-niveau past bij mij omdat ...
        </h3>
        <p>
            Het geeft mij een extra challange na mijn vorige studie.
            En later wil ik het liefst werken in de virtualisatie (Cloud engineer), en anders Software engineer.
        </p>
    </section>
    <section>
        <h3>De opleiding past bij mij want ...</h3>
        <p>
            Ik ben intrinsiek, en ik was altijd al bezig binnen de ICT met bijvoorbeeld mensen helpen binnen het gebied en nu meer gericht op zelf iets maken.
            Bij mijn de vorige opleiding heb ik via deze school programming basics gedaan om programmeren te proberen,
            en heb daarna zelfstandig andere manieren gezocht om mijzelf hierin te vorderen.
        </p>
    </section>
    <section>
        <h3>Mijn vervolg stappen zijn ...</h3>
        <p>
            Voor ITP ga ik naar Duitsland wanneer dat kan samen met me zus, want vroeg of ze meekon naar verschillende museums.
            Verder meedoen met de activiteiten van SV-Helloworld voor in ieder geval IT-P en misschien HZ-P.
        </p>
    </section>
    <section>
        <p>
        <h3>mijn voorcursussen/kennis programmeren</h3>
        <ol>
            <li>
                <a href="./Scalda%20(Programming%20cursus)/8th%20week%20programming%20cursus/">Programming basics (week 8)</a> bij HZ via mijn vorige school; Scalda.
            </li>
            <li>
                <a href="https://www.codecademy.com/learn/paths/learn-how-to-build-websites">Build a website</a> via CodeAccademy
            </li>
            <li>
                <a href="https://www.codecademy.com/learn/paths/computer-science">computer science</a> via CodeAccademy
            </li>
            <li>
                Discord bots (python, zie voorbeeld)
            </li>
            <h4>web design:</h4>
            <li>
                <a href="https://hofstede-reigersberg.nl/">hofstede-reigersberg.nl</a>
            </li>
            <li>
                <a href="http://bandofbrothers.site/">community site</a>
            </li>
            <p>
                <img src="./resources/images/discord-bot.png" height="300px" alt="Discord bot">
                <img src="./resources/images/help-command-bot.png" height="300px" alt="Discord bot">
            </p>
        </ol>
        </p>
    </section>
    <section>
        <h2>Nieuw onder mijn beroep</h2>
        @foreach($articles as $article)
            <ul>
                <a href="/profession/{{ $article->id }}"><h3>{{ $article->title }}</h3></a>
                <p>{{ $article->excerpt }}</p>
            </ul>
        @endforeach
    </section>
@endsection
