
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
                <div id="header-title">People that owe me money</div>
                    <a class="ui-btn" style="width: 360px; background-color: #ff6600; text-shadow: none; margin-left:auto; margin-right:auto" data-transition="slideup" onclick="$('.ui-container').load('sent-invite.php')">New Payment Invite</a>
				<div id="invite-overview"></div>
			</div><!-- ui-container -->
		</div><!-- content -->
	
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
						"status": "Invited"			// Style (in css) for given status (lowercase) should exist
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "11-11-2014",
						"amount": "1.00",
						"status": "Paid"			// Style (in css) for given status (lowercase) should exist
					},
					{
						"firstName": "H.",
						"lastName": "de Vries",
						"date": "09-11-2014",
						"amount": "1.00",
						"status": "Paid"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "01-11-2014",
						"amount": "1.00",
						"status": "Invited"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "03-09-2014",
						"amount": "1.00",
						"status": "Invited"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "05-10-2014",
						"amount": "1.00",
						"status": "Invited"
					},
					{
						"firstName": "J.",
						"lastName": "Smit",
						"date": "08-11-2014",
						"amount": "1.00",
						"status": "Paid"
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
				  						+'<h3 class="pi-block-name">'+paymentInvite.firstName+' '+paymentInvite.lastName+'</h3>'
				  						+'<a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="pi-block-cancel" >x</a>'
				  						+'<h5 class="pi-block-date">'+paymentInvite.date+'</h5>'
				  						+'<h3 class="pi-block-amount">&euro; '+paymentInvite.amount+'</h3>'
				  						+'<h5 class="pi-block-status">'+paymentInvite.status+'</h5>'
				  					+
				  					'</div>';
			  	
			  	parent.appendChild(block);
			}
			</script>
	</div> <!-- page -->
</body>

</html>