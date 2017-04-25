$(document).ready(inicio);
function inicio() {
    formu();
}

function formu() {
    $("#form").validate({
        focusCleanup: true,
        rules: {
            nombre_usu: {
                
            },
            pass_usu: {
                
            },
            nombre: {
                
            },
            ciudad: {
                
            },
            pass: {
                required: true,
                minlength: 4,
                maxlength: 15
            },
            numero: {
                required: false,
                range: [1, 1000]
            },
            pais: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "<b>requerido</b>",
                minlength: "mínimo 2 letras",
                maxlength: "máximo 20 letras"
            },
            email: {
                required: "<b>requerido</b>",
                email: "formato no valido"
            },
            ciudad: {
                required: "<b>requerido</b>",
                minlength: "mínimo 2 letras",
                maxlength: "máximo 20 letras"
            },
            pass: {
                required: "<b>requerido</b>",
                minlength: "mínimo 4 letras",
                maxlength: "máximo 15 letras"
            },
            numero: {
                range: "Valor entre 1 y 1000"

            },
            pais: {
                required: "<b>requerido</b>"
            }

        }
    });
}


