<?php 
	require("INC-header.html");
?>

	<img id="screen" src="img/ing-login.png" width="698" />
	<script>
		var i = 0; 
		var load = false;
		$( "body" ).keypress(function() {
		  	if(i>=5 && load == false) {
		  		load = true;
		  		setTimeout(function() { 
		  			console.log("load");
		  			$.mobile.changePage("transaction-list.php", { transition: "slide" });
		  		}, 1000);
		  	}
		  	else if (i<5) {
				i++; 
				console.log(i);
				$("#screen").attr("src", "img/ing-login" + i + ".png"); 
		  	}
		});
	</script>
</body>
</html>