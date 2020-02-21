<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
        <div id="app">
            <v-app>
            <sample2-component></sample2-component>
            <example-component test="laravelからvueへ受けわたし"><example-component/>
            <sample2-component></sample2-component>
            </v-app>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>