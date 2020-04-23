
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

            @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>OSNT</h3>
                <h4>Score - 
                    @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>
          
                <div class="let-content w-100 my-5" > 
                <form method="POST" action="">
                        @csrf
                        <div class="form-group text-left">
                            <label for="ans">When FCS hosted their server ?</label>
                            <input type="date" name="ans" class="form-control @error('ans') is-invalid @enderror"  placeholder="Enter Answer here">
                            @error('ans')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary ml-2 my-5 ">Submit</button>
                    </form>
                </div>
                

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
    




 