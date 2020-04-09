$('document').ready(function(){

    $('#form').submit(function(){
        if($('#username').val() === 'x' && $('#password').val() === 'y'){
            //success
        }else{
            //failure
        }
    });
});