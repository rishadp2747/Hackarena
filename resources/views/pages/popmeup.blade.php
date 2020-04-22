@extends('layout.outline')
@section('content')
@include('layout.nav')
@include('layout.flash')
<div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h2>popMeUp</h2>
                <p class="p-3">
                   enter the credentials
                </p>
                                  
                <div class="let-content w-50 mx-auto" > 
                    <form name="popMeUpform" action="" method="GET">
                    Enter the data: <br>
                    <div class="form-group text-left  ">
                    <input type="text" name="inputbox" autofocus class="form-control  " maxlength="5" value="" id="popMeUp">
                    </div>
                    <button type="submit" name="button" class="btn btn-outline-primary ml-2" value="click">Submit</button>
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
   
