<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 7.x & VueJs 2.x</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <script src="{{asset('js/all.min.js')}}"></script>
    </head>
    <body>
        <div id="app">
            {{-- MAIN APLICATION --}}
        </div>

        <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
