<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bookface - Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">

    </head>
    <body>
        <section id="header-section">
            <h1>Welcome to Bookface!</h1>
        </section>
        <section id="actions-section">
            <a class="button" href="/register">Register</a>
        </section>
        <section id="posts-section">
        </section>
    </body>
</html>
