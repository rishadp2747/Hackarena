<div class="d-flex  flex-row justify-content-center align-content-center  ">
     <div class=" text-center register-content w-100 mb-5" > 
       <form method="POST" action="{{route('id->storePerformance')}}">
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
