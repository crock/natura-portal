$(document).ready(function(){
	var ip = $(".sip").html();
	var port = $(".port").val();
	getStatus(ip,port);
});

function getStatus(ip, port) {
	$.ajax({
		url: "https://mcapi.ca/query/" + ip + ":" + port + "/info",
		context: document.body
	}).done(function(data) {
		$(".pcount").html(data["players"]["online"]);
		if (data["status"] == true) {
			$(".pcount").addClass("online");
		} else {
			$(".pcount").addClass("offline");
		}
		
	});
}

function toggleMenu(x){
    var panel = document.getElementById(x);
    if(panel.style.display == "none"){
        panel.style.display = "inline";
    } else {
        panel.style.display = "none";
    }
}

function closeMenu(x) {
	var panel = document.getElementById(x);
	panel.style.display = "none";
}

function copytoclipboard() {
	
	var clipboard = new Clipboard('#ip');

	clipboard.on('success', function(e) {
	    console.info('Action:', e.action);
	    console.info('Text:', e.text);
	    console.info('Trigger:', e.trigger);
	
	    e.clearSelection();
	    $( "#ip" ).attr( "title", "Copied!" );
	});
	
	clipboard.on('error', function(e) {
	    console.error('Action:', e.action);
	    console.error('Trigger:', e.trigger);
	    $( "#ip" ).attr( "title", "&#8984;+ C to copy" );
	});
	
	new Clipboard('#ip');
	
}

$("#vote_menu_tab").hover(function() {
	$("#votingmenu").animate({height:'200px'}, 100, function() { 
		// Animation complete
	});
});

$(".container").hover(function() {
	$("#votingmenu").animate({height:'0'}, 100, function() { 
		// Animation complete
	});
});

copytoclipboard();