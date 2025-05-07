// Espera a que todo el contenido del DOM esté cargado antes de ejecutar el código
window.addEventListener("DOMContentLoaded", function () {
    // 1. Mostrar u ocultar la contraseña
    const checkboxMostrar = document.getElementById("mostrarContraseña");
    const inputPassword = document.getElementById("contraseña");

    if (checkboxMostrar && inputPassword) {
        checkboxMostrar.addEventListener("change", function () {
            // Cambia el tipo del input entre "password" y "text"
            inputPassword.type = this.checked ? "text" : "password";
        });
    }

    // 2. Validación básica del correo electrónico al enviar el formulario
    const formulario = document.querySelector("form");

    if (formulario) {
        formulario.addEventListener("submit", function (e) {
            const inputCorreo = document.getElementById("correo");
            const correo = inputCorreo.value;
            const patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Si el formato del correo no es válido, evita que se envíe el formulario
            if (!patronCorreo.test(correo)) {
                e.preventDefault();
                alert("Por favor ingresa un correo válido.");
                return;
            }

            // 3. Guardar el correo en localStorage para futuros autocompletados
            localStorage.setItem("correoRecordado", correo);
        });

        // 4. Al cargar la página, si hay un correo guardado, autocompletar el campo
        const correoGuardado = localStorage.getItem("correoRecordado");
        if (correoGuardado) {
            const inputCorreo = document.getElementById("correo");
            inputCorreo.value = correoGuardado;
        }
    }
});
