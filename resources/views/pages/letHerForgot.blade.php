
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>She Forgot Password</h3>
                 
                    <div class="let-content w-100 mb-5" > 
                    <form method="POST" action="{{route('lethercheck')}}">
                            @csrf
                            <div class="form-group text-left">
                                <label for="flag">Mother's Name</label>
                                <input name="mother" type="text" class="form-control @error('mother') is-invalid @enderror"  placeholder="">
                                @error('mother')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>

                            <div class="form-group text-left">
                                <label for="flag">Father's Name</label>
                                <input name="father" type="text" class="form-control @error('father') is-invalid @enderror"  placeholder="">
                                @error('father')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn my-5 btn-outline-primary ml-2 ">Change Password</button>
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
    




 