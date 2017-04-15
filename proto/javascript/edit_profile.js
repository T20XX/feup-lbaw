$(document).ready(function () {
    $('#show_hometown').click(function () {
        toogleGlyphiconEye($(this).find('span'));
        toogleBooleanInput($(this).find('input'));
    });
    $('#show_birthday').click(function () {
        toogleGlyphiconEye($(this).find('span'));
        toogleBooleanInput($(this).find('input'));
    });
    $('#show_gender').click(function () {
        toogleGlyphiconEye($(this).find('span'));
        toogleBooleanInput($(this).find('input'));
    });
    $('#show_age').click(function () {
        toogleGlyphiconEye($(this).find('span'));
        toogleBooleanInput($(this).find('input'));
    });
});


function toogleGlyphiconEye(span){
    $(span).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open');
}


function toogleBooleanInput(input){
    var bool = $(input).val();
    if(bool == "1"){
        $(input).val(0);
    }else if (bool == "0"){
        $(input).val(1);
    }
}