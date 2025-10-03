$(document).ready(function() {
	// Configuracion del Header en las llamadas Ajax
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('input[name="_token"]').val()
	    }
	});
});

// Guardar el usuario
$( "#btnGuardar" ).click(function(event) {

    let btnGuardar = this;
    let elementErrorValidacion = $('.error-validacion');
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
            elementErrorValidacion.addClass("d-none").html('');
        }
    })
    .done(function(respuesta) {
        if ( respuesta.error ) {
            elementErrorValidacion.html(respuesta.errorMessage).removeClass("d-none");
            return;
        }

        if ( respuesta.usuario) {
            $('#nombre').val('');
            $('#apellidos').val('');
            $('#contrasenia').val('');
        }
    })
    .fail(function(error) {
        if (error.responseJSON && error.responseJSON.errors) {
            let errorMessage = Object.values(error.responseJSON.errors).map(function(msg) {
                return `<li>${msg[0]}</li>`;
            }).join('');
            elementErrorValidacion.html(`<ul class="mb-0">${errorMessage}</ul>`);
        } else {
            elementErrorValidacion.html(error.responseJSON.message);
        }
        elementErrorValidacion.removeClass("d-none");
    })
    .always(function() {
        stopLoading();
        $(btnGuardar).prop('disabled', false);
    });
});

// $("#btnGuardar").click(function() {
//     let btnGuardar = this;
//     let elementErrorValidacion = $('.error-validacion');

//     let data = {
//         nombre: $("#nombre").val(),
//         apellidos: $("#apellidos").val(),
//         contrasenia: $("#contrasenia").val(),
//         estado: $("#estado").val()
//     };

//     $.ajax({
//         url: `/usuarios`,
//         method: 'POST',
//         data: data,
//         dataType: 'json',
//         beforeSend: function() {
//             loading();
//             $(btnGuardar).prop('disabled', true);
//             elementErrorValidacion.addClass("d-none").html('');
//         }
//     })
//     .done(function(respuesta) {
//         if (respuesta.error) {
//             elementErrorValidacion.html(respuesta.errorMessage).removeClass("d-none");
//             return;
//         }

//         if (respuesta.usuario) {
//             $("#nombre").val('');
//             $("#apellidos").val('');
//             $("#contrasenia").val('');
//             $("#estado").val('');
//         }
//     })
//     .fail(function(error) {
//         if (error.responseJSON && error.responseJSON.errors) {
//             let errorMessage = Object.values(error.responseJSON.errors).map(function(msg) {
//                 return `<li>${msg[0]}</li>`;
//             }).join('');
//             elementErrorValidacion.html(`<ul class="mb-0">${errorMessage}</ul>`);
//         } else {
//             elementErrorValidacion.html(error.responseJSON.message);
//         }
//         elementErrorValidacion.removeClass("d-none");
//     })
//     .always(function() {
//         stopLoading();
//         $(btnGuardar).prop('disabled', false);
//     });
// });

// $("#btnGuardar").click(function() {
//     let btnGuardar = this;
//     let elementErrorValidacion = $('.error-validacion');

//     let formData = new FormData();
//     formData.append('nombre', $("#nombre").val());
//     formData.append('apellidos', $("#apellidos").val());
//     formData.append('contrasenia', $("#contrasenia").val());
//     formData.append('estado', $("#estado").val());

//     $.ajax({
//         url: `/usuarios`,
//         method: 'POST',
//         data: formData,
//         contentType: false,
//         processData: false,
//         dataType: 'json',
//         beforeSend: function() {
//             loading();
//             $(btnGuardar).prop('disabled', true);
//             elementErrorValidacion.addClass("d-none").html('');
//         }
//     })
//     .done(function(respuesta) {
//         if (respuesta.error) {
//             elementErrorValidacion.html(respuesta.errorMessage).removeClass("d-none");
//             return;
//         }

//         if (respuesta.usuario) {
//             $("#nombre").val('');
//             $("#apellidos").val('');
//             $("#contrasenia").val('');
//             $("#estado").val('');
//         }
//     })
//     .fail(function(error) {
//         if (error.responseJSON && error.responseJSON.errors) {
//             let errorMessage = Object.values(error.responseJSON.errors).map(function(msg) {
//                 return `<li>${msg[0]}</li>`;
//             }).join('');
//             elementErrorValidacion.html(`<ul class="mb-0">${errorMessage}</ul>`);
//         } else {
//             elementErrorValidacion.html(error.responseJSON.message);
//         }
//         elementErrorValidacion.removeClass("d-none");
//     })
//     .always(function() {
//         stopLoading();
//         $(btnGuardar).prop('disabled', false);
//     });
// });


// Habilitar/Deshabilitar loading
function loading(container = null) {
    if ( !container ) {
        container = document.querySelector('.loadable');
    }
    container.classList.add('d-flex');
    container.classList.remove('d-none');
}

function stopLoading(container = null) {
    if ( !container ) {
        container = document.querySelector('.loadable');
    }
    container.classList.add('d-none');
    container.classList.remove('d-flex');
}