	function tolak2(){
		var API_URL = 'https://i5swgxbi7f.execute-api.ap-southeast-1.amazonaws.com/putOrder';
		
		var idorder = $("#idorder").val(),
			alasan = $("#input_alasan").val(),
			status_pemesanan1 = "Ditolak Driver, karena ",
			status_pemesanan2 = status_pemesanan1.concat(alasan)
			
			$.ajax({
				type: "PUT",
				url: API_URL,
				crossDomain: true,
				contentType: 'application/json',
				data: JSON.stringify({
					'Id_Order': idorder,
					'Status_Pemesanan': status_pemesanan2
				}),
				success: function(res) {
					window.alert("Sukses menolak orderan");
					window.location.href = "index.php";
				},
				error: function(){
					 $('#abcd').text('Gagal');
				}
			});
	}