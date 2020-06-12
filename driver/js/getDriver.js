var api_driver = 'https://rcj1l5xd5d.execute-api.ap-southeast-1.amazonaws.com/getDriver';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: api_driver,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(driver){
					if(driver.driver_id == "002"){
						$('#saldo').append('<p>' + 'Saldo Anda : Rp. ' + driver.saldo + '</p>');
						$('#nama_driver').append('<p>' + driver.Nama_Driver + '</p>');
						$('#plat_motor').append('<p>' + 'Plat Motor	: ' + driver.Plat_Motor + '</p>');
						$('#merk').append('<p>' + 'Merk	: ' + driver.Merk + '</p>');
						$('#nama_driver2').append('<p>' + 'Nama Driver : ' + driver.Nama_Driver + '</p>');
						$('#tipe').append('<p>' + 'Tipe	: ' + driver.Tipe + ' ' + driver.warna + '</p>');
						$('#lokasi_driver_sekarang2').append('<p> Lokasi driver sekarang	: Belimbing </p>');
						document.getElementById("driver_nama").value = driver.Nama_Driver;
					}
				})
			}
		});
	});

