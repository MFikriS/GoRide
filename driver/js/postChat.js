	function kirim_pesan(){
		var API_URL = 'https://414qpexrv5.execute-api.ap-southeast-1.amazonaws.com/postChat';
		
		var idorder1 = $("#idorder1").val(),
			idchat = $("#idchat2").val(),
			jam = $("#jam2").val(),
			pesan = $("#pesan").val(),
			nama_pengirim = $("#driver_nama").val()
			
			$.ajax({
				type: "PUT",
				url: API_URL,
				crossDomain: true,
				contentType: 'application/json',
				data: JSON.stringify({
					'id_chat': idchat,
					'Id_Order': idorder1,
					'jam': jam,
					'pesan': pesan,
					'nama_pengirim': nama_pengirim
				}),
				success: function(res) {
					
					window.location.href = "menerima_orderan.php?idorder=" + idorder1;
				},
				error: function(){
					 $('#abcd').text('Gagal');
				}
			});
	}