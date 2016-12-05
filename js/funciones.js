//////////////////// ROOTURL //////////////
var rooturl = $("#rooturl").val(); ////////
///////////////////////////////////////////

$(document).ready(function(){
	$("#usuario").focus();
	$("#entrar").on("click", function(){
		enviar();
	});
	$("#usuario, #password").keypress(function(e){
		if (e.which == 13) {
			enviar();
		}
	});
	$(":text, input[type=email], input[type=number], input[type=password]").on("input change", function() {
		if ($(this).val() != "") {
			$(this).parent().removeClass("has-error");
		}
	});
});

/////////////// FUNCION VALIDAR USUARIO /////
function enviar() {
	var rooturl = $("#rooturl").val();
	$("#usuario, #password").parent().removeClass("has-error");
	$(".alertas").fadeOut();
	var usuario = $("#usuario").val();
	var password = $("#password").val();

	if (usuario == "" && password == "") {
		if (usuario == "") {
			$("#usuario").parent().addClass("has-error");
			$("#usuario").focus();
		}
		if (password == "") {
			$("#password").parent().addClass("has-error");
		}
		return false;
	}

	if (usuario == "" || password == "") {
		if (usuario == "") {
			$("#usuario").parent().addClass("has-error");
			$("#usuario").focus();
		}
		if (password == "") {
			$("#password").parent().addClass("has-error");
			$("#password").focus();
		}
		return false;
	}
	var datos = 'usuario=' + usuario + '&password=' + password;
	$.ajax({
		async: true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		data: datos,
		url:rooturl + 'code/ajax/validaAdministrador.php',
		beforeSend:function(){
			$("#entrar").html('Validando usuario...');
		},
		success: function(respuesta) {
			if (respuesta == "malLogin") {
				$("#entrar").html("Entrar");
				$(".alertas").fadeIn();
			}
			if (respuesta == "okAdministrador") {
				window.location.href = rooturl + '_acceso/';
			}
		},
		timeout:5000000
	});
}