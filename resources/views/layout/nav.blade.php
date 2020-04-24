<nav id="app" class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('img/logo/logo.png')}}" width="50" height="50" class="d-inline-block align-middle mr-3" alt="">
        Hackarena 2.0
    </a>

    <div class="collapse navbar-collapse" id="navbarText">
        @auth
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Challenges 
                    </a>
                    <div class="dropdown-menu ch" aria-labelledby="navbarDropdown">
                    @foreach ($challenges as $item)
                        @if ($item->challenge_name != 'Quiz 1' and $item->challenge_name != 'Quiz 2' and $item->challenge_name != 'Quiz 3' and $item->challenge_name != 'Quiz 3' and $item->challenge_name != 'Quiz 4' and $item->challenge_name != 'Quiz 5' )
                            <a class="dropdown-item" href='{{route($item->challenge_route, ['id' => $item->id])}}'>{{$item->challenge_name}} <span>{{$item->challenge_score}} </span></a>
                        @endif
                    @endforeach
                    <a class="dropdown-item" href='{{route('quiz', ['id' => '11'])}}'>Quiz<span> 10*5 = 50</span></a>
                    
                    </div>
                </li>
            </ul>
            
        @endauth
        
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            @else 
                <li class="nav-item mr-3 p-2">
                    <a href='{{route("home")}}'>Home </a>
                    
                </li>
                <li class="nav-item mr-3 p-2">
                        <a>Score : {{ Auth::user()->total_score  }}</a>
                    
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        
        
    </div>
</nav>