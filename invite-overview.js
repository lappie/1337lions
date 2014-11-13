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
			"status": "Invited"
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
  	block.setAttribute("class","pi-block-wrapper");
  	block.innerHTML = '<div class="pi-block pi-block-status-'+paymentInvite.status.toLowerCase()+'" onclick="window.location.href = \'#payment\'"><h3 class="pi-block-name">'+paymentInvite.firstName+' '+paymentInvite.lastName+'</h3><a  href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" class="pi-block-cancel" onclick="">x</a><h5 class="pi-block-date">'+paymentInvite.date+'</h5><h3 class="pi-block-amount">&euro; '+paymentInvite.amount+'</h3><h5 class="pi-block-status">'+paymentInvite.status+'</h5></div>';
  	piBlocks.appendChild(block);
}