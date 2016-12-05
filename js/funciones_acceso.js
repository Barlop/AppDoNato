$(document).ready(function(){
	// CONFIGURACION FILE="INPUT"
	$("#input").fileinput({
		language: "es",
		showUpload: false,
		maxFileSize: 250,
		allowedFileExtensions: ["jpg"],
		browseLabel: "&nbsp;&nbsp;Elejir logo",
		removeLabel: "&nbsp;Quitar",
		maxFileCount: 1,
		mainClass: "input-group-sm"
	});

	// SOLO MAYUSCULAS EN FORMULARIOS
	$(":text,select").on('input', function(evt) {
		var input = $(this);
		var start = input[0].selectionStart;
		$(this).val(function (_, val) {
			return val.toUpperCase();
		});
		input[0].selectionStart = input[0].selectionEnd = start;
	});

	// SOLO MINUSCULAS EN CAMPOS EMAIL
	$("input[type=email]").on('input', function(evt) {
		var input = $(this);
		var start = input[0].selectionStart;
		$(this).val(function (_, val) {
			return val.toLowerCase();
		});
		input[0].selectionStart = input[0].selectionEnd = start;
	});
});


// FUNCION LLENA COMBOS
function ajaxCombos(url, datos, hijo){
	var rooturl = $("#rooturl").val();
	$.ajax({
		async:true,
		type: "POST",
		dataType: "html",
		contentType: "application/x-www-form-urlencoded",
		data: datos,
		url:rooturl + 'code/ajax/' + url,
		/*beforeSend:function(){
		},*/
		success: function(data) {
			$("#" + hijo + " option").remove();
			$("#" + hijo).append(data);
		},
		timeout:50000
	});
}

// LLENA MUNUCIPIOS
function llena_municipios(select){
	var id = $(select).find("option:selected").val();
	var selectHijo = "municipio";
	var urlAjax = "llena_combos.php";
	var envio_datos = 'id=' + id + '&caso=1';  // Se arma la variable de datos que procesara el php
	ajaxCombos(urlAjax, envio_datos, selectHijo);
}
function llena_localidades(select){
	var id = $(select).find("option:selected").val();
	var selectHijo = "localidad";
	var urlAjax = "llena_combos.php";
	var envio_datos = 'id=' + id + '&caso=2';  // Se arma la variable de datos que procesara el php
	ajaxCombos(urlAjax, envio_datos, selectHijo);
}