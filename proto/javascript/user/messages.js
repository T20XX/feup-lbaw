$(document).ready(function () {
    setInterval(checkForNewMessages, 5000);
    $('#send_btn').click(function () {
        $.ajax({
            url: BASE_URL + "api/user/send_message.php",
            type: "POST",
            data: {
                "sender": sender,
                "receiver": receiver,
                "content": $('#send_content').val()
            },
            success: function(){
                $('#send_content').val("");
                checkForNewMessages();
            }
        });
    });
});

function checkForNewMessages() {
    $.ajax({
        url: BASE_URL + "api/user/get_messages.php",
        type: "POST",
        data: {
            "lastMessageId": lastMessageId,
            "sender": sender,
            "receiver": receiver
        },
        success: function(data){
            $.each(data, function(i, message) {
                $.each(data, function(i, message) {
                    $('#messages .message-data:last').after('<div class="message-data col-xs-10 col-sm-7 ' +
                    /*if(message.sender == sender){
                        'col-xs-offset-2 col-sm-offset-5'
                    }*/
                    '">' +
                    '<div class="panel ' +
                    /*if(message.sender == sender){
                        'panel-primary'
                    }else{
                        'panel-default'
                    }*/
                    '">' +
                    '<div class="panel-heading">' +
                    message.content +
                    '</div></div></div>');
                    last_message_id = message.idMessage;
                });
            });
        }
    });
}