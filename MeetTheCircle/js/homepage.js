$(document).ready(function(){
    $("button#signup_btn").click(function(){
        if($("#signup_form").css("display") == "none"){
			$("#login").slideUp();
			$("button#signup_btn").html("Back to login");
			$("#signup_form").slideDown();
		}
		else{
			$("#signup_form").slideUp();
			$("button#signup_btn").html("Create new Account");
			$("#login").slideDown();
		}
    });
});