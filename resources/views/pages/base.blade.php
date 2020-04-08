
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">
    @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Base</h3>
                <p class="p-3">
                    64 (sixty-four) is the natural number following 63 and preceding 65. 65-1=64
                </p>

                <p>
                    ZmNzaGFja2FyZW5hMWZsYWdoZXJ1
                </p>
                                  
                <div class="let-content w-100 mb-5" > 
                    <form method="POST" action="{{route('crypto',['id' => $id])}}">
                    @csrf
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="base" name="base" placeholder="Enter Code here">
                        </div>
                        <button type="submit" class="btn btn-outline-primary ml-2">Submit</button>
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
    




 