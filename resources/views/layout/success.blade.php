@if ($message = Session::get('success'))
    <div class="overlay" id="overlay">
        <div class="d-flex w-100 h-100 justify-content-center align-items-center flex-column">
                <img src={{asset('img/logo/logo.png')}} class="m-5" width="200" height="200" >
                <h1><strong>{{ $message }}</strong></h1>
                <button type="button" class="btn  btn-primary" id="over" onclick="off()"> Close</button>  
        </div>
    </div>

    <script>
        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>

@endif

