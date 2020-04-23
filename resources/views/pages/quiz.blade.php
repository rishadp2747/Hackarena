
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

            @include('layout.flash')
        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                
                <h3>Quiz</h3>
                <h4>Score - 
                    @foreach ($challenges as $item)
                        @if ($item->id == $id)
                            {{$item->challenge_score}} 
                        @endif
                    @endforeach
                  </h4>

                <p class="mx-5">Each Question carry 10 marks and you can score 50 by submitting each question individually</p>
          
                <div class="let-content w-100 my-2 mt-4 py-3" > 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <div class="d-flex">
                                <label class="mx-3" for="ans"> Q.1) </label>
                                <input type="text" name="ans" class="form-control @error('ans') is-invalid @enderror fill p-1">
                                @error('ans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="ans" class="mx-2">allows attackers to execute scripts in the victim’s browser </label>

                            </div>
                            <div class="d-flex ml-5">
                                <label>  which can hijack user sessions, deface web sites, or redirect the user to malicious sites. </label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary ml-2 my-2 ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="let-content w-100 my-2 py-3" > 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <div class="d-flex">
                                <label class="mx-3" for="ans"> Q.2) </label>
                                <input type="text" name="ans" class="form-control @error('ans') is-invalid @enderror fill p-1">
                                @error('ans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="ans" class="mx-2">can be used to perform attacks, including replay attacks,</label>

                            </div>
                            <div class="d-flex ml-5">
                                <label> injection attacks, and privilege escalation attacks.</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary ml-2 my-2 ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


                 <div class="let-content w-100 my-2 py-3" > 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <div class="d-flex">
                                <label class="mx-3" for="ans"> Q.3) </label>
                                <input type="text" name="ans" class="form-control @error('ans') is-invalid @enderror fill p-1">
                                @error('ans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="ans" class="mx-2">can be used to perform attacks, including replay attacks,</label>

                            </div>
                            <div class="d-flex ml-5">
                                <label> injection attacks, and privilege escalation attacks.</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary ml-2 my-2 ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>


                 <div class="let-content w-100 my-2 py-3" > 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <div class="d-flex">
                                <label class="mx-3" for="ans"> Q.4) </label>
                                <input type="text" name="ans" class="form-control @error('ans') is-invalid @enderror fill p-1">
                                @error('ans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="ans" class="mx-2">can be used to perform attacks, including replay attacks,</label>

                            </div>
                            <div class="d-flex ml-5">
                                <label> injection attacks, and privilege escalation attacks.</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary ml-2 my-2 ">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

                 <div class="let-content w-100 my-2 py-3" > 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group d-flex flex-column">
                            <div class="d-flex">
                                <label class="mx-3" for="ans"> Q.5) </label>
                                <input type="text" name="ans" class="form-control @error('ans') is-invalid @enderror fill p-1">
                                @error('ans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="ans" class="mx-2">can be used to perform attacks, including replay attacks,</label>

                            </div>
                            <div class="d-flex ml-5">
                                <label> injection attacks, and privilege escalation attacks.</label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary ml-2 my-2 ">Submit</button>
                            </div>
                        </div>
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
    




 