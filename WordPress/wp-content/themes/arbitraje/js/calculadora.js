$(document).ready(function() {
	$('#enviar').click(function(){
		var lim1=1710;
		var lim2=3400;
		var lim3=17010;
		var monto=$('#monto').val();
		var ut=$('#ut').val();
		var ut_monto=monto/ut; 
		ut_monto=Math.round(ut_monto*1)/1; 
		/*****************Tarifa administrativa****************/
		var adm1=75*ut;
		var adm2=0.01*(lim2-lim1)*ut;
		var adm3=0.0075*(lim3-lim2)*ut;
		var adm4=0.0050*(ut_monto-lim3)*ut;
		var tar_adm=adm1+adm2+adm3+adm4;
		tar_adm=Math.round(tar_adm*100)/100;
		//alert(tar_adm);
		/*****************Honorarios de Árbitros****************/
		var hon1=150*ut;
		var hon2=0.05*(lim2-lim1)*ut;
		var hon3=0.03*(lim3-lim2)*ut;
		var hon4=0.02*(ut_monto-lim3)*ut;
		var hon_arb=hon1+hon2+hon3+hon4;
		hon_arb=Math.round(hon_arb*100)/100;
		//alert(hon_arb);
		/*****************El iva****************/
		var iva=$('#iva').val();
		iva_tar_adm=(tar_adm*iva/100)+tar_adm;
		iva_hon_arb=(hon_arb*iva/100)+hon_arb;
		iva_tar_adm=Math.round(iva_tar_adm*100)/100;
		iva_hon_arb=Math.round(iva_hon_arb*100)/100;
		/*alert(iva_tar_adm);
		alert(iva_hon_arb);*/
		parte_tar_adm=iva_tar_adm/2;
		parte_hon_arb=iva_hon_arb/2;
		total_gen=iva_tar_adm+iva_hon_arb;
		total_parte=total_gen/2;
		parte_tar_adm=Math.round(parte_tar_adm*100)/100;
		parte_hon_arb=Math.round(parte_hon_arb*100)/100;
		total_gen=Math.round(total_gen*100)/100;
		total_parte=Math.round(total_parte*100)/100;
		
		$('.iva').html(iva+"%");
		$('#tar_adm').html(tar_adm);
		$('#iva_tar_adm').html(iva_tar_adm);
		$('#parte_tar_adm').html(parte_tar_adm);
		$('#hon_arb').html(hon_arb);
		$('#iva_hon_arb').html(iva_hon_arb);
		$('#parte_hon_arb').html(parte_hon_arb);
		$('#total_gen').html(total_gen);
		$('#total_parte').html(total_parte);
		$('.tabla_calculadora').css("display","table");
		//alert(total_gen);
		//alert(total_parte);
	});
	
});