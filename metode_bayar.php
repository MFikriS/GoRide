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
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <script type = 'text/javascript' src = "js/getGopay.js"></script>
	  <script type = 'text/javascript' src = "js/getPaylater.js"></script>
	  <style>
		* {box-sizing: border-box;}

		/* Style the input container */
		.input-container {
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		/* Style the form icons */
		.icon {
		  padding: 100px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		/* Style the input fields */
		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		/* Set a style for the submit button */
		.btn {
		  /*background-color: dodgerblue;*/
		  color: white;
		  padding: 10px 10px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  margin-top: 10px;
		  /*opacity: 0.9;*/
		}

		
		
	/*	.btn{
		  color: white;
		  padding: 10px 10px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  margin-top: 10px;
		  /opacity: 0.9;/
		}*/
	  </style>
</head>

<body>
	</br></br></br></br></br>
	<div class="card">
	  <div class="card-body">
			<?php 
				$lks_antar = $_GET['lks_antar'];
				$lks_jmpt = $_GET['lks_jmpt'];
				$hrg = $_GET['hrg'];
				$wkt1 = $_GET['wkt1'];
				$wkt2 = $_GET['wkt2'];
				$customer = $_GET['customer'];
				if($wkt1 < $wkt2){
					$wkt = $wkt1.' - '.$wkt2;
				}else{
					$wkt = $wkt2.' - '.$wkt1;
				}
				$id = "GoRide-";
				ini_set('date.timezone', 'Asia/Jakarta');
				$tgl = date('d-m-Y');
				$jam = date('H:i:s');
				$customer_id = "001";
				$driver_id = "002";
				$status = "Pending";
				$id_order = $id ."".$customer_id."_".$tgl."_".$jam;
			?>
		<table class="table">
			<thead>
				<tr>
					<th>Lokasi Jemput : <?php echo $lks_jmpt; ?> </th>
					<th>Lokasi Antar : <?php echo $lks_antar; ?> </th>
					<th></th>
				</tr>
			</thead>
		</table>
		<table class="table">
			<thead>
				<tr>
					<input hidden type='text' id='id_order' name='id_order' value="<?php echo $id_order; ?>" readonly />
					<input hidden type='text' id='hrg' name='hrg' value="<?php echo $hrg; ?>" readonly />
					<input hidden type='text' id='customer' name='customer' value="<?php echo $customer_id; ?>" readonly />
					<input hidden type='text' id='driver' name='driver' value="<?php echo $driver_id; ?>" readonly />
					<input hidden type='text' id='lks_antar' name='lks_antar' value="<?php echo $lks_antar; ?>" readonly />
					<input hidden type='text' id='lks_jmpt' name='lks_jmpt' value="<?php echo $lks_jmpt; ?>" readonly />
					<input hidden type='text' id='status' name='status' value="<?php echo $status; ?>" readonly />
					<input hidden type='text' id='nm_customer' name='nm_customer' value="<?php echo $customer; ?>" readonly />
					<input hidden type='text' id='saldo_gopay' name='saldo_gopay' value="" readonly />
					<input hidden type='text' id='saldo_paylater' name='saldo_paylater' value="" readonly />
					<th><img src="assets/images/goride.png" class="img-thumbnail" width="100px" id="goride"/></th>
					<!-- <th>GoRide</th> -->
					<th>Rp. <?php echo $hrg.'</br> '.$wkt ; ?>menit</th>
				</tr>
			</thead>
		</table>
					<h4>Pilih Metode Pembayaran </h4>
					<p id="saldo_gopay1"></p>
					<p id="saldo_paylater1"></p>
					<select id='mtdbyr' required name='mtdbyr' class='custom-select mr-sm-2'>
					  <option value='GoPay'>GoPay</option>
					  <option value='PayLater'>PayLater</option>
					  <option value='Tunai'>Tunai</option>
					</select>
					</h4>
					</br>
 				<button type="submit" id="submit" class="btn btn-success btn-sm  center-block" >Pesan GoRide</button>
	</div>
	</form>
</div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	var API_URL = 'https://ops2fv82wj.execute-api.ap-southeast-1.amazonaws.com/postOrder';
	
	$(document).ready(function() {
		$('#submit').on('click', function(event){
			event.preventDefault();
			
			var Id_Order = $("#id_order").val(),
			lks_jmpt = $("#lks_jmpt").val(),
			status = $("#status").val(),
			mtd = $("#mtdbyr").val(),
			saldogopay = $("#saldo_gopay").val(),
			saldopaylater = $("#saldo_paylater").val(),
			sld_gpy = Number(saldogopay),
			sld_pyltr = Number(saldopaylater),
			customer = $("#customer").val(),
			driver = $("#driver").val(),
			hrg = $("#hrg").val(),
			harga = Number(hrg),
			nm_customer  = document.getElementById("nm_customer").value,
			lks_antar = $("#lks_antar").val();
			if(mtd == "GoPay"){
				if(sld_gpy < harga){
					window.alert("Maaf, saldo anda tidak mencukupi");
				} else {
					$.ajax({
						type: "POST",
						url: API_URL,
						crossDomain: true,
						contentType: 'application/json',
						data: JSON.stringify({
							'Id_Order': Id_Order,
							'Lokasi_Antar': lks_antar,
							'Lokasi_Penjemputan': lks_jmpt,
							'Status_Pemesanan': status,
							'Jenis_Pembayaran': mtd,
							'customer_id': customer,
							'driver_id': driver,
							'Nama_Customer' : nm_customer,
							'Rating_Driver' : "Belum ada rating",
							'Total_Harga': hrg
						}),
						success: function(res) {
							window.location.href = "find_driver.php?idorder=" + Id_Order;
						},
						error: function(){
							 $('#abcd').text('Gagal');
						}
					});
				}
			} else if(mtd == "PayLater"){
				if(sld_pyltr < harga){
					window.alert("Maaf, saldo anda tidak mencukupi");
				} else {
					$.ajax({
						type: "POST",
						url: API_URL,
						crossDomain: true,
						contentType: 'application/json',
						data: JSON.stringify({
							'Id_Order': Id_Order,
							'Lokasi_Antar': lks_antar,
							'Lokasi_Penjemputan': lks_jmpt,
							'Status_Pemesanan': status,
							'Jenis_Pembayaran': mtd,
							'customer_id': customer,
							'driver_id': driver,
							'Nama_Customer' : nm_customer,
							'Rating_Driver' : "Belum ada rating",
							'Total_Harga': hrg
						}),
						success: function(res) {
							window.location.href = "find_driver.php?idorder=" + Id_Order;
						},
						error: function(){
							 $('#abcd').text('Gagal');
						}
					});
				} 
			} else {
				$.ajax({
					type: "POST",
					url: API_URL,
					crossDomain: true,
					contentType: 'application/json',
					data: JSON.stringify({
						'Id_Order': Id_Order,
						'Lokasi_Antar': lks_antar,
						'Lokasi_Penjemputan': lks_jmpt,
						'Status_Pemesanan': status,
						'Jenis_Pembayaran': mtd,
						'customer_id': customer,
						'driver_id': driver,
						'Nama_Customer' : nm_customer,
						'Rating_Driver' : "Belum ada rating",
						'Total_Harga': hrg
					}),
					success: function(res) {
						window.location.href = "find_driver.php?idorder=" + Id_Order;
					},
					error: function(){
						 $('#abcd').text('Gagal');
					}
				});
			}
		})
	});
</script>


