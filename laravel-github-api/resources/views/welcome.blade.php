<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script>
             window.user = @json(auth()->user());
            window.loggedIn = @json(auth()->check());
        </script>

        <!-- Styles -->
        <style>
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{-- Check whether user is authenticated or not --}}
        {{-- {{auth()->check()}} --}}
        {{-- Check about user details --}}
            {{-- {{auth()->user()}} --}}
        <div id="app">
            
          <main-component></main-component>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>