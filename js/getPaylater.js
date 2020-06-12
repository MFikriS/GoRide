var API_paylater = 'https://jr9srlivm7.execute-api.ap-southeast-1.amazonaws.com/getPaylater';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_paylater,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(paylater){
					if(paylater.id_paylater == "001"){
						$('#saldo_paylater1').append('<p>' + 'Saldo Paylater : Rp. ' + paylater.saldo + '</p>');
						document.getElementById("saldo_paylater").value = paylater.saldo;
					}
			})
		}
	});
});