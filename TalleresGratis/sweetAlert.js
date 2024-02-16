function registroCorrectamente() {
    Swal.fire({
        title: "¡Registro Exitoso!",
        text: "Su Peke se registró correctamente. 🚀",
        icon: "success",
        footer: '<strong>Toda la info y link de ZOOM la revisirás por WhatsApp +51 963-245-070 </strong>',
        didClose: () => {
            // Redirigir a una página específica cuando se cierra el SweetAlert
            window.location.href = "https://pekesplanet.com/";
        }
    });
}

function registroErroneo(errorText) {
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: errorText,
        footer: '<a href="#">Tienes error en el registro? Coméntanos por WhatsApp +51 963-245-070</a>'
    });
}

// Función para validar que solo se ingresen números
function validarNumero(input) {
    // Eliminar caracteres no numéricos
    let soloNumeros = input.value.replace(/[^0-9]/g, '');

    // Truncar a 9 dígitos
    input.value = soloNumeros.substring(0, 9);
}

// Función para validar que solo se ingresen letras
function validarTexto(input) {
    input.value = input.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚüÜ\s]/g, '');
}

console.log("ssss")