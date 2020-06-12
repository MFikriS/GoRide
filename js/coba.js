var API_URL = 'https://5v1c3vgkyg.execute-api.ap-southeast-1.amazonaws.com/getOrder';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_URL,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
				$('#id_order').html('');
					
				data.Items.forEach(function(order){
					document.getElementById("id_order").value = order.Id_Order;
			})
		}
	});
});