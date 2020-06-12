var API_URL = 'https://rcj1l5xd5d.execute-api.ap-southeast-1.amazonaws.com/getDriver';
	$(document).ready(function(){
		$.ajax({
			type: 'GET',
			url: API_URL,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(driver){
					if(driver.driver_id == "002"){
						$('#nama_driver').append('<p>' + 'Nama Driver : ' + driver.Nama_Driver + '</p>');
						$('#plat_motor').append('<p>' + 'Plat Motor	: ' + driver.Plat_Motor + '</p>');
						$('#merk').append('<p>' + 'Merk	: ' + driver.Merk + '</p>');
						$('#lokasi_driver_sekarang4').append('<p> Lokasi driver sekarang	: jalan bcd </p>');
						$('#tipe').append('<p>' + 'Tipe	: ' + driver.Tipe + ' ' + driver.warna + '</p>');
					}
				})
			}
		});
	});

