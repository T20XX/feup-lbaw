$(document).ready(function(){
    $("#btn2 button").click(function(){
        if($("#search_bar").css("display") == "none"){
			$("#search_bar").css("display" , "block")
		}
		else{
			$("#search_bar").css("display" , "none");
		}
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