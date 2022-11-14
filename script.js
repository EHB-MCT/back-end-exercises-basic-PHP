$(function (){

    return;

    //Small script to hide the divs and show the correct exercise
    $('div').hide();
    $('#list').change(function(e){
        let nr = $('#list').val();
        $('div').hide();
        $('#ex' + nr).show();
    });
    $('#ex1').show();

});
