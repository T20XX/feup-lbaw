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