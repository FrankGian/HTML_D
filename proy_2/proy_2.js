$(document).ready(function(){

	$("#grupolocal").change(function(){
	
	var keyw = $("#casilla").val();
	var grupo = $("#grupolocal").val();
	
	$.ajax({
	
			type:"POST",
			url:"buscar.php",
			data: {key: keyw, cat: grupo},
			success:mostrar,
				
		  });
		return false;
	});

	function mostrar (datos) {
	
	$("tbody").empty();
	$("tbody").append(datos);
			
	};

	
	});
	
