var API_gopay = 'https://2mtdbpxfad.execute-api.ap-southeast-1.amazonaws.com/getGopay';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_gopay,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(gopay){
					if(gopay.id_gopay == "001"){
						$('#saldo_gopay1').append('<p>' + 'Saldo Gopay Anda : Rp. ' + gopay.saldo + '</p>');
						document.getElementById("saldo_gopay").value = gopay.saldo;
					}
			})
		}
	});
});