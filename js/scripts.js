$(document).ready(function() {
	//navegacao menu principal
	//$('nav.home a').click(function(){
	$('nav.home a, .slicknav_nav li a').click(function(){
		var classe = $(this).attr('class');
		if ( $('#'+classe).is(':visible')){
			$('#'+classe).slideUp(200);
		}else{
			$('.toggle').hide();
	    	$('#'+classe).slideDown(200);
			$('html, body').animate({scrollTop: $('#'+classe).offset().top}, 200);
			$('.mobile').slicknav('close');
		}
		
	});


	//navegacao mapa
	$('.mapa.left a').click(function(){		
		$('.mapa.left a').children('.item').each(function(index) {
			$('.mapa.left a').children('.item').removeClass('selected');
			$('.mapa.left a').removeClass('selected');
	    });
		$(this).children('.item').addClass('selected');
		$(this).addClass('selected');
		var classSelected = $(this).children('.item').attr('class').replace('item', '').replace('selected','');
		classSelected = $.trim(classSelected);
		$('.mapa-right').hide();
		$('.mapa-right.'+classSelected).show();
		$('html, body').animate({scrollTop: $('.mapa.left').offset().top}, 200);

	});


	//troca de bandeiras
	$('a.brasil').click(function(){
		$('.en').hide();
		$('.pt').show();
		$('html, body').animate({scrollTop: $('.pt').offset().top}, 200);
	});
	$('a.eua').click(function(){
		$('.pt').hide();
		$('.en').show();
		$('html, body').animate({scrollTop: $('.en').offset().top}, 200);
	});


  //menu mobile
	$(window).scroll(function () {
	  if ( $("#main-nav .home .mobile").is(":visible") ) {
	  
	          if ($(this).scrollTop() > 136) {

	                  $(".slicknav_menu").show();
	          } else {
	                  $(".slicknav_menu").hide();
	          }
	   
	   }
	});
});


// validacao form
$(document).ready(function() {
		$("#f").validate({
		submitHandler: function(form) {
         	$("#btn1").attr("disabled", "disabled");
         	$('#destino').html('');
			$(form).ajaxSubmit({
				url: 'envio_contato.php',
				success: function(resposta) {
					$('#destino').html(resposta);	
					setTimeout(function() {
						$("#nome, #email, #telefone, #mensagem").val("");
						$("#btn1").removeAttr("disabled");
					}, 2000);
					setTimeout(function() {
						$('#destino').html('');
					}, 4000);		
									
				},
				error: function(error) {
					alert('error: '+error);
				}
			});
		}
	});
});
