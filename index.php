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
	  <script type = 'text/javascript' src = "js/getCustomer.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<h5 class="card-title">Mau ke mana hari ini?</h5>
		<div class="input-container">
			<input hidden type='text' id="nama_customer" name="nama_customer" value=""></input>
			<i class="fa fa-dot-circle-o" style="font-size:38px;color:green"></i><input type='text' required pattern="\S+.*"/ class='form-control form-control-md' placeholder = 'Cari lokasi tujuan'  id='lks_antar' name='lks_antar' onkeyup='lks_antar();' />
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

	//on keyup, start the countdown\
		$input.on('keyup', function () {
			
		var lks_antar = document.getElementById("lks_antar").value;
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
	  var customer  = document.getElementById("nama_customer").value;
	  if(lks_antar === ' '){
		  alert("silakan input lokasi tujuan Anda");
	  }else{
			window.location.href = "lks_jemput.php?lks_antar=" + lks_antar + "&customer=" + customer;
	  }
	}
	
</script>


