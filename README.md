# CuscoInformatico



Command Stylus: 

  stylus -w -c leading.styl
  
  stylus -w -c bycars.styl
  
  ----------o--------------------
  
 SIDEBAR Sublime Text- Change the font size of text the sidebar.
 
 [
    {
        "class": "sidebar_label",
        "color": [0, 0, 0],
        "font.bold": false,
        "font.size": 12
    },
]

Idioma - Function PHP

< ? php _e("[:es][:en][:de][:fr][:]")  ? >




jQuery 
Tareas #1

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

	  	let rk_rOrigen_data = $(".origen-data");
	  	let rk_rDestino_data = $(".destino-data");

	  	$("#r_origen").html(rk_rOrigen.text());
	  	$("#r_destino").html(rk_rDestino.text());
	  	$(".r_origen-data").html(rk_rDestino_data);
	  	$(".r_destino-data").html(rk_rOrigen_data);

	  	// console.log(rk_rOrigen.text());
	  	// console.log(rk_rDestino.text());
	  	console.log(rk_rOrigen_data.html());
	  	console.log(rk_rDestino_data);

	})
