$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();

	$('#iptu').mask('99.999.999-99');
	$('#cotas').mask('9.99' ,'placeholder: .  .   .  -  ');


	$('#hover').click(function(){
		$('.dropdown').toggle("show");
	});

	$("#documentacao-1").on("click", function(){
		$('#documentacao').animatescroll({scrollSpeed:500});
	})

	$("#extration").on("click", function(){
		$('#data-extration').animatescroll({scrollSpeed:500});
	})

	$('#cadastrar-projeto').bind('click', function(){
		$('.bg-principal').fadeIn('fast')
		$('.bg-body').fadeIn('fast');
	});

	$('.fechar').bind('click', function(){	
		$('.bg-principal').fadeOut('fast');
		$('.bg-body').fadeOut('fast');
		$('#relatorio').fadeOut('fast');
	});

	// $('#close').bind('click', function(){
	// 	$('#relatorio').css('display','none')
	// })

	$('.bg-body').bind('click', function(){	
		$('.bg-principal').fadeOut('fast');
		$('.bg-body').fadeOut('fast');
		$('#relatorio').fadeOut('fast');
	});

	$('#tabela').bind('click', function(){
		console.log('passou')
		$('#relatorio').css("display","inline-block")
	})
	

	// $('#form').bind('submit', function(e){
	// 	e.preventDefault();
		
	// 	var objeto = $(this).serialize();
	// 	 console.log(objeto);
	// 	$.ajax({
	// 		url: 'informacoes.php',
	// 		type: 'POST',
	// 	 dataType: 'json',
	// 		data: objeto,
	// 		success: (data) => {
	// 			$('.bg-principal').fadeOut(150);
	// 			$('.bg-body').fadeOut(150);	
	// 			alert("Cadastrado Paramentro Urbanisticos");
					
	// 		}
	// 	});
	// });
	
	$('#form').bind('submit', function(e){
		e.preventDefault();
		
		$('.carregando').fadeIn('fast')
		// $('.carregando').css({"display": "inline-block"});
		$('.bg-body').fadeIn('fast');
		$('.bg-principal').fadeOut('fast');
		$('.carregando').fadeOut('fast');
		$('#relatorio').fadeIn('fast');
		// $(".bg-body").css({"display": "inline-block"})

		// e.preventDefault();
		// var objeto = $("#form").serialize();
		// var dwg_csv = $('#abrir-csv').val();

		// console.log(objeto);
		// console.log(dwg_csv);


		// $.post('informacoes.php', {
		// 	codigo: dwg_csv,
		// },function(data) {
		// 	$('.carregando').css('display','none');
		// 	$('.bg-body').css('display','none');
		// 	alert("Cadastrado CSV")	
		// });
		// return false;

		
		// console.log(objeto);
		// $.ajax({
		// 	url: 'informacoes.php',
		// 	type: 'POST',
		// 	// dataType: 'json',
		// 	data: objeto,
		// 	success: (data) => {
		// 		$('.bg-principal').fadeOut(150);
		// 		$('.bg-body').fadeOut(150);	
		// 		alert("Cadastrado Paramentro Urbanisticos");
					
		// 	}
		// });
	});


});


