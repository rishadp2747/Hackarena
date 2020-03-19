<!DOCTYPE html>
<html>
    <head>
        <title>HackArena | </title>
        <!--meta tags -->
        <link rel="icon" href="{{asset('img/logo/icon.png')}}" type="image/x-icon"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
        @yield('content')
       
    </body>
   
   
</html>