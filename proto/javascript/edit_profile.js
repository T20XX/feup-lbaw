console.log("tou a correr");
$(document).ready(function () {
    $('#show_hometown').click(function () {
        $(this).find('span').toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open');
        toogleBooleanInput($(this).find('input'))
    });
});

function toogleBooleanInput(input){
    var bool = $(input).val();
    if(bool == "1"){
        $(input).val(0);
    }else if (bool == "0"){
        $(input).val(1);
    }
}