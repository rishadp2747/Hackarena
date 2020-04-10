
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

            @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Login</h3>


        
                    <div class="let-content w-100 mb-5" > 
                        <form method="POST" id='form' action="{{route('checklogin')}}">
                            @csrf
                            <div class="form-group text-left">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter Username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group text-left">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" password="password" placeholder="Enter Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-primary ml-2 ">Login</button>
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

    <script src="{{ asset('js/main.js') }}" defer></script>
    



@endsection
    




 