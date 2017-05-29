$(document).ready(function () {

    $(document).on("click", ".delete", function () {
        var id = $(this).data('id');
        console.log(id);
        document.getElementById("idCircle").value = $(this).data('id');
    });


    $('#schbarcircle').bind('input',function(){
        $.ajax({
            url: "http://gnomo.fe.up.pt/~lbaw1632/final/api/admin/circle.php",
            type: "GET",
            data: {
                "query" : document.getElementById('schbarcircle').value
            },
            success: function(data){

                var availableTags = [];

                var jayson = JSON.parse(data);
                var jayson_circles = jayson.circles;


                jayson_circles.forEach(function(result){
                    availableTags.push({
                        value: "http://gnomo.fe.up.pt/~lbaw1632/final/pages/circle/index.php?id="+result.idCircle,
                        label: result.name
                    });
                })



                $( "#schbarcircle" ).autocomplete({
                    source: availableTags,
                    select: function( event, ui ) {
                        window.location.href = ui.item.value;
                    }
                });

            }
        });

    });
});