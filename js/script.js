$(function(){
	//Aqui vai todo o código de javascript.
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicarmos na nav.mobile!
		var listaMenu = $('nav.mobile ul');

		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-xmark fa-lg');
			listaMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-xmark fa-lg');
			icone.addClass('fa-bars');
			listaMenu.slideToggle();
		}

   	});
   	
   	if($('target').length > 0){
   		//O elemendo existe, portanto precisamos dar o scroll em algum elemento.
   		var elemento = '#'+$('target').attr('target');
   		var divScroll = $(elemento).offset().top;
   		$('html,body').animate({scrollTop:divScroll},2000);
   	}

   	carregarDinamico();
   	function carregarDinamico(){
   		$('[realtime]').click(function(){
   			var pagina = $(this).attr('realtime');
   			$('.container-principal').hide();
   			$('.container-principal').load(include_path+'pages/'+pagina+'.php');

   			$('.container-principal').fadeIn(1000);
   			
   			return false;
   		})
   	}

})