$(document).ready(function(){

	$('[data-toggle="tooltip"]').tooltip();

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
		$('.bg-principal').animate({
			height: 'toggle'
		});
		$('.bg-principal').css({"display": "inline-block"});
		$('.bg-body').fadeIn(300);
		$(".bg-body").css({"display": "inline-block"})
	});

	$('.fechar').bind('click', function(){	
		$('.bg-principal').animate({height: 'toggle'});
		$('.bg-body').fadeOut(300);
	});

	$('#close').bind('click', function(){
		$('#relatorio').css('display','none')
	})

	$('.bg-body').bind('click', function(){	
		$('.bg-principal').fadeOut(300);
		$('.bg-body').fadeOut(300);
	});

	$('#tabela').bind('click', function(){
		console.log('passou')
		$('#relatorio').css("display","inline-block")
	})
	

	$('#gerar-relatorio').bind('click', function(e){
		
		var objeto = $('#formulario').serialize();

		// console.log(objeto)

		$.ajax({
			url: 'informacoes.php/',
			type: 'POST',
			dataType: "json",
			data: {
				dados: objeto,
			},
			success: function (data) {
				console.log(data);	
			}
			});
		});
	


	// $('#gerar-relatorio').bind('click', function(){
		
	// 	var dwg_csv = $('#abrir-csv').val();

	// 	$.post('./informacoes.php', {
	// 		codigo: dwg_csv,

	// 	},function(data) {
	// 		$('.carregando').css('display','none');
	// 		$('.bg-body').css('display','none');
	// 		alert('Cadastrado com sucesso!');

	// 	});
	// 	return false;
	// });
});


