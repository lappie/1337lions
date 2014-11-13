
<?php 
	require("INC-header.html");
?>

	<div data-role="page" >
	
		<?php 
			require("INC-navbar.html");
		?>
		
		<div class="ui-content">
			<div class="ui-container">
				<!--<script>$('.ui-container').load('sent-invite.html')</script>-->

				<div id="invite-overview"></div>
			</div><!-- ui-container -->
		</div><!-- content -->
		
		<div data-role="footer" data-position="fixed">
			<a class="ui-btn" style="width: 100%" data-transition="slideup" onclick="$('.ui-container').load('sent-invite.php')">New Payment Invite</a>
		</div>

		<div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
			<div data-role="header" data-theme="a">
			<h1>Delete Invite?</h1>
			</div>
			<div role="main" class="ui-content">
				<h3 class="ui-title">Delete invite?</h3>
				<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Cancel</a>
				<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back" data-transition="flow" onclick="console.log(popupFor)">Yes</a>
			</div>
		</div>

		<script>
			/* Everything within data-role is used by jquery mobile. Therefore, this script should be within the data-role div */
			getPaymentInvites = function () {
				return [
					{
						"firstName": "P.",
						"lastName": "Jansen",
						"date": "11-11-2014",
						"amount": "369.00",
						"status": "Awaiting Payment",			// Style (in css) for given status (lowercase) should exist
						"avatar": "img/avatars/1.png"
					},
					{
						"firstName": "H.",
						"lastName": "Smit",
						"date": "11-11-2014",
						"amount": "1.00",
						"status": "Paid",			// Style (in css) for given status (lowercase) should exist
						"avatar": "img/avatars/2.png"
					},
					{
						"firstName": "H.",
						"lastName": "de Vries",
						"date": "09-11-2014",
						"amount": "1.00",
						"status": "Paid",
						"avatar": "img/avatars/3.png"
					},
					{
						"firstName": "K.",
						"lastName": "Bloemen",
						"date": "01-11-2014",
						"amount": "1.00",
						"status": "Awaiting Payment",
						"avatar": "img/avatars/4.png"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "03-09-2014",
						"amount": "1.00",
						"status": "Awaiting Payment",
						"avatar": "img/avatars/3.png"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "05-10-2014",
						"amount": "1.00",
						"status": "Awaiting Payment",
						"avatar": "img/avatars/3.png"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "08-11-2014",
						"amount": "1.00",
						"status": "Paid",
						"avatar": "img/avatars/3.png"
					}
				];
			};


			var parent = document.getElementById("invite-overview");
			var paymentInvites = getPaymentInvites();
			// Go through all paymentInvites, add one block for each
			for (var i=0; i<paymentInvites.length; i++) {
			  	paymentInvite = paymentInvites[i];
			  	
			  	block = document.createElement('div');
			  	block.setAttribute("class","pi-block-wrapper");
			  	block.innerHTML = '<div class="pi-block pi-block-status-'+paymentInvite.status.toLowerCase()+'" onclick="window.location.href = \'#payment\'">'
				  						+'<div class="pi-block-name" style="float: left; margin-left: 10px; margin-bottom: 25px">'
										+'<a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="pi-block-cancel" style="margin-top: -12px; margin-right: -8px">X</a>'
				  						+'<img src="' + paymentInvite.avatar + '" style="border: 1px solid #222222; width: 100px; height: 100px; float: left" /><h4 style="float: left; margin: 0 0; margin-left: 10px; ">'+paymentInvite.firstName+' '+paymentInvite.lastName+'</h4>'
				  						+'<h5 class="pi-block-date" style="float: left; margin-left: 10px; margin-top: 0">'+paymentInvite.date+'</h5></div>'
				  						+'<span style="clear: both"><br>'
				  						+'<h3 class="pi-block-amount">&euro; '+paymentInvite.amount+'</h3>'
				  						+'<h5 class="pi-block-status">'+paymentInvite.status+'</h5></span>'
				  					+
				  					'</div>';
			  	
			  	parent.appendChild(block);
			}
			</script>
	</div> <!-- page -->
</body>

</html>