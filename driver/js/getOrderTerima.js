var API_order = 'https://5v1c3vgkyg.execute-api.ap-southeast-1.amazonaws.com/getOrder';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_order,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(order){
					if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Diterima Driver"){
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#terima1').append('<button class="btn btn-success">Terima</button>');
						$('#sudah_dijemput').append('<button class="btn btn-success">Sudah Dijemput</button>');
						$('#tolak1').append('<button class="btn btn-success">Tolak</button>');
						$('#cancel_customer').append('<button class="btn btn-success">Cancel Order</button>');
						document.getElementById('chat6').style.display = 'block';
					} else if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Sudah dijemput"){
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status_pesan2').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>');
						$('#lokasi_driver_sekarang').append('<p>' + 'Lokasi Driver	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#sudah_diantar').append('<button class="btn btn-success">Sudah Diantar</button>');
						document.getElementById("idorder").value = order.Id_Order;
					} else if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Dibatalkan Customer, karena Respon driver lama"){
						
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status_pesan6').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>');
						$('#lokasi_driver_sekarang').append('<p>' + 'Lokasi Driver	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#sudah_diantar').append('<button class="btn btn-success">Sudah Diantar</button>');
						document.getElementById("idorder").value = order.Id_Order;

					}
			})
		}
	});
});