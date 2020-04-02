@if ($message = Session::get('success'))
    <div class="overlay" id="overlay">
        <div class="d-flex w-100 h-100 justify-content-center align-items-center flex-column">

                <i class="icon icofont-racing-flag" ></i>
                <h1><strong>{{ $message }}</strong></h1>
                <button type="button" id="over" onclick="off()"> Close</button>  
        </div>
    </div>

    <script>
        function off() {
            document.getElementById("overlay").style.display = "none";
        }
    </script>

@endif

