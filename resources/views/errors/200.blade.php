@extends('layout.outline')
@section('content')
    @include('layout.nav')

    <div class="container" style="height: 800px">
        <div class="d-flex w-100 h-100 justify-content-center align-items-center flex-column">

                <img src={{asset('img/logo/logo.png')}} class="m-5" width="250" height="250" >
                <h2 style="color:tomato;"> {{ $exception->getMessage() }} </h2>
                
        </div>
       
                

    </div>
    
    <div class="footer d-flex  justify-content-center" style="position:fixed;">
        
            <div class="pt-4 text-center">
            <p class="design">Developed & Designed by <a href="#">FCS</a></p>
            <p class="copy">All right &copy; 2019-20 reserved </p>
        </div>
        
    </div>

@endsection

