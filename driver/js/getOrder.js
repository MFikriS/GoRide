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
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#terima1').append('<button class="btn btn-success">Terima</button>');
						$('#tolak1').append('<button class="btn btn-success">Tolak</button>');
						document.getElementById("idorder").value = order.Id_Order;
						document.getElementById("status_pesan2").value = order.Status_Pemesanan;
					} else {
						$('#nama_customer5').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order5').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id5').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar5').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput5').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga5').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran5').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status_pemesanan5').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>');
						document.getElementById("idorder5").value = order.Id_Order;
					}
				})
			}
		});
	});