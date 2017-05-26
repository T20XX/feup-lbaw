$(document).ready(function () {
    $(".add_comment").click(function () {
        var textArea = $(this).prev();
        var idPost = $(this).next();
        console.log("FUI CLICADO");
        $.ajax({
            url: BASE_URL + "api/circle/comment_post.php",
            type: "GET",
            data: {
                "idPost" : idPost.val(),
                "content" : textArea.val()
            },
            success: function(data){
                textArea.val('');
            }
        });
    });
});