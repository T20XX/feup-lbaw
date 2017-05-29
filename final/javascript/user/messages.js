$(document).ready(function () {
    setInterval(checkForNewMessages, 5000);
    $('#send_btn').click(function () {
        $.ajax({
            url: BASE_URL + "api/user/send_message.php",
            type: "POST",
            data: {
                "receiver": receiver,
                "content": $('#send_content').val()
            },
            success: function(){
                $('#send_content').val("");
                checkForNewMessages();
            }
        });
    });
    var messages_panel = $('#messages')[0];
    messages_panel.scrollTop = messages_panel.scrollHeight;
});

function checkForNewMessages() {
    $.ajax({
        url: BASE_URL + "api/user/get_messages.php",
        type: "POST",
        data: {
            "lastMessageId": lastMessageId,
            "receiver": receiver
        },
        success: function(data){
            console.log(data);
            $.each(JSON.parse(data), function(i, message) {
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
            });
            if (JSON.parse(data).length > 0){
            var messages_panel = $('#messages')[0];
            messages_panel.scrollTop = messages_panel.scrollHeight;
            }
        }
    });
}

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