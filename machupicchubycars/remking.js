    let paqueteCH ="<?php echo $paqueteCuscoHidroElectrica = $_REQUEST['paqueteCuscoHidroElectrica']; ?>";
		let paqueteTipo = "<?php echo $paqueteNro = $_REQUEST['paqueteNro']; ?>";
		let personas = paqueteTipo.split("-");


		if (paqueteCH == 1){
			rk_dateTimeNow= "<?php echo  $rk_dateNow = date('d/m/Y');?>";
			rk_dateTimeOneDay = "<?php echo $rk_dateOneDay->format('d/m/Y'); ?>";
			rk_tipoViaje = "<?php echo $tipoViaje = 2; ?>";
			rk_cantidadPersonas = personas[1];
			console.log(rk_cantidadPersonas);
		}



// console.log("<?php echo $programa = $_REQUEST['programa']; ?>")
	// console.log("<?php echo $origen = $_REQUEST['origen']; ?>");
	// console.log("<?php echo $destino = $_REQUEST['destino']; ?>");
	// console.log("<?php echo $idPrograma = $_REQUEST['idPrograma']; ?>");
	// console.log("<?php echo $fechaViaje = $_REQUEST['fechaViaje']; ?>");
	// console.log("<?php echo $fechaRetorno = $_REQUEST['fechaRetorno']; ?>");
	// console.log("<?php echo $paqueteCuscoHidroElectrica = $_REQUEST['paqueteCuscoHidroElectrica']; ?>");
	// console.log("<?php echo $paqueteNro = $_REQUEST['paqueteNro']; ?>");	
	//console.log("<?php echo $rk_precio =$_REQUEST['rk_precio']; ?>");
	// $("#fechaViaje").val("<?php echo $fechaViaje = $_REQUEST['fechaViaje']; ?>");
	// $("#fechaRetorno").val("<?php echo $fechaRetorno = $_REQUEST['fechaRetorno']; ?>");

	$("#destino").val("<?php echo $destino = $_REQUEST['destino']; ?>");
	$("#origen").val("<?php echo $origen = $_REQUEST['origen']; ?>");
	
	let rk_dataOrigen = $("select#origen option:selected");
	let rk_dataDestino = $("select#destino option:selected");

	$(".origen-data").html("<div><b>Terminal</b>:  "+ rk_dataOrigen.attr("terminal") +" </div><div><b>Salida</b> "+rk_dataOrigen.attr("salida")+"</div>");
	$(".destino-data").html("<div><b>Terminal</b>:  "+rk_dataDestino.attr("terminal")+" </div><div><b>Llegada</b> "+ rk_dataDestino.attr("llegada")+"</div>");

	

	$(".r_destino-data").html("<div><b>Terminal</b>:  "+ rk_dataOrigen.attr("terminal") +" </div><div><b>Salida</b> "+rk_dataOrigen.attr("salida")+"</div>");
	$(".r_origen-data").html("<div><b>Terminal</b>:  "+rk_dataDestino.attr("terminal")+" </div><div><b>Llegada</b> "+ rk_dataDestino.attr("llegada")+"</div>");

	let rk_rOrigen = $("#destino").find("option:selected");
	let rk_rDestino = $("#origen").find("option:selected");	

	$("#r_origen").html(rk_rOrigen.text());
	$("#r_destino").html(rk_rDestino.text());
	
	
	if (paqueteCH == 1){
		$("#fechaViaje").val(rk_dateTimeNow).attr('value', rk_dateTimeNow);
		$("#fechaRetorno").val(rk_dateTimeOneDay).attr('value', rk_dateTimeOneDay);
		$("#destino").val("Cusco").attr("disabled","disabled");
		$("#origen").val("Hidroelectrica").attr("disabled","disabled");
		let rk_dataOrigen = $("select#origen option:selected");
		let rk_dataDestino = $("select#destino option:selected");
		let rk_precioCH = "<?php echo $rk_precio =$_REQUEST['rk_precio']; ?>";



		$(".origen-data").html("<div><b>Terminal</b>:  "+ rk_dataOrigen.attr("terminal") +" </div><div><b>Salida</b> "+rk_dataOrigen.attr("salida")+"</div>");
		$(".destino-data").html("<div><b>Terminal</b>:  "+rk_dataDestino.attr("terminal")+" </div><div><b>Llegada</b> "+ rk_dataDestino.attr("llegada")+"</div>");

		

		$(".r_destino-data").html("<div><b>Terminal</b>:  "+ rk_dataOrigen.attr("terminal") +" </div><div><b>Salida</b> "+rk_dataOrigen.attr("salida")+"</div>");
		$(".r_origen-data").html("<div><b>Terminal</b>:  "+rk_dataDestino.attr("terminal")+" </div><div><b>Llegada</b> "+ rk_dataDestino.attr("llegada")+"</div>");

		let rk_rOrigen = $("#destino").find("option:selected");
		let rk_rDestino = $("#origen").find("option:selected");	

		$("#r_origen").html(rk_rOrigen.text());
		$("#r_destino").html(rk_rDestino.text());


		// if (rk_cantidadPersonas == 2 ) {
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// }else if(rk_cantidadPersonas == 3){
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 		
		// }else if(rk_cantidadPersonas == 4){
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// }else if(rk_cantidadPersonas == 5){
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros");	
		// }else if(rk_cantidadPersonas == 6){
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 			
		// 	$(".personalData").clone().appendTo(".pasajeros"); 
		// }

		
	}
