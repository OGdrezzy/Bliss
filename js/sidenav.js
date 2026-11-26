function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
	document.body.style.backgroundColor = "black";
	document.body.style.opacity = "0.5";
	document.body.style.blur = "0.1";
	$(".navbar-fixed-top").hide();
	$("main").css("blur") = "0.4";
}
function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "white";
	document.body.style.opacity = "1.0";
	$(".navbar-fixed-top").show();
}
$(document).ready(function(){
	if(( $(window).height() < 500 )){
		alert("Please access this page on a PC for full Experience");
        $("#sidenavBtn").hide();
	}
	if(( $(window).height() < 300)) {
         alert("Please access this page on a PC for full Experience");
         $("#sidenavBtn").hide();
	}
	
});