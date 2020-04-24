



$(document).ready(function(){
    window.popme = function popme() {
        alert('flag{83ndabb3jnd44dae0979663f558902}');
        return false;
    }
    $('#popbtn').click(function(){ 
        var temp = '<p style="display:none;">'+ $('#pop').val() + '</p>';
        $('#space').append(temp); 
    });


});