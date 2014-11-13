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
		
	<ul data-role="listview" id="transaction-list">
		<li data-role="list-divider">
			12 November
		</li>
		<li>
			<img src="img/qr-button.png" />
			<h3>ING</h3>
			<h2>&euro;2416.<span class="decimals">24</span></h2>
		</li>
		<li data-role="list-divider">
			1 November
		</li>
		<li>
			<img src="img/qr-button.png" />
			<h3>Zorgtoeslag</h3>
			<h2>&euro;2.<span class="decimals">37</span></h2>
		</li>
		<li>
			<img src="img/qr-button.png" />
			<h3>Huurtoeslag</h3>
			<h2>&euro;6.<span class="decimals">75</span></h2>
		</li>
	</ul>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>