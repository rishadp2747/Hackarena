
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Pop Me Up</h3>
                <h4>Score - 
                    @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>

                                  
                <div class="let-content w-100 mb-5" > 
                    <form>
                        @csrf
                        <div class="form-group text-left" id="space">
                            <input type="text" id="pop" class="form-control @error('code') is-invalid @enderror"  placeholder="Pop Me Up" >
                        </div>
                        <button type="button" id="popbtn" class="btn btn-outline-primary ml-2 ">Pop</button>
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
    




 