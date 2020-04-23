
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

            @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Chess Board</h3>
                <h4>Score - 
                    @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>
                <p class="p-3 text-left">
                    "Oh emperor, my wishes are simple. I only wish for this. Give me one grain of rice for the first square of the chessboard, two grains for the next square, four for the next, eight for the next and so on for all 64 squares, with each square having double the number of grains as the square before."
                </p>

                <p class="p-3 text-left">
                    "Then my boy let me ask you one question what is 90-30+4-8+7+1 ?"
                </p>

                <p class="p-3 text-left">
                    'Its number of black + white my lord !'
                </p>

                <p class="text-left p-3">
                    Then here your rice : RkNTIERldmxvcGVkIEhhY2thcmVuYSBDVEY=
                </p>
                                  
                <div class="let-content w-100 mb-5" > 
                <form method="POST" action="{{route('checkboard')}}">
                        @csrf
                        <div class="form-group text-left">
                            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"  placeholder="Enter Code here">
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary ml-2 ">Submit</button>
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
    




 