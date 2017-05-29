$(document).ready(function () {

    $(document).on("click", ".delete", function () {
        var id = $(this).data('id');
        console.log(id);
        document.getElementById("idPost").value = $(this).data('id');
    });
});