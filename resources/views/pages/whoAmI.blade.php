
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Who am i ?</h3>
                <h4>Score - 
                 @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>
                <a href="{{asset('img/who am i.png')}}" download>
                    <img src="{{asset('img/who am i.png')}}" class="my-3">
                </a>
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
    




 