{include file="_header.tpl"}
<input type="hidden" id="rooturl" value="{$rooturl}">
<br><br>
<div class="container">
	<div class="alert alert-danger alertas text-center">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<span>
			<strong>El usuario o la contraseña no son válidos, favor de verificarlo</strong>
		</span>
	</div>
</div>
<div class="container-fluid vcenter">
	<div class="form-group">
		<input type="text" id="usuario" class="form-control input-lg" placeholder="Usuario">
	</div>
	<div class="form-group">
		<input type="password" id="password" class="form-control input-lg" placeholder="Contraseña">
	</div>
	<div class="form-group">
		<button type="button" id="entrar">
			Iniciar sesión	
		</button>
	</div>
</div>

<script>
	function muestraReloj(){
		var fechaHora = new Date();
		var horas = fechaHora.getHours();
		var minutos = fechaHora.getMinutes();
		var segundos = fechaHora.getSeconds();

		var sufijo = ' am';
		if(horas > 12) {
			horas = horas - 12;
			sufijo = ' pm';
		}

		if(horas < 10) { horas = '0' + horas; }
		if(minutos < 10) { minutos = '0' + minutos; }
		if(segundos < 10) { segundos = '0' + segundos; }

		document.getElementById("reloj").innerHTML = horas+':'+minutos+':'+segundos+sufijo;	
	}
	window.onload = function() {
		setInterval(muestraReloj, 1000);
	}
</script>

<div id="titulo">
	<h5>Departamento de vinculación</h5>
	<h6>TESCHA</h6>
	<div id="reloj" />
</div>

