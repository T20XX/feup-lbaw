$(document).ready(function () {
    $('#schbarinvite').bind('input',function(){
        $.ajax({
            url: BASE_URL + "api/circle/search_user_to_invite.php",
            type: "GET",
            data: {
                "query" : document.getElementById('schbarinvite').value
            },
            success: function(data){

                var availableTags = [];

                var jayson = JSON.parse(data);
                var jayson_users = jayson.users;


                console.log(jayson);

                var target_base_url = "http://gnomo.fe.up.pt" + BASE_URL;


                jayson_users.forEach(function(result){
                    availableTags.push({
                        label: result.first_name + " " + result.last_name,
                        value: result.idPerson
                    });
                })




                $( "#schbarinvite" ).autocomplete({
                    source: availableTags,
                    select: availableTags.value
                });

            }
        });

    });
});

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

function open_right_sidebar() {
    $('.right_sidebar').each(function () {
        this.style.setProperty("display", "block", "important");
    });
}

function close_right_sidebar() {
    $('.right_sidebar').each(function () {
        this.style.setProperty("display", "none");
    });
}
