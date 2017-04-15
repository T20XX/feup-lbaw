console.log("tou a correr");
$('#show_hometown').click(function(){
    console.log("tou a correr");
    $(this).find('span').toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open');
});