$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();

	$('#iptu').mask('99.999.999-99');
	$('#cotas1').mask('9.99');
	$('#cotas2').mask('9.99');
	$('#cotas3').mask('9.99');
	$('#cotas4').mask('9.99');
	$('#cotas5').mask('9.99');


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
	

	// Enviar Informações do projeto para o banco para o banco
	$('#infoProjeto').bind('submit', function(e){
		e.preventDefault();
		$('.bg-principal').fadeOut('fast')
		$('.bg-body').fadeIn('fast');
		$('.carregando').fadeIn('fast');

		var objeto = $("#infoProjeto").serialize();
		var dwg_csv = $('#abrir-csv').val();

		// console.log(objeto);
	
		$.ajax({
			url: 'requisicao/informacoes.php',
			type: 'POST',
			// dataType: 'json',
			data: objeto,
			success: (data) => {
				console.log("Cadastrado com sucesso!");	
			}
		});

		$.ajax({
			url: 'requisicao/arquivo.php',
			type: 'POST',
			// dataType: 'json',
			data: 'codigo='+dwg_csv,
			success: (dados) => {
				$('.carregando').fadeOut(150);
				$('.bg-body').fadeOut(150);
				$('.modal-confirmacao').addClass('animated fadeInDown')
				$('.modal-confirmacao').css({
					'display': 'inline-block',
					'margin-top': '15px'
				})

				setTimeout(function(){
					$('.modal-confirmacao').addClass('fadeOutUp')
					console.log("passou aqui")
				},2000);

				setTimeout(function(){
					console.log('impressao antes do reload');
					location.reload(true)	
				},2800);
				
				setTimeout(function(){
					$.post('impressao.php', function(){});
				})
			}
		});
		

	});
	$('#print').bind('click',function(){
		$('.bg-body').fadeIn();
		$('#relatorio').fadeIn();
		
	})



});


