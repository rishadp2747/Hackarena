@extends('layout.outline')
@section('content')
@include('layout.nav')
@include('layout.flash')
<div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>popMeUp</h3>
                <p class="p-3">
                   enter the credentials
                </p>
                                  
                <div class="let-content w-100 mb-5" > 
                    <form name="popMeUpform" action="" method="GET">
                    Enter the data: <br>
                    <input type="text" name="inputbox" value="" id="popMeUp">
                    <input type="button" name="button" value="click">
                    </form>
                      </div>
                </div>
            @include('layout.flag')
        </div>

    </div>
    <div class="footer d-flex  justify-content-center">
        
        <div class="pt-4 text-center">
           <p class="design">Developed & Designed by <a href="#">FCS</a></p>
           <p class="copy">All right &copy; 2019-20 reserved </p>
       </div>
     
   </div>
   



@endsection
   
