$(document).ready(function () {
    $(document).on("click", ".open-showBio", function () {
        var bio = $(this).data('id');
        $("#showBio-body").html(bio);
    });

    $(document).on("click", ".showBanReason", function () {
        var reason = $(this).data('id');
        $("#showBanReason").html(reason);
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).data('id');
        console.log(id);

        document.getElementById("idUser").value = $(this).data('id');
    });

    $('#schbaruser').bind('input',function(){
        $.ajax({
            url: "http://gnomo.fe.up.pt/~lbaw1632/final/api/admin/user.php",
            type: "GET",
            data: {
                "query" : document.getElementById('schbaruser').value
            },
            success: function(data){

                var availableTags = [];

                var jayson = JSON.parse(data);
                var jayson_users = jayson.users;


                jayson_users.forEach(function(result){
                    availableTags.push({
                        value: "http://gnomo.fe.up.pt/~lbaw1632/final/pages/user/profile.php?id="+result.idPerson,
                        label: result.first_name + " " + result.last_name
                    });
                })



                $( "#schbaruser" ).autocomplete({
                    source: availableTags,
                    select: function( event, ui ) {
                        window.location.href = ui.item.value;
                    }
                });

            }
        });

    });
});
