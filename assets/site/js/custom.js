$( document ).ready(function() {

	$("#deleteFromChat").on('click', function(){
		var msg   = $("#del-chat").serialize();
	        $.ajax({
	          type: 'POST',
	          url: '../assets/site/php/delchat.php',
	          data: msg,
	          success: function(data) {
	            $('.result').html(data);
	            $("#deleteFromChat").slideUp('fast');
	          },
	          error:  function(xhr, str){
		    alert('Возникла ошибка: ' + xhr.responseCode);
	          }
        });
	});


})


