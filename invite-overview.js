getPaymentInvites = function () {
	return [
		{
			"firstName": "P.",
			"lastName": "Jansen",
			"date": "11-11-2014",
			"amount": "369.00",
			"status": "Invited"
		},
		{
			"firstName": "J.",
			"lastName": "Smit",
			"date": "11-11-2014",
			"amount": "1.00",
			"status": "Payed"
		},
		{
			"firstName": "H.",
			"lastName": "de Vries",
			"date": "09-11-2014",
			"amount": "1.00",
			"status": "Payed"
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
			"status": "Payed"
		},
		{
			"firstName": "J.",
			"lastName": "Smit",
			"date": "08-11-2014",
			"amount": "1.00",
			"status": "Payed"
		}
	];
};

var parent = document.getElementById("invite-overview");
piBlocks = document.createElement('div');
parent.appendChild(piBlocks);
var paymentInvites = getPaymentInvites();
for (var i=0; i<paymentInvites.length; i++) {
  	paymentInvite = paymentInvites[i];
  	block = document.createElement('div');
  	block.innerHTML = '<div class="pi-block pi-block-status-'+paymentInvite.status.toLowerCase()+'" onclick="window.location.href = \'#payment\'"><h3 class="pi-block-name">'+paymentInvite.firstName+' '+paymentInvite.lastName+'</h3><span class="date">'+paymentInvite.date+'</span><h3 class="pi-block-amount">&euro; '+paymentInvite.amount+'</h3><span class="pi-block-status">'+paymentInvite.status+'</span></div>';
  	piBlocks.appendChild(block);
}	

console.log('asdfasd');


	/*
	<div class="pi-menu-filter">
	<div  data-role="navbar">
		<ul>
			<a href="#" class="ui-btn-active">All</a>
			<a href="#">Not sent</a>
			<a href="#">Sent</a>		
			<a href="#">Paid</a>	
			<a href="#">Declined</a>	
		</ul>
	</div>
</div>

<div id="pi-blocks">
</div>

<div class="pi-block pi-block-status-notscheduled" onclick="window.location.href = '#payment'">
	<h3 class="pi-block-name">P. Jansen</h3>
	<span class="date">11-11-2014</span>
	<h3 class="pi-block-amount">&euro; 369,-</h3>
	<span class="pi-block-status">Not scheduled</span>
</div>

<div class="pi-block pi-block-status-notscheduled" onclick="#payment">
	<h3 class="pi-block-name">P. Jansen</h3>
	<span class="date">11-11-2014</span>
	<h3 class="pi-block-amount">&euro; 369,-</h3>
	<span class="pi-block-status">Not scheduled</span>
</div>

<div class="pi-block pi-block-status-notscheduled" onclick="#payment">
	<h3 class="pi-block-name">P. Jansen</h3>
	<span class="date">11-11-2014</span>
	<h3 class="pi-block-amount">&euro; 369,-</h3>
	<span class="pi-block-status">Not scheduled</span>
</div>

<div class="pi-block pi-block-status-notscheduled" onclick="#payment">
	<h3 class="pi-block-name">P. Jansen</h3>
	<span class="date">11-11-2014</span>
	<h3 class="pi-block-amount">&euro; 369,-</h3>
	<span class="pi-block-status">Not scheduled</span>
</div>
*/