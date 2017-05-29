$(document).ready(function () {
    $("#addtocirc").click(function () {
        $.ajax({
            url: BASE_URL + "api/circle/invite.php",
            type: "POST",
            data: {
                "idUser" : document.getElementById('schbarinvite').value,
                "idCircle" : document.getElementById('hiddenidcirc').value
            },
            success: function(data){
                //so q nao
                console.log("successo");
                console.log(data);
            }
        });
    });
});