
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    <div class="d-flex justify-content-center align-content-center h-50 slide" >
        <img src="{{asset('img/slide.jpeg')}}"  class="w-100" height="650">
    </div>

    <div class="container">

        <div class="d-flex  flex-row justify-content-center align-content-center  ">
            <div class=" text-center register-content w-100 mb-5" > 
                <h3>REGISTER</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                    <input type="text" autofocus value="{{old('name')}}" required class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" value="{{old('username')}}" class="form-control  @error('username') is-invalid @enderror" required  id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter Userame">
                         @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" required  id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" required  id="password" name="password" placeholder="Enter Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" required  id="password_confirmation"  name="password_confirmation" placeholder="Re-Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="phone">Mobile</label>
                        <input type="text" value="{{old('phone')}}" class="form-control   @error('phone') is-invalid @enderror" name="phone" required  id="phone" placeholder="807XXXXXX">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-end w-100 flex-row py-4 pl-4 ">
                        
                        <button type="reset" class="btn btn-outline-primary  ml-2 ">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary ml-2 ">Register</button>

                    </div>
                    

                    <div class="d-flex justify-content-center w-100 mt-4  p-2 reg-footer">
                            <a href="{{ route('login') }}" >I Already Have An Account</a><br>
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
    




 