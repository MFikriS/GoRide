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
						$('#status_pemesanan5').append('<p>' + 'Status Order	: ' + order.Status_Pemesanan + '</p>');
						$('#lokasi_driver_sekarang').append('<p>' + 'Lokasi Driver	: Jalan Blimbing ' + '</p>');
						$('#terima1').append('<button class="btn btn-success">Terima</button>');
						$('#sudah_dijemput').append('<button class="btn btn-success">Sudah Dijemput</button>');
						$('#tolak1').append('<button class="btn btn-success">Tolak</button>');
						document.getElementById('chat2').style.display = 'block';
						document.getElementById('chat3').style.display = 'block';
						document.getElementById('lokasi_driver_sekarang4').style.display = 'block';
						document.getElementById('menunggu').style.display = 'block';
						document.getElementById('cancel_customer').style.display = 'block';
						document.getElementById('infrms_drvr').style.display = 'block';
						document.getElementById('nama_driver').style.display = 'block';
						document.getElementById('lokasi_driver_sekarang4').style.display = 'block';
						document.getElementById('plat_motor').style.display = 'block';
						document.getElementById('merk').style.display = 'block';
						document.getElementById('tipe').style.display = 'block';
						$('#cancel_customer').append('<button class="btn btn-success">Cancel Order</button>');
						document.getElementById("idorder2").value = order.Id_Order;
					} else if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Sudah dijemput"){
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status_pesan2').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>');
						$('#lokasi_driver_sekarang5').append('<p>' + 'Lokasi Driver	: ' + order.Lokasi_Penjemputan + '</p>');
						document.getElementById('sdng_diantar').style.display = 'block';
						$('#sudah_diantar').append('<button class="btn btn-success">Sudah Diantar</button>');
						document.getElementById("idorder").value = order.Id_Order;
						document.getElementById('infrms_drvr').style.display = 'block';
						document.getElementById('nama_driver').style.display = 'block';
						document.getElementById('lokasi_driver_sekarang4').style.display = 'block';
						document.getElementById('plat_motor').style.display = 'block';
						document.getElementById('merk').style.display = 'block';
						document.getElementById('tipe').style.display = 'block';
					} else if(order.driver_id == "002" && order.customer_id == "001" && order.Status_Pemesanan == "Sudah sampai tujuan"){
						$('#nama_customer').append('<p>' + 'Nama Customer : ' + order.Nama_Customer + '</p>');
						$('#id_order').append('<p>' + 'ID Order : ' + order.Id_Order + '</p>');
						$('#customer_id').append('<p>' + 'Nama Customer : ' + order.customer_id + '</p>');
						$('#lokasi_antar').append('<p>' + 'Lokasi Antar : ' + order.Lokasi_Antar + '</p>');
						$('#lokasi_jemput').append('<p>' + 'Lokasi Jemput	: ' + order.Lokasi_Penjemputan + '</p>');
						$('#total_harga').append('<p>' + 'Total Harga	: Rp. ' + order.Total_Harga + '</p>');
						$('#jenis_pembayaran').append('<p>' + 'Metode Pembayaran	: ' + order.Jenis_Pembayaran + '</p>');
						$('#status_pesan2').append('<p>' + 'Status Pemesanan	: ' + order.Status_Pemesanan + '</p>');
						$('#lokasi_driver_sekarang5').append('<p>' + 'Lokasi Driver	: ' + order.Lokasi_Penjemputan + '</p>');
						document.getElementById('sdh_smpai').style.display = 'block';
						document.getElementById('input_rating').style.display = 'block';
						$('#ksh_rtng').append('<button class="btn btn-success">Kasih Rating</button>');
						document.getElementById('ksh_rtng').style.display = 'block';
						$('#sudah_diantar').append('<button class="btn btn-success">Sudah Diantar</button>');
						document.getElementById("idorder").value = order.Id_Order;
					}
			})
		}
	});
});