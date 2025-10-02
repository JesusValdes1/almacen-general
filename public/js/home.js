$(document).ready(function() {
	// Configuracion del Header en las llamadas Ajax
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('input[name="_token"]').val()
	    }
	});
});

// Guardar el almacen
$( "#btnGuardar" ).click(function(event) {

    let btnGuardar = this;
    let elementErrorValidacion = ('.error-validacion');
    let formData = new FormData(document.getElementById("form_usuario"));

    $.ajax({
        url: `/usuarios`,
        method: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function() {
            loading();
            $(btnGuardar).prop('disabled', true);
            $(elementErrorValidacion).addClass("d-none");
        }
    })
    .done(function(respuesta) {
        if ( respuesta.error ) {
            elementErrorValidacion.innerHTML = respuesta.errorMessage;
            $(elementErrorValidacion).removeClass("d-none");
            return;
        }
    })
    .fail(function(error) {
        // console.log("*** Error ***");
        // console.log(error);
        // console.log(error.responseText);
        // console.log(error.responseJSON);
        // console.log(error.responseJSON.message);

        if ( error.responseJSON.hasOwnProperty('errors') ) {
            let errorMessage = Object.values(error.responseJSON.errors).map(function(msg) {
                return `<li>${msg[0]}</li>`;
            }).join('');

            elementErrorValidacion.innerHTML = `<ul class="mb-0">${errorMessage}</ul>`;
        } else elementErrorValidacion.innerHTML = error.responseJSON.message;
        $(elementErrorValidacion).removeClass("d-none");
    })
    .always(function() {
        stopLoading();
        $(btnGuardar).prop('disabled', false);
    });
});