$(document).ready(function(){
    window.popme = function popme() {
        alert('flag{fawebd1230190n}');
        return false;
    }
    $('#popbtn').click(function(){ 
        var temp = '<p style="display:none;">'+ $('#pop').val() + '</p>';
        $('#space').append(temp); 
    });
});