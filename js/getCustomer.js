var API_customer = ' https://vixeqmuxge.execute-api.ap-southeast-1.amazonaws.com/getCustomer';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_customer,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(customer){
					if(customer.customer_id == "001"){
						$('#customer').append('<p>' + 'Nama Customer : ' + customer.Nama + '</p>');
						document.getElementById("nama_customer").value = customer.Nama;
					}
			})
		}
	});
});