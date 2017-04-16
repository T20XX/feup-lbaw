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
    $("#profile_photo").change(function(){
        readTempURL(this);
    });
});


function toogleGlyphiconEye(span){
    $(span).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open');
}


function toogleBooleanInput(input){
    var bool = $(input).val();
    if(bool == "true"){
        $(input).val("false");
    }else if (bool == "false"){
        $(input).val("true");
    }
}

function readTempURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

