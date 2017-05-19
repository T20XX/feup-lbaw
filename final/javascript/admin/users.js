$(document).ready(function () {
    $(document).on("click", ".open-showBio", function () {
        var bio = $(this).data('id');
        $(".modal-body").html(bio);
    });
});