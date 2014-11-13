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
			require("INC-transaction-list-out-header.html");
		?>
		
<ul data-role="listview" id="transaction-list">
	<li data-role="list-divider">
		12 November
	</li>
	<li>
		<img src="img/qr-button.png" />
		<h3>AH ToGo</h3>
		<p><span>Amsterdam Bijlmer</span></p>
		<h2>-&euro;3.<span class="decimals">24</span></h2>
	</li>
	<li>
		<img src="img/qr-button.png" />
		<h3>Starbucks</h3>
		<p><u class="span-underline">London, United Kingdom</u></p>
		<h2>-$2.<span class="decimals">24</span></h2>
		<h4>&euro;1.<span class="decimals">68</span></h4>
	</li>
	<li data-role="list-divider">
		11 November
	</li>
	<li>
		<img src="img/qr-button.png" />
		<h3>AH ToGo</h3>
		<p><span>Amsterdam Bijlmer</span></p>
		<h2>-&euro;2.<span class="decimals">37</span></h2>
	</li>
	<li>
		<img src="img/qr-button.png" />
		<h3>Julia's</h3>
		<p><span>Amsterdam Amstel</span></p>
		<h2>-&euro;6.<span class="decimals">75</span></h2>
	</li>
</ul>
<!--------------- /PAGE CONTENT ------------>
</div><!-- ui-container -->
		</div><!-- content -->
	
	</div> <!-- page -->
</body>
</html>