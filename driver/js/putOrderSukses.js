	function terima1(){
	
	var API_URL = 'https://i5swgxbi7f.execute-api.ap-southeast-1.amazonaws.com/putOrder';
			
			var idorder = $("#idorder").val(),
			status_pemesanan = "Diterima Driver"
			
			$.ajax({
				type: "PUT",
				url: API_URL,
				crossDomain: true,
				contentType: 'application/json',
				data: JSON.stringify({
					'Id_Order': idorder,
					'Status_Pemesanan': status_pemesanan
				}),
				success: function(res) {
					window.alert("Sukses Menerima");
					window.location.href = "menerima_orderan.php?idorder=" + idorder;
				},
				error: function(){
					 $('#abcd').text('Gagal');
				}
			});
	}