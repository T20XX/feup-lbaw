$(document).ready(function () {
    $('.upvote').click(function () {
        vote_button();
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
    console.log("FUI CLICADO");
    $.ajax({
        url: BASE_URL + "api/circle/upvote_post.php",
        type: "GET",
        data: {
            "idPost" : 1
        },
        success: function(){
            $(this).css("background-color", "red");
        }
    });
}