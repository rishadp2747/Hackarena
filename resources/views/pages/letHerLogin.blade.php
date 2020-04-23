
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

            @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Let Him Login</h3>
                <h4>Score - 
                 @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>
                <p class="text-justify p-3">
                    Once upon a time, Kevin was the most elusive computer break-in artist in history. His famous ‘electronic joyride’ made him part of the FBI’s most wanted list for hacking into more than 40 major corporations, just for the challenge of it. 
                  </p>
                  <p class="text-justify p-3">
                    Kevin gained access to the computers and networks of the world's biggest companies while eluding the authorities through phone switches, computer systems and cellular networks. For three years he went on the run, using false identities and escaping from city to city until a final showdown with the Feds, who would stop at nothing to bring him down. 
                  </p>
                  <p class="text-justify p-3">
                    Kevin’s creativity, skills and persistence forced the authorities to rethink the way they pursued hackers. Those ripples brought permanent changes to the way companies and people protect their most sensitive information. His story became legendary and is the basis for many books, articles, films and TV programs.
                  </p>

                  <p class="text-justify p-3">
                    Today, Kevin is a trusted security consultant to the Fortune 500 and governments worldwide. 
                </p>

                    <p class="text-justify p-3">
                            As the CEO of Mitnick Security Consulting, Kevin, and The Global Ghost Team™ now maintain a 100 percent successful track record in their ability to penetrate the security of any system they’re paid to hack, using a combination of technical exploits and social engineering. 
                    </p>

                    <p class="text-justify p-3">
                            In his role of Chief Hacking Officer of KnowBe4 he endorses and helps produce the world's #1 security awareness training and platform to train employees to better manage the urgent IT security problems of social engineering, spear phishing and ransomware attacks.
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
                                <a href="{{route('letherforgot',['id' => $id ])}}">Forgot my password</a>
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
    



@endsection
    




 