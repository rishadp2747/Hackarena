
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    <div class="d-flex justify-content-center align-content-center h-50 slide" >
        <img src="{{asset('img/slide.jpeg')}}"  class="w-100" height="650">
    </div>

    <div class="container">

        <div class="d-flex p-5 flex-row">
            <div class="p-2 text-center  " > 
                <h3>About Hackarena</h3>
                <p class="text-justify p-3">
                    Welcome to HackArena 2.0. A learning CTF from the developers of FCS. Play around and have fun.
                    CTF (Capture The Flag) is a kind of information security competition that challenges contestants 
                    to solve a variety of tasks ranging from a scavenger hunt on wikipedia to basic programming exercises, 
                    to hacking your way into a server to steal data. In these challenges, the contestant is usually asked 
                    to find a specific piece of text that may be hidden on the server or behind a webpage. This goal
                    is called the flag, hence the name!
                </p>
            </div>
        
        </div>

    </div>

    <div class="footer d-flex  justify-content-center">
        
         <div class="pt-4 text-center">
            <p class="design">Developed & Designed by <a href="#">FCS</a></p>
            <p class="copy">All right &copy; 2019-20 reserved </p>
        </div>
      
    </div>
    



@endsection
    




 