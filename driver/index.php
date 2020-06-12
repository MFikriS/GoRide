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
	  <script type = 'text/javascript' src = "js/getDriver.js"></script>
	  <script type = 'text/javascript' src = "js/getOrder.js"></script>
	  <script type = 'text/javascript' src = "js/putOrderTolak.js"></script>
	  <script type = 'text/javascript' src = "js/putOrderSukses.js"></script>
	  <style>

		.nav-link active .badge {
		  position: absolute;
		  top: 400px;
		  right: 600px;
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
		<h1>Menu Driver</h1>
		</br>
		<h4 id="saldo"></h4>
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
		<li class="nav-item">
		  <a class="nav-link" data-toggle="pill" href="#order">Riwayat Order</a>
		</li>
	    <li class="nav-item">
		  <a class="nav-link" data-toggle="pill" href="#profil">Profil</a>
		</li>
		 <li class="nav-item">
			<a href="#notif" class="nav-link active" data-toggle="pill">
			  <span>Notifikasi</span>
			  <span class="badge">1</span>
			</a>
		</li>
	  </ul>
	</ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="order" class="container tab-pane fade"><br>
		<center>
			<div class="card" style="width:400px">
				<h4 class="card-title" id="id_order5"></h4> 
				<h4 class="card-title" id="status_pemesanan5"></h4> 
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lht_dtl" id="idorder5" value="" >Lihat Detail</button>
					<!-- Modal -->
					<div id="lht_dtl" class="modal fade" role="dialog">
					  <div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
						  <div class="modal-header">
							<h4 class="modal-title">Detail Order</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						  <div class="modal-body">
							<p id="lokasi_antar5"></p>
							<p id="lokasi_jemput5"></p>
							<p id="jenis_pembayaran5"></p>
							<p id="total_harga5"></p> 
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>

					  </div>
					</div>
			</div>
		</center>
    </div>
    <div id="profil" class="container tab-pane fade"><br>
		<center>
		<div class="card" style="width:400px">
		  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
		  <div class="card-body">
			<h4 class="card-title" id="nama_driver"></h4>
			<h4 class="card-text">Spesifikasi Kendaraan</h4>
			<p class="card-text" id="plat_motor"></p>
			<p class="card-text" id="merk"></p>
			<p class="card-text" id="tipe"></p>
		  </div>
		</div>
		</center>
	</div>
	<div id="notif" class="container tab-pane active"><br>
		<center>
		<div class="card" id="refresh" style="width:400px">
		  <div class="card-body">
			<h4 class="card-title">Orderan Masuk</h4>
			<p class="card-text" id="nama_customer"></p>
			<input hidden type="text" id="idorder" value=""></input>
			<p class="card-text" id="lokasi_antar"></p>
			<p class="card-text" id="lokasi_jemput"></p>
			<p class="card-text" id="total_harga"></p>
			<p class="card-text" id="jenis_pembayaran"></p>
			<p class="card-text" id="terima1" onclick='terima1()'></p>
			<p class="card-text" id="tolak1"></p>
			<h4 id="input_alasan2" style="display: none;">Alasan Anda menolak orderan </h4><select id="input_alasan" required style="display: none;" class='custom-select mr-sm-2' onchange='tolak2()'>
					  <option value="">Alasan tolak orderan</option>
					  <option value='Lokasi jemput customer terlalu jauh'>Lokasi jemput customer terlalu jauh</option>
					  <option value='Buru-buru'>Buru-buru</option>
					  <option value='Lainnya'>Lainnya</option>
					</select>
		  </div>
		</div>
		</center>
	</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	
	$(document).ready(function() {
		$('#tolak1').on('click', function(event){
			event.preventDefault();
			document.getElementById('input_alasan').style.display = 'block';
			document.getElementById('input_alasan2').style.display = 'block';
		})
	});
	
	$('#button1').on('click', function() {
		$('#openModal').show();
	});
</script>