BASE_URL = '/~lbaw1632/proto/';

$(document).ready(function() {
    initMessageClosers();
});

function initMessageClosers() {
    $('.close').click(function() {
        $(this).parent().fadeOut();
    });
}
