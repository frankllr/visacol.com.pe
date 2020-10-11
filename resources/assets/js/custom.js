// function init() {

//     $('#formulario').on("submit", function(e) {
//         emailConnection(e);
//     });

//     $('#phone').keypress(function(e) {
//         key = e.keyCode || e.which;
//         teclado = String.fromCharCode(key);
//         numeros = "0123456789";
//         especiales = "8-37-38-46";
//         teclado_especial = false;

//         for (var i in especiales) {
//             if (key == especiales[i]) {
//                 teclado_especial = true;
//             }
//         }

//         if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
//             return false;
//         }
//     });
// }

// function emailConnection(e) {
//     e.preventDefault();
//     $("#btnSend").prop("disable", true);
//     $.ajax({
//         url: "php/email.php",
//         data: {
//             'full-name': $('#full-name').val(),
//             'email': $('#email').val(),
//             'phone': $('#phone').val(),
//             'department': $('#department').val(),
//             'message': $('#message').val()
//         },
//         success: function(response) {
//             //window.location.href = "index.html";
//             console.log(response);
//         }

//     });
//     limpiar();
// }

const formulario = document.getElementById('formulario');
const btnSend = document.getElementById('btnSend');
const action = formulario.getAttribute('action');

btnSend.addEventListener('click', function(e) {
    e.preventDefault();
    enviarMail();
});

function enviarMail() {
    let form_datos = new FormData(formulario);

    for ([key, value] of form_datos.entries()) {
        console.log(key + ": " + value);
    }

    let xhr = new XMLHttpRequest();
    xhr.open('POST', action, true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let resultado = xhr.responseText;
            console.log("resultado: " + resultado);
            let json = JSON.parse(resultado);
        } else {
            console.log("error de envio");
        }
        xhr.send(form_datos);
    }
    console.log(xhr);
}



// function limpiar() {
//     $("#full-name").val("");
//     $("#email").val("");
//     $("#phone").val("");
//     $("#department").val("");
//     $("#message").val("");
// }

// init();