
@extends('layout.outline')
@section('content')

    @include('layout.nav')



    <div class="container verify mt-5">

        <div class="d-flex  flex-row justify-content-center align-content-center  ">
            <div class=" text-center register-content w-100 mb-5" > 
                <h3>Verify Your Email</h3>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        
        </div>

    </div>

    <div class="footer d-flex  justify-content-center" style="position:fixed;">
        
         <div class="pt-4 text-center">
            <p class="design">Developed & Designed by <a href="#">FCS</a></p>
            <p class="copy">All right &copy; 2019-20 reserved </p>
        </div>
      
    </div>
    



@endsection
    




 