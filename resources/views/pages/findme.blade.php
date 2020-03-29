
@extends('layout.outline')
@section('content')

    @include('layout.nav')

    

    <div class="container">

        <div class="d-flex p-5 flex-column">
            <div class="p-2 text-center mb-5  " > 
                <h3>Find Me</h3>
                <p class="text-justify p-3">
                    Once there lived an old farmer. He had three sons.
                    The farmer worked on his farm. He asked his sons to work too.
                     But they were very lazy. He wanted to teach them the value of hard work.
                      But the lazy.  Sons did not care for his advice.
                  </p>
                  <p class="text-justify p-3">
                    After some time the farmer fell ill and thought that his end was near.
                    He called his sons and said that he wanted to disclose a secret.
                     And the secret is that he had buried his treasure in the farm.
                      He told them to dig the place after his death.
                  </p>
                  <p class="text-justify p-3">
                    Soon after the death of their father they went to the field.
                    They dug it from end-to-end. But they could not found the treasure. 
                    They became sad.
                  </p>
                  <p class="text-justify p-3">
                    In the meantime, an old passed that way.
                    He knew what their father meant. He advised them to sow seeds in the farm. 
                     They obeyed him. After some time, they had a very good crop.
                      They sold the crop found enough money. They became rich.
                       Thus they learnt the value of hard work.
                  </p>
            </div>

            <div class="d-flex  flex-row justify-content-center align-content-center  ">
                <div class=" text-center register-content w-100 mb-5" > 
                    <form method="POST" action="">
                            @csrf
                        <div class="form-group d-flex flex-row">
                            <label for="flag">Flag</label>
                            <input type="text"autofocus class="form-control mx-4 w-100 @error('flag') is-invalid @enderror" id="flag" name="flag" aria-describedby="flagHelp" placeholder="Eg: flag{sbfvhyfvwr2389r3hjdd}">
                            @error('flag')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-outline-primary ml-2 ">Submit</button>
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
    




 