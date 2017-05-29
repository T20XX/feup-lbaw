

$(document).ready(function () {
    //var umatres = 1;

    //if(document.getElementById('schbar').value
    //document.onreadystatechange=function(){
    $('#schbar').bind('input',function(){
        $.ajax({
            url: BASE_URL + "api/user/search_users_circles.php",
            type: "GET",
            data: {
                "query" : document.getElementById('schbar').value
            },
            success: function(data){

                var availableTags = [];

                var jayson = JSON.parse(data);
                var jayson_circles = jayson.circles;
                var jayson_users = jayson.users;



                var target_base_url = "http://gnomo.fe.up.pt" + BASE_URL;



                availableTags.push({
                    value: " ",
                    label: "Circles: "
                });


                jayson_circles.forEach(function(result){
                    availableTags.push({
                        value: "http://gnomo.fe.up.pt"+BASE_URL + "/pages/circle/index.php?id=" + result.idCircle,
                        label: result.name
                    });
                })

                availableTags.push({
                    value: "",
                    label: "      "
                });

                availableTags.push({
                    value: "",
                    label: "      "
                });

                availableTags.push({
                    value: "",
                    label: "      "
                });

                availableTags.push({
                    value: "",
                    label: "      "
                });

                availableTags.push({
                    value: " ",
                    label: "Users: "
                });

                jayson_users.forEach(function(result){
                    availableTags.push({
                        value: "profile.php?id?="+result.idP,
                        label: result.first_name + " " + result.last_name
                    });
                })



                    $( "#schbar" ).autocomplete({
                        source: function(request, response){
                            response( availableTags );},
                           select: function( event, ui ) {
                            window.location.href = ui.item.value;
                        }
                    });
//				document.getElementById('schbar').value = data;
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

    });

});
