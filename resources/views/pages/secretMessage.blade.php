
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Secret Message From ISRO</h3>
                <p></p>
                <a href="{{asset('audio/message.wave')}}" download>This is message</a>
               
            </div>


            <div class="let-content w-100 mb-5" > 
                <form method="POST" action="{{route('checkmessage')}}">
                    @csrf
                    <div class="form-group text-left">
                        <input type="text" name="message" class="form-control @error('message') is-invalid @enderror"  placeholder="Enter Message here">
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary ml-2 ">Submit</button>
                </form>
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
    




 