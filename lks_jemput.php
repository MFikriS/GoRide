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
		  background-color: dodgerblue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.btn:hover {
		  opacity: 1;
		}
	  </style>
</head>

<body>
	</br></br></br></br></br>
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Set lokasi jemput</h5>
		<div class="input-container">
			<i class="material-icons" style="font-size:34px;color:red">person_pin_circle</i><input type='text' class='form-control form-control-md' placeholder = 'Cari lokasi jemput'  id='lks_jmpt' name='lks_jmpt' onkeyup='lks_jmpt();' />
		</div>
		<div class="input-container">
			<?php 
				$lks_antar = $_GET['lks_antar'];
				$customer = $_GET['customer'];
			?>
			<input hidden type='text' id="nama_customer" name="nama_customer" value="<?php echo $customer ; ?>"></input>
			<i class="fa fa-dot-circle-o" style="font-size:38px;color:green"></i><input type='text' class='form-control form-control-md' placeholder = 'Cari lokasi tujuan'  id='lks_antar' name='lks_antar' onkeyup='lks_antar();' value="<?php echo $lks_antar ?>"/>
		</div>
 </div>
</div>
</body>

</html>
<script type="text/javascript">
	
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms, 5 second for example
	var $input = $('#lks_antar');

	//on keyup, start the countdown
	$input.on('keyup', function () {
	  clearTimeout(typingTimer);
	  typingTimer = setTimeout(doneTyping, doneTypingInterval);
	});

	//on keydown, clear the countdown 
	$input.on('keydown', function () {
	  clearTimeout(typingTimer);
	});

	//user is "finished typing," do something
	function doneTyping () {
	  //do something
	  var lks_antar = document.getElementById("lks_antar").value;
	  window.location.href = "lks_jemput.php?lks_antar=" + lks_antar;
	}
	
	//setup before functions
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1000;  //time in ms, 5 second for example
	var $input2 = $('#lks_jmpt');

	//on keyup, start the countdown
	$input2.on('keyup', function () {
	  clearTimeout(typingTimer);
	  typingTimer = setTimeout(doneTyping, doneTypingInterval);
	});

	//on keydown, clear the countdown 
	$input2.on('keydown', function () {
	  clearTimeout(typingTimer);
	});

	//user is "finished typing," do something
	function doneTyping () {
	  //do something
	  var lks_jmpt = document.getElementById("lks_jmpt").value;
	  var lks_antar = document.getElementById("lks_antar").value;
	  var customer  = document.getElementById("nama_customer").value;
	  var jrk = Math.floor(Math.random() * 23) + 0.5;
	  var wkt1 = Math.floor(Math.random() * 20);
	  var wkt2 = Math.floor(Math.random() * 18);
	  var hrg = jrk * 6000;
	  window.location.href = "metode_bayar.php?lks_antar=" + lks_antar + "&lks_jmpt=" + lks_jmpt + "&customer=" + customer + "&hrg=" + hrg + "&jrk=" + jrk + "&wkt1=" + wkt1 + "&wkt2=" + wkt2;
	}
</script>


