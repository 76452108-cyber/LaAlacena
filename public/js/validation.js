/**
 * Script de validación de formularios interactivo del lado del cliente
 * Cumple con la consigna: "Formularios con validación JavaScript"
 */

document.addEventListener("DOMContentLoaded", () => {
    
    // ----------------------------------------------------
    // 1. VALIDACIÓN DEL FORMULARIO DE PRODUCTOS
    // ----------------------------------------------------
    const productForm = document.getElementById("productForm");
    if (productForm) {
        productForm.addEventListener("submit", (event) => {
            let isValid = true;

            // Obtener campos
            const nombre = document.getElementById("nombre");
            const descripcion = document.getElementById("descripcion");
            const precio = document.getElementById("precio");
            const stock = document.getElementById("stock");

            // Limpiar errores previos
            clearErrors();

            // Validar Nombre (mínimo 3 caracteres)
            if (!nombre.value.trim() || nombre.value.trim().length < 3) {
                showError(nombre, "El nombre del producto debe tener al menos 3 caracteres.");
                isValid = false;
            }

            // Validar Descripción (mínimo 10 caracteres)
            if (!descripcion.value.trim() || descripcion.value.trim().length < 10) {
                showError(descripcion, "La descripción del producto debe tener al menos 10 caracteres.");
                isValid = false;
            }

            // Validar Precio (Debe ser mayor que 0)
            if (!precio.value || parseFloat(precio.value) <= 0) {
                showError(precio, "El precio debe ser un número positivo mayor que S/ 0.00.");
                isValid = false;
            }

            // Validar Stock (Debe ser un número entero mayor o igual a 0)
            if (stock.value === "" || parseInt(stock.value) < 0) {
                showError(stock, "El stock no puede ser un número negativo.");
                isValid = false;
            }

            // Si hay algún error, evitar el envío del formulario
            if (!isValid) {
                event.preventDefault();
            }
        });
    }

    // ----------------------------------------------------
    // 2. VALIDACIÓN DEL FORMULARIO DE EDICIÓN DE USUARIOS
    // ----------------------------------------------------
    const userEditForm = document.getElementById("userEditForm");
    if (userEditForm) {
        userEditForm.addEventListener("submit", (event) => {
            let isValid = true;

            // Obtener campos
            const name = document.getElementById("name");
            const email = document.getElementById("email");
            const rol = document.getElementById("rol");

            // Limpiar errores previos
            clearErrors();

            // Validar Nombre Completo (mínimo 4 caracteres)
            if (!name.value.trim() || name.value.trim().length < 4) {
                showError(name, "El nombre completo debe tener al menos 4 caracteres.");
                isValid = false;
            }

            // Validar Correo Electrónico (Regex estándar de email)
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
                showError(email, "Por favor, introduce una dirección de correo electrónico válida.");
                isValid = false;
            }

            // Validar Rol (Que no esté vacío)
            if (!rol.value) {
                showError(rol, "Debes seleccionar un rol de usuario.");
                isValid = false;
            }

            // Si hay algún error, evitar el envío del formulario
            if (!isValid) {
                event.preventDefault();
            }
        });
    }

    // ----------------------------------------------------
    // FUNCIONES AUXILIARES DE MENSAJES DE ERROR
    // ----------------------------------------------------

    // Mostrar mensaje de error dinámico debajo del campo y estilizar borde
    function showError(inputElement, message) {
        // Cambiar borde a rojo
        inputElement.classList.add("border-red-500", "focus:ring-red-500");
        inputElement.classList.remove("border-gray-300", "focus:ring-green-500");

        // Buscar el contenedor de error asociado por ID
        const errorSpan = document.getElementById(`error-${inputElement.id}`);
        if (errorSpan) {
            errorSpan.textContent = message;
            errorSpan.classList.remove("hidden");
        }
    }

    // Limpiar todas las clases de error e inputs al re-evaluar
    function clearErrors() {
        const errorMessages = document.querySelectorAll(".error-msg");
        errorMessages.forEach((msg) => {
            msg.textContent = "";
            msg.classList.add("hidden");
        });

        const inputs = document.querySelectorAll("input, textarea, select");
        inputs.forEach((input) => {
            input.classList.remove("border-red-500", "focus:ring-red-500");
            input.classList.add("border-gray-300");
        });
    }

});
