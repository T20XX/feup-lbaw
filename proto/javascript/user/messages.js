$(document).ready(function () {
    $('#send_btn').click(function () {
        $ajax.call({
            url: BASE_URL + "api/user/send_message.php",
            type: "POST",
            data: {
                "sender": sender,
                "receiver": receiver,
                "content": $('#send_content').val()
            },
            success: function(){

            }
        })
    });
});