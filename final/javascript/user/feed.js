$(document).ready(function () {
    $('.upvote').click(function () {
        vote_button();
    });
});

function vote_button(){
    console.log("FUI CLICADO");
    $.ajax({
        url: BASE_URL + "api/circle/upvote_post.php",
        type: "GET",
        data: {
            "idPost" : 90
        },
        success: function(data){
            console.log("ehue");
            $(this).removeClass("btn-success");
            $(this).addClass("btn-danger");
        }
    });
}