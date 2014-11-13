<?php
	include("INC-header.html");
?>

<ul data-role="listview" id="invite-payment-form">
	<li class="big-euro-class">
		<img src="img/euro-button.png" />
		<input style="float: left; width: 60%" type="text" id="invite-payment-money" value="10,-" />
	</li>
	<li data-role="list-divider">Receiver</li>
	<li>
		<img src="img/person-button.png" />
		<div class="full_width">
			<h5>Naam</h5>
			<input type="text" value="P. Jansen" />
		</div>
		<img src="img/addressbook-button.png" style="float: right"/>
	</li>
	<li>
		<img src="img/bankaccount-button.png" />
		<div class="full_width">
			<h5>Rekeningnummer</h5>
			<input type="text" value="NL12 INGB 000 123 45 67"></input>
		</div>
		<img src="img/qr-button.png" style="float: right"/>
	</li>
	<li>
		<img src="img/comment-button.png" />
		<div class="full_width">
			<h5>Mededeling</h5>
			<input type="text" value="Voorgeschoten lunch" placeholder="Voorgeschoten lunch"></input>
		</div>
	</li>
	<li>
		<img src="img/schedule-button.png" />
		<div class="full_width">
			<h5>Inplannen</h5>
			<input type="text" value=""></input>
		</div>
	</li>
</ul>
<br /><br />
<a href="transaction-list.php" class="ui-btn" style="width: 95%">Accept payment</a>
<a href="transaction-list.php" class="ui-btn" style="width: 95%">Reject payment</a>


</body>
</html>