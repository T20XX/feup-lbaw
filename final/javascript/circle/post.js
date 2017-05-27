$(document).ready(function () {
    $(".add_comment").click(function () {
        var textArea = $(this).prev();
        var idPost = $(this).next();
        console.log("FUI CLICADO");
        (($(this).parent()).next()).nextAll().remove();
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
    $(".get_comments").click(function () {
        var idPost = (($(this).parent()).prev()).find("input");

        var comment_class = (($(this).parent()).next()).val();
        console.log(comment_class);
        if(comment_class == undefined){
            loadComments(idPost.val());
        } else {
            ($(this).parent()).nextAll().remove();
        }
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
                console.log(i);
                $('#' + idPost + ' .load_comments').after(
                    '<div class="col-xs-10">' + '<div class="media">' +
                    '<div class="media-left">' +
                    '<img src="' + comment.path + '" class="media-object" style="width:60px">' +
                    '</div>' +
                    '<div class="media-body">' +
                    '<a href="{$BASE_URL}pages/user/profile.php?id=' + comment.idUser + '"><h4>' + comment.first_name +
                    '</a><small><i>' + comment.date + '</i></small></h4>' +
                    '<p>' + comment.content + '</p>' + '</div>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div class="panel-collapse collapse collapse_reply' + comment.idComment + '">' +
                    '<div class="panel panel-default">' +
                    '<div class="panel-body">' +
                    '<textarea placeholder="Reply here..." class="form-control" rows="3" id="comment"></textarea>' +
                    '<button type="button" class="add_response btn btn-default btn-block">' + 'Reply' + '</button>' +
                    '<input type="hidden" class="idPost" value="' + comment.idComment + '">' +
                    '</div>' + '</div>' + '</div>' + '</div>' + '</div>' +
                    '<div class="col-xs-2">' +
                    '<button class="get_replies btn btn-info btn-block dropdown-toggle" type="button" data-toggle="collapse" href=".collapse_reply'+ comment.idComment + '" style="display: block; margin: 0 auto;">' + 'Reply' + '</button>' +
                    '</div>'
                );
            });

            $(".add_response").click(function () {
                var idComment = $(this).next();
                var textArea  = $(this).prev();

                //(($(this).parent()).next()).nextAll().remove();
                console.log("DAR ADD");
                console.log(idComment.val());
                console.log(textArea.val());
                $.ajax({
                    url: BASE_URL + "api/circle/reply_comment.php",
                    type: "GET",
                    data: {
                        "idComment": idComment.val(),
                        "content": textArea.val()
                    },
                    success: function (data) {
                        textArea.val('');
                        console.log("Dei ADD");
                        //loadReplies(idComment.val());
                    }
                });
            });

            $(".get_replies").click(function () {
                var idComment = (($(this).parent()).prev()).find("input");

                //TODO Testar para 2º clique eliminar respostas
               /*var comment_class = (($(this).parent()).next()).val();
                console.log(comment_class);
                if(comment_class == undefined){
                    loadComments(idPost.val());
                } else {
                    ($(this).parent()).nextAll().remove();
                }*/
            });

        }
    });
}

function loadReplies(idComment){

}