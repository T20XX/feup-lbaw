$(document).ready(function () {
    $('.upvote').click(function () {
        console.log("FUI CLICADO");
        $.ajax({
            url: BASE_URL + "api/circle/upvote_post.php",
            type: "GET",
            data: {
                "idPost" : 90
            },
            success: function(data){
                console.log("ehue");
                console.log(data);
            }
        });
    });
});

function open_left_sidebar() {
    $('.left_sidebar').each(function () {
        this.style.setProperty("display", "block", "important");
    });
}

function close_left_sidebar() {
    $('.left_sidebar').each(function () {
        this.style.setProperty("display", "none");
    });
}

function open_right_sidebar() {
    $('.right_sidebar').each(function () {
        this.style.setProperty("display", "block", "important");
    });
}

function close_right_sidebar() {
    $('.right_sidebar').each(function () {
        this.style.setProperty("display", "none");
    });
}

function vote_button(){

}