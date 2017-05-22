$(document).ready(function () {
	//var umatres = 1;

	//if(document.getElementById('schbar').value
	//document.onreadystatechange=function(){
	$('#schbar').bind('input',function(){
	console.log("bye!!");
		/*if(umatres != 3)
			umatres++;
		else{

		}*/
		$.ajax({
        url: BASE_URL + "api/user/search_users_circles.php",
        type: "GET",
        data: {
            "query" : document.getElementById('schbar').value
        },
        success: function(data){


				console.log(data);
				console.log(data.content);
				document.getElementById('schbar').value = data;
                /*if(message.sender == sender){
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

                }*/
        }
    });

	})
});
