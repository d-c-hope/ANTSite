
$( document ).ready(function() {
 
 	// Ifjs is enabled then clicks on menu items result in an ajax fetch rather than a refresh
	// Url is updated as well so it is just as though you went to a new page
    $(".menuLink").click(function(event){ 
		console.log(event.currentTarget.pathname); 
		var linkPath = event.currentTarget.pathname;
		var ajaxPath = "dynamic/" + linkPath; 
		
		$( "#content" ).load( ajaxPath, function() {
			$("#navmenu li").removeClass("selected");
			$(event.currentTarget.parentElement).addClass('selected');
			history.pushState('data', '', event.currentTarget.pathname); // update url so it works if we get static page
			// window.location.hash = event.currentTarget.pathname; // if you want to do dynamic load you can set and use hash
		} );
		
		return false;
	});
	
	// If we have javascript then this class isn't needed
	$("nav ul li > ul").removeClass('noJS');
	
	$("nav ul li > a").click(function(event){
		console.log("menu click");
		$("nav ul li > ul").toggleClass("extended");
	});
	
	// $('#menuText').click( function(event){
// 	        event.stopPropagation();
// 	        $('.noJS').toggle();
// 	    });
//
// 	$(document).click( function(){
// 	        $('.noJS').hide();
// 	});
    
 
});
