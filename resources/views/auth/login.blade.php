
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    <div class="d-flex justify-content-center align-content-center h-50 slide" >
        <img src="{{asset('img/slide.png')}}"  class="w-100" height="650">
    </div>

    <div class="container">

        <div class="d-flex  flex-row justify-content-center align-content-center  ">
            <div class=" text-center register-content w-100 mb-5" > 
                <h3>LOGIN</h3>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter Userame">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                 
                    </div>
                
                    <div class="form-group">
                        <input class="form-check-input pl-3 ml-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label ml-4" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                 
                    </div>
                    
                    
                    <div class="d-flex justify-content-end w-100 flex-row py-4 pl-4 ">
                        

                        <button type="reset" class="btn btn-outline-primary  ml-2 ">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary ml-2 ">Login</button>

                    </div>
                    

                    <div class="d-flex justify-content-center w-100 mt-4  p-2 reg-footer">
                            <a href="{{ route('register') }}" >I Don't have an account. Register ..</a><br>
                    </div>
                </form>
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
    




 