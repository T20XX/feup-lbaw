$(document).ready(function () {
    $(document).on("click", ".open-showBio", function () {
        var bio = $(this).data('id');
        $("#showBio .modal-body").html(bio);
    });
});
