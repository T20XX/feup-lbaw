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
               loadComments(idPost.val());
            }
        });
    });
});

function loadComments(idPost){
    $.ajax({
        url: BASE_URL + "api/circle/get_comments.php",
        type: "GET",
        data: {
            "idPost" : idPost
        },
        success: function(data){
            console.log(data);
           /* $.each(JSON.parse(data), function(i, message) {
                if(message.sender == sender){
                    $('#messages .message-data:last').after('<div class="message-data col-xs-10 col-sm-7 col-xs-offset-2 col-sm-offset-5">' +
                        '<div class="panel panel-primary">' +
                        '<div class="panel-heading">' +
                        message.content +
                        '</div></div></div>');
                } else {
                    $('#messages .message-data:last').after('<div class="message-data col-xs-10 col-sm-7 ">' +
                        '<div class="panel panel-default ">' +
                        '<div class="panel-heading">' +
                        message.content +
                        '</div></div></div>');
                }
                lastMessageId = message.idMessage;
            });*/
        }
    });
}


