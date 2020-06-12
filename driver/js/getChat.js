var API_chat = 'https://2zbsv7aqxj.execute-api.ap-southeast-1.amazonaws.com/getChat';
	$(document).ready(function(){
		var idorder1 = $("#idorder1").val();
		$.ajax({
			type: 'GET',
			url: API_chat,
			
				crossDomain: true,
				contentType: 'application/json',
				success: function(data){
					
				data.Items.forEach(function(chat){
					if(chat.Id_Order == idorder1){
						$('#nama_pengirim_pesan').append('<p>' + chat.nama_pengirim + ' : ' + chat.pesan + ' ' + chat.jam + '</p>');
					}
			})
		}
	});
});