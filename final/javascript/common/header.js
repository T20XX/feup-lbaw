$(document).ready(function () {
	//var umatres = 1;
	
	//if(document.getElementById('schbar').value
	document.onreadystatechange=function(){
		/*if(umatres != 3)
			umatres++;
		else{
			
		}*/
		$.ajax({
        url: BASE_URL + "api/user/search_users_circles.php",
        type: "Get",
        data: {
            "query" : document.getElementById('schbar')
        },
        success: function(data){
            $.each(JSON.parse(data), function(i, message) {
				console.log(message);
				document.getElementById('schbar').value = message;
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
            });
        }
    });
		
	}
});