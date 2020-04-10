$('document').ready(function(){

    $('#form').submit(function(){
        if($('#username').val() === 'hacker' && $('#password').val() === 'hacked'){
            //success
        }else{
            //failure
        }
    });
});