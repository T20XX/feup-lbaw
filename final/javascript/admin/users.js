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
        $("#idUser").html(id);
    });
});
