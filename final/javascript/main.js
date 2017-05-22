BASE_URL = '/~lbaw1632/final/';

$(document).ready(function() {
    initMessageClosers();
});

function initMessageClosers() {
    $('.close').click(function() {
        $(this).parent().fadeOut();
    });
}
