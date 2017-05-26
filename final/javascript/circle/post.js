$(document).ready(function () {
    $(".add_comment").click(function () {
        var textArea = $(this).prev();
        var idPost = $(this).next();
        console.log("FUI CLICADO");
        $.ajax({
            url: BASE_URL + "api/circle/comment_post.php",
            type: "GET",
            data: {
                "idPost": idPost.val(),
                "content": textArea.val()
            },
            success: function (data) {
                textArea.val('');
                loadComments(idPost.val());
            }
        });
    });
});

$(document).ready(function() {
    $(".load_comments").click(function () {
        var idPost = (($(this).parent()).prev()).find("input");
        console.log(idPost.val());
        loadComments(idPost.val());
    });
});

function loadComments(idPost) {
    $.ajax({
        url: BASE_URL + "api/circle/get_comments.php",
        type: "GET",
        data: {
            "idPost": idPost
        },
        success: function (data) {
            console.log(data);
            $.each(JSON.parse(data), function (i, comment) {
                $('#' + idPost + ' .load_comments').after(
                    '<div class="col-xs-10">' + '<div class="media">' +
                    '<div class="media-left">' +
                    '<img src="' + comment.path + '" class="media-object" style="width:60px">' +
                    '</div>' +
                    '<div class="media-body">' +
                    '<a href="{$BASE_URL}pages/user/profile.php?id=' + comment.idUser + '"><h4>' + comment.first_name +
                    '</a><small><i>' + comment.date + '</i></small></h4>' +
                    '<p>' + comment.content + '</p>' +
                    '</div>' + '</div>'
                );
            });
        }
    });
}