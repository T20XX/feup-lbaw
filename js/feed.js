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