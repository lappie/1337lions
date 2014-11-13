<?php 
	require("INC-header.html");
?>

	<div data-role="page" >
	
		<?php 
			require("INC-navbar.html");
		?>
		
		

		<div class="ui-content">
			<div class="ui-container">
			
			
		<!-------------- PAGE CONTENT ----------->
			
		<?php 
			require("INC-transaction-list-header.html");
		?>
		
<ul class="transactions-invites-list" data-role="listview" id="transaction-list">
	<li data-role="list-divider">
		12 November
	</li>
	<li class="invite-li">
		<a data-transition="slideup" class="invite_link" onclick="$('.ui-container').load('respond_to_inviteJansen.php')">
		<img src="img/qr-button.png" />
		<h3>P. Jansen</h3>
		<p><u class="span-underline">Voorgeschoten lunch</u></p>
		<h2>-$10.<span class="decimals">00</span></h2>
		</a>
	</li>
	
	<li data-role="list-divider">
		11 November
	</li>
	<li class="invite-li">
		<a data-transition="slideup" class="invite_link" onclick="$('.ui-container').load('respond_to_invitePietersen.php')">
		<img src="img/qr-button.png" />
		<h3>J. Pietersen</h3>
		<p><u class="span-underline">Huur November</u></p>
		<h2>-$480.<span class="decimals">00</span></h2>
		</a>
	</li>
</ul>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>