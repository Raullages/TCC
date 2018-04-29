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

	$('#cadastrar-projeto').bind('click',function(){

		$('.bg-principal').css('display','inline-block');
	});
	$('.fechar a').bind('click',function(){

		$('.bg-principal').css('display','none');
	})


	$('#enviar').bind('click', function(){

		$('.carregando').css('display','inline-block');
		var dwg_csv = $('#abrir-csv').val();
		// var nome_db = $('.sair texto').html();

		$.post('./informacoes.php', {
			codigo: dwg_csv,

		},function(data) {
			$('.carregando').css('display','none');
			alert('Cadastrado com sucesso!');

		});


		return false;
	});
});
