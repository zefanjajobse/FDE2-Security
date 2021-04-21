<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @yield('headers')
    <link rel="stylesheet" href="/resources/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Roboto+Mono:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <a href="{{ Request::is('/') ? '#' : "/"}}">Home</a>
    <a href="{{ Request::is('profile') ? '#' : "/profile"}}">Profiel</a>
    <a href="{{ Request::is('dashboard') ? '#' : "/dashboard"}}">Dashboard</a>
    <a href="{{ Request::is('faq') ? '#' : "/faq"}}">Frequently Asked Questions</a>
    <a href="{{ Request::is('my-motivation') ? '#' : "/my-motivation"}}">Mijn motivatie</a>
    <a href="{{ Request::is('profession') ? '#' : "/profession"}}">Beroep</a>
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <a href="{{route('logout')}}"
           onclick="event.preventDefault();
             this.closest('form').submit();">Uitloggen</a>
        </form>
    @else
        <a href="{{ route('login') }}">Log in</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
</nav>
<div id="hamburger">
    <p><a href="{{ Request::is('/') ? '#' : "/"}}">Home</a></p>
    <p><a href="{{ Request::is('profile') ? '#' : "/profile"}}">Profiel</a></p>
    <p><a href="{{ Request::is('dashboard') ? '#' : "/dashboard"}}">Dashboard</a></p>
    <p><a href="{{ Request::is('faq') ? '#' : "/faq"}}">Frequently Asked Questions</a></p>
    <p><a href="{{ Request::is('my-motivation') ? '#' : "/my-motivation"}}">Mijn motivatie</a></p>
    <p><a href="{{ Request::is('profession') ? '#' : "/profession"}}">Beroep</a></p>
</div>
<div id="mobile-nav" onclick="hamburgerMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>
<div id="mobile-close" onclick="hamburgerClose()">
    X
</div>
<main>
    @yield('content')
</main>
<script src="/resources/hamburger-menu.js"></script>
</body>
</html>
