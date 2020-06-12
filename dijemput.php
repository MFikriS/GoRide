<!DOCTYPE html>
<html lang="en">
<head>
	  <title>GoRide</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	  <script type = 'text/javascript' src = "js/getChat.js"></script>
	  <script type = 'text/javascript' src = "js/updateOrder.js"></script>
	  <script type = 'text/javascript' src = "js/getDriver.js"></script>
	  <script type = 'text/javascript' src = "js/getCustomer.js"></script>
	  <script type = 'text/javascript' src = "js/postChat.js"></script>
	  <script type = 'text/javascript' src = "js/getOrderTerima.js"></script>
	  <script type = 'text/javascript' src = "js/putRatingDriver.js"></script>
	  <style>

		.nav-link .badge {
		  position: absolute;
		  top: 240px;
		  right: 7400px;
		  padding: 5px 10px;
		  border-radius: 50%;
		  background-color: blue;
		  color: white;
		}
		</style>
</head>

<body>
	</br></br></br></br></br>
	<center>
		<h1 id="menunggu" style="display: none">Sedang Menunggu Driver Menjemput</h1>
		<h1 id="sdng_diantar" style="display: none">Sedang Diantar ke Lokasi Tujuan</h1>
		<h1 id="sdh_smpai" style="display: none">Sudah Sampai Tujuan</h1>
	</center>
	 <ul class="nav justify-content-center">
    <li class="nav-item">
    </li>
    </br>
    <li class="nav-item">
    </br>
    </li>
  </ul>
  </br>
  <center>
  </center>
  </br>
	 <ul class="nav justify-content-center">
	   <ul class="nav nav-pills" role="tablist">
		<li id="chat3" style="display: none"; class="nav-item">
			<a class="nav-link" href="#chat_customer" data-toggle="pill">
			  <span>Chat</span>
			  <span class="badge">1</span>
			</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link active" data-toggle="pill" href="#order">Status Orderan</a>
		</li>
	  </ul>
	</ul>
  <!-- Tab panes -->
  <div class="tab-content">
	<div id="chat_customer" class="container tab-pane"><br>
		<center>
		<div id="chat2" style="display: none"; class="card" style="width:800px">
			<p id="nama_pengirim_pesan"></p>
			<div class="col-xs-4">
				<?php 		
					ini_set('date.timezone', 'Asia/Jakarta');
					$tgl = date('d-m-Y');
					$jam = date('H:i:s');
					$idchat2 = $tgl."_".$jam;
				?>
				<input hidden type="text" id="idorder2" value=""></input>
				<input hidden type="text" id="idchat2" value="<?php echo $idchat2; ?>"></input>
				<input hidden type="text" id="jam2" value="<?php echo $jam; ?>"></input>
				<input hidden type="text" id="nama_customer" value=""></input>
				<input class="form-control" id="pesan" type="text" placeholder="Ketikkan pesan Anda disini kepada Driver">
			</div></br></br>
			<button class="btn btn-success" id="kirim_pesan" type="submit" onclick="kirim_pesan()">Kirim</button>
		</div>
		</center>
	</div>
    <div id="order" class="container tab-pane pane active"><br>
		<center>
			<div class="card" style="width:400px">
				<div class="card-body">
					<h4 style="display: none"; id="infrms_drvr" class="card-title">Informasi Driver</h4>
					<p style="display: none"; class="card-text" id="nama_driver"></p>
					<p style="display: none"; class="card-text" id="lokasi_driver_sekarang4" style="display: none"; ></p>
					<p style="display: none"; class="card-text" id="plat_motor"></p>
					<p style="display: none"; class="card-text" id="merk"></p>
					<p style="display: none"; class="card-text" id="tipe"></p>
					<h4 class="card-title">Informasi Order</h4>
					<p class="card-text" id="status_pesan2"></p>
					<input hidden type="text" id="status_pesan3" value=""></input>
					<p class="card-text" id="lokasi_driver_sekarang5"></p>
					<p class="card-text" id="lokasi_antar"></p>
					<p class="card-text" id="lokasi_jemput"></p>
					<p class="card-text" id="total_harga"></p>
					<p class="card-text" id="jenis_pembayaran"></p>
					<select id="input_rating" required style="display: none;" class='custom-select mr-sm-2'>
					  <option value="belum">Kasih rating kepada driver</option>
					  <option value='1'>1</option>
					  <option value='2'>2</option>
					  <option value='3'>3</option>
					  <option value='4'>4</option>
					  <option value='5'>5</option>
					</select>
					<p class="btn btn-success" style="display: none;" id="cancel_customer" onclick='cancel_customer()'></p>
					<p class="btn btn-success" style="display: none;" id="ksh_rtng" onclick='inp_rtg()'></p>
					<h4 id="input_alasan4" style="display: none;">Alasan Anda menolak orderan </h4><select id="input_alasan5" required style="display: none;" class='custom-select mr-sm-2'>
					  <option value="belum">Alasan tolak orderan</option>
					  <option value='Lokasi driver terlalu jauh'>Lokasi driver terlalu jauh</option>
					  <option value='Respon driver lama'>Respon driver lama</option>
					  <option value='Lainnya'>Lainnya</option>
					</select>
					<p class="btn btn-success" style="display: none;" id="cancel_customer2" onclick='cancel_customer2()'>Cancel</p>
					
				</div>
			</div>
		</center>
    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	function inp_rtg(){
	
	var API_URL = 'https://nxgkjfqa5j.execute-api.ap-southeast-1.amazonaws.com/updateRatingDriver';
			
			var idorder = $("#idorder2").val(),
			rating = $("#input_rating").val();
			
			if(rating == "belum"){
				window.alert("Silakan memilih rating terlebih dahulu");
			} else {
				$.ajax({
					type: "PUT",
					url: API_URL,
					crossDomain: true,
					contentType: 'application/json',
					data: JSON.stringify({
						'Id_Order': idorder,
						'Rating_Driver': rating
					}),
					success: function(res) {
						window.alert("Sukses input Rating Driver dan Order selesai");
						window.location.href = "index.php";
					},
					error: function(){
						 $('#abcd').text('Gagal');
					}
				});
			}
	}
	
	function cancel_customer(){
		document.getElementById('input_alasan4').style.display = 'block';
		document.getElementById('input_alasan5').style.display = 'block';
		document.getElementById('cancel_customer2').style.display = 'block';
	}
	
	
	function cancel_customer2(){
		var API_URL = 'https://i5swgxbi7f.execute-api.ap-southeast-1.amazonaws.com/putOrder';
		
		var idorder = $("#idorder2").val(),
			alasan = $("#input_alasan5").val(),
			status_pemesanan1 = "Dibatalkan Customer, karena ",
			status_pemesanan2 = status_pemesanan1.concat(alasan)
			
		if(alasan == "Belum"){
			window.alert("Silakan pilih alasan Anda melakukan pembatalan pesanan!");
		} else {		
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
					window.alert("Sukses membatalkan pesanan");
					window.location.href = "index.php";
				},
				error: function(){
					 $('#abcd').text('Gagal');
				}
			});
		}
	}
	
</script>