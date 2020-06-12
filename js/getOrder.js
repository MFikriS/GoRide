var API_order = 'https://5v1c3vgkyg.execute-api.ap-southeast-1.amazonaws.com/getOrder';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_order,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(order){
					if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Pending"){
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>'); 
						document.getElementById("status_pesan").value = order.Status_Pemesanan;
						document.getElementById("idorder").value = order.Id_Order;
					}
			})
		}
	});
});