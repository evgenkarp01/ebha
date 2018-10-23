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



	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	




})


