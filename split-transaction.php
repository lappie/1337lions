<?php
	include("INC-header.html");
?>

<ul data-role="listview" id="split-transaction-form">
	<li class="big-euro-class">
		<img src="img/euro-button.png" />
		<input style="float: left; width: 60%" type="text" id="total-transaction-money" value="360,-" />
	</li>
	<li data-role="list-divider">Split between</li>
	<li data-role="list-divider">Account</li>
	<li>
		<img src="img/person-button.png" />
		<div class="full_width">
			<h5>Name</h5>
			<input type="text" value="J.J. Valkenburg" />
		</div>
		<img src="img/addressbook-button.png" style="float: right"/>
	</li>
	<li>
		<img src="img/bankaccount-button.png" />
		<div class="full_width">
			<h5>Account number</h5>
			<input type="text" value="NL12 INGB 000 123 45 67"></input>
		</div>
		<img src="img/qr-button.png" style="float: right"/>
	</li>
	<li class="big-euro-class">
		<img src="img/euro-button.png" />
		<input style="float: left; width: 60%" type="text" id="total-transaction-money" value="120,-" />
	</li>
	<li data-role="list-divider">Account</li>
	<li>
		<img src="img/person-button.png" />
		<div class="full_width">
			<h5>Name</h5>
			<input type="text" value="A. Martin" />
		</div>
		<img src="img/addressbook-button.png" style="float: right"/>
	</li>
	<li>
		<img src="img/bankaccount-button.png" />
		<div class="full_width">
			<h5>Account number</h5>
			<input type="text" value="NL12 INGB 000 234 56 78"></input>
		</div>
		<img src="img/qr-button.png" style="float: right"/>
	</li>
	<li class="big-euro-class">
		<img src="img/euro-button.png" />
		<input style="float: left; width: 60%" type="text" id="total-transaction-money" value="120,-" />
	</li>
	<li data-role="list-divider">Add</li>
	<li>
		<a href="#" class="ui-btn" style="width: 100%; margin-bottom:18px; ">Add Account</a>
	</li>
	<li>
		<img src="img/comment-button.png" />
		<div class="full_width">
			<h5>Message</h5>
			<input type="text" value="Eten Treeswijkhoeve" placeholder="Maximaal 140 tekens"></input>
		</div>
	</li>
	<li>
		<img src="img/schedule-button.png" />
		<div class="full_width">
			<h5>Schedule</h5>
			<input type="text" value="13 november 2014 - Eenmalig"></input>
		</div>
	</li>
</ul>
<br /><br />
<a href="invite-overview.php" class="ui-btn" style="width: 100%">Split bill</a>


</body>
</html>