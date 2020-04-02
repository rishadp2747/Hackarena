
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Let Her Login</h3>
                <p class="text-justify p-3">
                    Attention merchants and purveyors of quality hacker-centric products and services:
                     the call for ventors is now open!Let's get your goodies and gear in front of many 
                     thousands of hacker types:-many of whom enjoy shopping for cool stuff.
                  </p>
                  <p class="text-justify p-3">
                    There are a few rules to learn an application process,so please head to and get
                     familiar.please also note that we have a limited amount of space to offer, so the 
                     early birds have an advantage.
                  </p>
                  <p class="text-justify p-3">
                    Operators are standing by metaphorically speaking. ACT NOW !!!
                  </p>

                 
                    <div class="let-content w-100 mb-5" > 
                        <form>
                            <div class="form-group text-left">
                                <label for="flag">Username</label>
                                <input type="text" class="form-control"  placeholder="Enter Username">
                            </div>

                            <div class="form-group text-left">
                                <label for="flag">Password</label>
                                <input type="password" class="form-control"  placeholder="Enter Password">
                            </div>

                            <div class="form-group text-left">
                                <a href="{{route('letherforgot',['id'=>$id])}}">Forgot my password</a>
                            </div>

                            <button type="submit" class="btn btn-outline-primary ml-2 ">Login</button>
                        </form>
                    </div>
                

            </div>

            @include('layout.flag')
             @include('layout.flash')
        </div>

    </div>

    <div class="footer d-flex  justify-content-center">
        
         <div class="pt-4 text-center">
            <p class="design">Developed & Designed by <a href="#">FCS</a></p>
            <p class="copy">All right &copy; 2019-20 reserved </p>
        </div>
      
    </div>
    



@endsection
    




 