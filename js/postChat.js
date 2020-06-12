	function kirim_pesan(){
		var API_URL = 'https://414qpexrv5.execute-api.ap-southeast-1.amazonaws.com/postChat';
		
		var idorder6 = $("#idorder2").val(),
			idchat = $("#idchat2").val(),
			jam = $("#jam2").val(),
			pesan = $("#pesan").val(),
			nama_pengirim = $("#nama_customer").val();
			
			$.ajax({
				type: "PUT",
				url: API_URL,
				crossDomain: true,
				contentType: 'application/json',
				data: JSON.stringify({
					'id_chat': idchat,
					'Id_Order': idorder6,
					'jam': jam,
					'pesan': pesan,
					'nama_pengirim': nama_pengirim
				}),
				success: function(res) {
					window.location.href = "dijemput.php?idorder=" + idorder6;
				},
				error: function(){
					 $('#abcd').text('Gagal');
				}
			});
	}