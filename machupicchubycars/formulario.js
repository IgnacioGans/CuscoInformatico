var enviarCorreo = '';
$(document).on("ready", function(){

	$(window).scroll(function(){
	    var wtop = $(window).scrollTop()
	    var $menu = $("nav.menu")
	    $('.menuWrap').css('height', $menu.outerHeight())
	    try{
	    	if((wtop)>=$('.menuWrap').offset().top){
	    	  $menu.addClass('title-top')
	    	}
	    	else{
	    	  $menu.removeClass('title-top')
	    	}
	    }catch(err){
	    	return false;
	    }
	    
  	});

	var programa="";
	var pasajeros="";
	var idPrograma="";
	var consulta = "";

    var fecha = new Date();

	var dia=fecha.getDate();
	var mes=fecha.getMonth()+1;
	var anio=fecha.getFullYear();

	$("#tripDate").val(dia + "/" + mes + "/" + anio);
	$("#returnDate").val((dia+1) + "/" + mes + "/" + anio);
	
	$('#fechaViaje').datepicker({
		format: 'dd/mm/yyyy',
		autoclose:true,
		
	})

	$('#fechaRetorno').datepicker({
		 format: 'dd/mm/yyyy',
		autoclose:true,	
	})
	
	$(".payment .form-item",this).find("input").on("click",function(e){
		
		$(".payment").find("label").css({"border-bottom":"1px dotted #fff"});
		
		if($(this).is(":checked")){
			$(this).next().css({"border-bottom":"1px dotted #666"});
		}
		
	})

	/*--------Validaciones--------*/
	//validacion origen destino
	$("#destino").find("option[data=origen]").hide();
	$("#origen").on("change",function(){
		let $origenSelect = $(this).find("option:selected");
		if($origenSelect.attr('data')=="origen"){
			$("#destino").find("option[data=origen]").hide();
			$("#destino").find("option[data=destino]").show();
			$("#destino").find("option[data=destino]:eq(0)").prop("selected","selected");
		}
		else if($origenSelect.attr('data')=="destino"){
			$("#destino").find("option[data=destino]").hide();
			$("#destino").find("option[data=origen]").show();
			$("#destino").find("option[data=origen]:eq(0)").prop("selected","selected");
		}
		// <div><b>Terminal</b>: Plaza de Armas (MacDonals)</div><div><b>Salida</b>: 7:30am</div>
		$(".origen-data").html("<div><b>Terminal</b>:  "+$origenSelect.attr('terminal')+" </div><div><b>Salida</b> "+$origenSelect.attr('salida')+"</div>");
		$(".destino-data").html("<div><b>Terminal</b>:  "+$("#destino").find("option:selected").attr("terminal")+" </div><div><b>Llegada</b> "+$("#destino").find("option:selected").attr("llegada")+"</div>");
		let rk_rOrigen = $("#destino").find("option:selected");
	  	let rk_rDestino = $("#origen").find("option:selected");
	  	let rk_rOrigen_data = $(".origen-data").clone();
	  	let rk_rDestino_data = $(".destino-data").clone();

	  	$("#r_origen").html(rk_rOrigen.text());
	  	$("#r_destino").html(rk_rDestino.text());
	  	$(".r_origen-data").html(rk_rDestino_data.children());
	  	$(".r_destino-data").html(rk_rOrigen_data.children());
	})
	$("#destino").on("change", function(){
		let $destinoSelect = $(this).find("option:selected");
		$(".destino-data").html("<div><b>Terminal</b>:  "+$destinoSelect.attr("terminal")+" </div><div><b>Llegada</b>: "+$destinoSelect.attr('llegada')+"</div>");

		let rk_rOrigen = $("#destino").find("option:selected");
		let rk_rOrigen_data = $(".destino-data").clone();
		$("#r_origen").html(rk_rOrigen.text());
	  	$(".r_origen-data").html(rk_rOrigen_data.children());	  	
	})

	// //validacion Viaje retorno o regreso



	// $("#r_destino").find("option[data=r_origen]").hide();
	// $("#r_origen").on("change",function(){
	// 	let $r_origenSelect = $(this).find("option:selected");
	// 	if($r_origenSelect.attr('data')=="r_origen"){
	// 		$("#r_destino").find("option[data=r_origen]").hide();
	// 		$("#r_destino").find("option[data=r_destino]").show();
	// 		$("#r_destino").find("option[data=r_destino]:eq(0)").prop("selected","selected");
	// 	}
	// 	else if($r_origenSelect.attr('data')=="r_destino"){
	// 		$("#r_destino").find("option[data=r_destino]").hide();
	// 		$("#r_destino").find("option[data=r_origen]").show();
	// 		$("#r_destino").find("option[data=r_origen]:eq(0)").prop("selected","selected");
	// 	}
	// 	// <div><b>Terminal</b>: Plaza de Armas (MacDonals)</div><div><b>Salida</b>: 7:30am</div>
	// 	$(".r_origen-data").html("<div><b>Terminal</b>:  "+$r_origenSelect.attr('terminal')+" </div><div><b>Salida</b> "+$r_origenSelect.attr('salida')+"</div>");
	// 	$(".r_destino-data").html("<div><b>Terminal</b>:  "+$("#r_destino").find("option:selected").attr("terminal")+" </div><div><b>Llegada</b> "+$("#r_destino").find("option:selected").attr("llegada")+"</div>");
	// })
	// $("#destino").on("change", function(){
	// 	let $destinoSelect = $(this).find("option:selected");
	// 	$(".destino-data").html("<div><b>Terminal</b>:  "+$destinoSelect.attr("terminal")+" </div><div><b>Llegada</b>: "+$destinoSelect.attr('llegada')+"</div>");
	// })
	//---------------------------------------------//
	var tipoViaje=$("input[name=tripType]:checked");
	var origen=$("#origen");
	var fechaViaje=$("#fechaViaje");
	
	var destino=$("#destino");
	var fechaRetorno=$("#fechaRetorno");

	var childrenNum=$("#cantidad");
	var adultNum=$("#cantidad");

	/*conrol idprograma boletos*/
	$("input[name=programa]", this).on("click", function(){
		$("input[name=idPrograma]").val($(this).attr('data'));
		if($(this).attr('id')=="idaVuelta"){
			$("#fechaViaje, .fechaViaje").css("visibility","visible");
			$("#fechaRetorno, .fechaRetorno").css("visibility","visible");
		}
		else if($(this).attr('id')=="ida"){
			$("#fechaViaje, .fechaViaje").css("visibility","visible");
			$("#fechaRetorno, .fechaRetorno").css("visibility","hidden");
		}
		else if($(this).attr('id')=="vuelta"){
			$("#fechaViaje, .fechaViaje").css("visibility","visible");
			$("#fechaRetorno, .fechaRetorno").css("visibility","hidden");
		}
	})

	$("#tyc").on("click", function(e){
			if($(this).is(":checked"))
			{
				$(".booking").removeAttr("disabled");
			}
			else{
				$(".booking").attr("disabled", "disabled");	
			}
		})

	/*$("input[name=paymentMethod]").on('click', function(){
		if($(this).val()=='western'){
			//$('.messagePayment').slideDown().html("Para reservas con <b>Western Union</b>, debera realizar el pago en cualquier agente de su pais a nombre de: <br>Juan Angel Escriba Casavilca DNI:09414084 <br> <p>Favor de scanear el depósito a ventas@campingtoursperu.com <br> Su confirmación de su servicio será remitido.</p> <p class='text-center'>Oficina: Cusco - Peru</p>");
		}
		if($(this).val()=='creditCard' || $(this).val()=='paypal'){
			//$('.messagePayment').slideUp()
		}
		let $precio = $(this).attr('data')

		/*
		$("input[data=mtotal]")
		.val($precio)
		.next('span').text($precio)

		if(!($('#mount-min').is(":checked")))
		{
			$("#summary-price").text($(this).attr('data'))
		}

		calculoTotal()		
	})*/

	$("input[name=mount]").on("click", function(){
		$("#summary-price").text($(this).val())
		calculoTotal()
	})

	var montoTotal = $("#summary-subtotal").text();
	function calculoTotal(){
		let total = ""
		let precio = $("#summary-price").text()
		let cantidad = $(".personalData").length
		total = Number(precio)*cantidad
		console.log(total)
		$("#summary-cantidad").text(cantidad)
		$("#summary-subtotal").text(total)
		$("#summary-comision").text(total*7/100)
		$("#summary-total").text(Number(total*1.07,2).toFixed(2))

		Culqi.settings({
        	title: 'SAKURA EXPEDITION',
        	currency: 'USD',
        	description: $("#paquete").val(),
        	email: $('.email').eq(0).val(),
        	amount: $("#summary-total").text()*100
       	});
       	
       	$("#montoPaypal").val($("#summary-total").text()*1.07);

       	montoTotal = total;
	}

	$(".booking").on("click", function(e){
		e.preventDefault();

		if($("#fechaViaje").val().length==0){
			$("#fechaViaje").focus().css({"border-color":"red"}).attr("placeholder","Ingrese una fecha Valida");
			return;
		}

		/*if($("#fechaRetorno").val().length==0){
			$("#fechaRetorno").focus().css({"border-color":"red"}).attr("placeholder","Ingrese una fecha Valida");
			return;
		}*/

		if($("#nombres").val().length==0 || $("#nombres").val() <= 0){
			$("#nombres").focus().css({"border-color":"red"});
			return;
		}

		if($("#apellidos").val().length==0){
			$("#apellidos").focus().css({"border-color":"red"});
			return;
		}

		if($("#edad").val().length==0){
			$("#edad").focus().css({"border-color":"red"});
			return;
		}

		if($("#email").val().length==0){
			$("#email").focus().css({"border-color":"red"});
			return;
		}
		
		$(".confirmation").fadeIn(800);
		/*$("body").css("overflow","hidden");*/
		
		idPrograma = $("#idPrograma").val();
		programa = $("#paquete").val();
		consulta = $("#consulta").val();

		vOrigen = $("#vOrigen").text();
		vDestino = $("#vDestino").text();
		

		//Datos de los Pasajeros
        pasajeros = "[";
        $.each($(".personalData"), function(index){
            pasajeros += "{";
            pasajeros += "\"nombres\": \""+$(this).find("#nombres").val()+"\",";                
            pasajeros += "\"apellidos\":\""+$(this).find("#apellidos").val()+"\",";           
            pasajeros += "\"pais\":\""+$(this).find("#pais").val()+"\",";
            pasajeros += "\"edad\":\""+$(this).find("#edad").val()+"\",";
            pasajeros += "\"email\":\""+$(this).find("#email").val()+"\",";
            pasajeros += "\"nropasaporte\":\""+$(this).find("#nropasaporte").val()+"\",";
            pasajeros += "\"celular\":\""+$(this).find("#cell").val()+"\",";
            pasajeros += "\"estudiantes\":\""+$(this).find("#estudiantes:checked").val()+"\"";  
            pasajeros += "},";
        });

        pasajeros = pasajeros.substring(0, pasajeros.length-1);
        pasajeros += "]";       

        if($("input[name=paymentMethod]:checked").val() == 'creditCard')
        {
        	Culqi.open();
            e.preventDefault();
        }
        if($("input[name=paymentMethod]:checked").val() == 'paypal'){
        	console.log("pago con paypal");
        	run_waitMe();
        	enviarCorreo("Se ha Realizado su reserva con PayPal, sera redirigido para procesar su pago");
        	$("#PagoPaypal").submit();
        	//return;

        }
        if($("input[name=paymentMethod]:checked").val() == 'western'){
        	console.log("pago con western");
        	run_waitMe();
        	enviarCorreo("Gracias por su reserva, debera realizar el pago en cualquier agente <b>Western Union</b> de su pais a nombre de: <br>Sakura Expedition <br> <p>Enviar depósito a reservas@sakuraexpedition.com</p> <p class='text-center'>Cusco - Peru</p>");
        	//return;        	
        }    
      }) 

	enviarCorreo = function mailConfirmation(mensaje){
		console.log("preparando el correo "+"id "+idPrograma+"programa"+programa+"mensaje"+mensaje+"fecha"+fechaViaje.val()+" tipo "+tipoViaje.val()+" consulta "+consulta+" pasajeros "+pasajeros);
		$.post("../control", 
			{
				idPrograma: idPrograma, 
				programa:programa, 
				mensaje:mensaje, 
				fechaViaje:fechaViaje.val(), 
				fechaRetorno:fechaRetorno.val(),
				tipoViaje:tipoViaje.val(),
				consulta:consulta,
				pasajeros:pasajeros,
				vOrigen:vOrigen,
				vDestino:vDestino,
				payment:$("input[name=paymentMethod]:checked").val(),
				montoPagado:montoTotal
			},
			function(data){
			console.log(data);
			var respuesta = eval('(' + data + ')');
			if(respuesta.envio=='1'){
				if($("input[name=paymentMethod]:checked").val() == 'western')
				{
					resultdiv('Reserva exitosa',mensaje,'panel-success', true);
				}
				console.log("se ha enviado el correo de confirmacion");
			}
			else
			{
				console.log("error al enviar el correo de confirmacion");
			}
		});
	}
	
	
	//agregando nuesvos pasajeros
	var i=0;
	$(".new-personalData").on("click", function(e){
		e.preventDefault();
		//console.log("clonar formulario "+i);
		$personalData = $(".personalData-"+i).clone();
		$personalData.find(".remove").remove();
		$personalData.find(".npasajero").text("DATOS PASAJERO "+(i+2))
		.after("<a class='remove' title='Eliminar pasajero'  href='javascript:void(0)'><i class='glyphicon glyphicon-remove'></i></a>");
		$personalData.find(".estudiantes").attr("id","estudiantes"+""+(i+2));
		$personalData.find(".estudiantes").siblings('label').attr("for","estudiantes"+""+(i+2));
		$personalData.removeClass().addClass("personalData personalData-"+(i+1));
		/*precios*/
		$("#summary-cantidad").text(i+2);
		var total = (i+2)*$("#mount-total").val();
		var totalMin = (i+2)*$("#summary-priceMin").val();

		$("#summary-subtotal, #summary-total").text(total);
		$(".mountPay-mount-total").find("span").text(total);
		$(".mountPay-mount-min").find("span").text(totalMin);

		/*/precios*/
		$(".personalData-"+i).after($personalData);
		$(".personalData-"+(i+1)).find("form")[0].reset();
		i++;
		//console.log("Element "+i);
		
		$(".remove").off("click");
		$(".remove").on("click", function(e){
			e.preventDefault();
			var res=confirm("Seguro que desea eliminar este pasajero?");
			if (res) {
				  //console.log("remove elemento "+i);
				  $(this).parent().parent().parent().remove();
				  i--;

				  $("#summary-cantidad").text(i+1);
				  var total = (i+1)*$("#mount-total").val();
				  var totalMin = (i+1)*$("#summary-priceMin").val();
				  //console.log("TOTAL: "+total);
				  $("#summary-subtotal, #summary-total").text(total);
				  $(".mountPay-mount-total").find("span").text(total);
				  $(".mountPay-mount-min").find("span").text(totalMin);
				  //console.log("Elemento "+(i+1));
				  recount();
			}
			else
			{
				return;
			}
		});

		calculoTotal();
	});

	/*calculo de descuentos*/
	//$(".estudiantes").off("click");

	function recount(){
        $(".pasajeros").find(".personalData").each(function(index, element){
            $(element).find(".npasajero").text("DATOS PASAJERO "+(index+1));
            $(element).removeClass().addClass("personalData personalData-"+index);
        })
        calculoTotal();
    }
});

