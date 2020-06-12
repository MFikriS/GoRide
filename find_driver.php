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
	  <script type = 'text/javascript' src = "js/getOrder.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

	</br></br></br></br></br>
	<center>
		<h1>Menunggu Driver</h1>
		</br>
	</center>
	<center>
		<div class="card" style="width:400px">
		  <div class="card-body">
			<h4 class="card-title">Status Pemesanan</h4>
			<p class="card-text" id="id_order"></p>
			<?php
				$idorder2 = $_GET['idorder'];
			?>
			<input type="text" id="id_order2" value="<?php echo $idorder2; ?>"></p>
			<button class="btn btn-success" id="status" value="">waiting</p>
		  </div>
		</div>
		</center>



<script LANGUAGE='JavaScript' >

    //setTimeout(function() {
      //  swal({
        //    title: "selamat",
          //  text: "Anda Mendapatkan Driver",
           // type: "success",
		//	timer: 2000,
			//showConfirmButton: false
        //}, function(){
          //  window.location.href = "index.php";
        //});
    //}, 5000);
		var idorder1 = $("#id_order2").val();
		window.setTimeout(function(){
			
	        window.location.href = "dijemput.php?idorder=" + idorder1;
			alert("Anda Mendapatkan Driver");

	  }, 2000);
</script>

</body>
</html>