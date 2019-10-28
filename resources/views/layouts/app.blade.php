<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .top-hero {
            background: url({{ asset('img/emploitic-connect.jpg') }});
        }
        .form-hero {
            background: url({{ asset('img/formulaire.jpg') }});
            background-size: 100% 100%;
        }
    </style>
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">

        <nav class="sticky top-0 flex items-center justify-between bg-blue-700 text-white px-32 py-4">
            <div>
                <a href="/" class="text-2xl text-white hover:text-gray-200 hover:no-underline">logo goes here</a>
            </div>

            <div class="flex items-center justify-center">
                <ul class="flex items-center justify-center m-0">
                    <li class="mr-5 hover:underline"><a href="#">Accueil</a></li>
                    <li class="mr-5 hover:underline"><a href="#">Espace client</a></li>
                    <li class="mr-5 hover:underline"><a href="#">Inscription</a></li>
                    <li class=" hover:underline"><a href="#">Organisation</a></li>
                </ul>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    @yield('scripts')

</body>
</html>
