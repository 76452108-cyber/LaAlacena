/**
 * Script de validación de formularios interactivo del lado del cliente
 * Optimizado para mitigar la Complejidad Cognitiva en SonarQube
 */

document.addEventListener("DOMContentLoaded", () => {
    initProductForm();
    initUserEditForm();
});

// ----------------------------------------------------
// 1. FORMULARIO DE PRODUCTOS
// ----------------------------------------------------
function initProductForm() {
    const productForm = document.getElementById("productForm");
    if (!productForm) return;

    productForm.addEventListener("submit", (event) => {
        clearErrors();

        const validations = [
            validateProductName(),
            validateProductDescription(),
            validateProductPrice(),
            validateProductStock()
        ];

        // Si alguna validación devuelve 'false', cancelamos el envío
        if (validations.includes(false)) {
            event.preventDefault();
        }
    });
}

function validateProductName() {
    const nombre = document.getElementById("nombre");
    if (!nombre.value.trim() || nombre.value.trim().length < 3) {
        showError(nombre, "El nombre del producto debe tener al menos 3 caracteres.");
        return false;
    }
    return true;
}

function validateProductDescription() {
    const descripcion = document.getElementById("descripcion");
    if (!descripcion.value.trim() || descripcion.value.trim().length < 10) {
        showError(descripcion, "La descripción del producto debe tener al menos 10 caracteres.");
        return false;
    }
    return true;
}

function validateProductPrice() {
    const precio = document.getElementById("precio");
    if (!precio.value || parseFloat(precio.value) <= 0) {
        showError(precio, "El precio debe ser un número positivo mayor que S/ 0.00.");
        return false;
    }
    return true;
}

function validateProductStock() {
    const stock = document.getElementById("stock");
    if (stock.value === "" || parseInt(stock.value, 10) < 0) {
        showError(stock, "El stock no puede ser un número negativo.");
        return false;
    }
    return true;
}

// ----------------------------------------------------
// 2. FORMULARIO DE EDICIÓN DE USUARIOS
// ----------------------------------------------------
function initUserEditForm() {
    const userEditForm = document.getElementById("userEditForm");
    if (!userEditForm) return;

    userEditForm.addEventListener("submit", (event) => {
        clearErrors();

        const validations = [
            validateUserName(),
            validateUserEmail(),
            validateUserRol()
        ];

        if (validations.includes(false)) {
            event.preventDefault();
        }
    });
}

function validateUserName() {
    const name = document.getElementById("name");
    if (!name.value.trim() || name.value.trim().length < 4) {
        showError(name, "El nombre completo debe tener al menos 4 caracteres.");
        return false;
    }
    return true;
}

function validateUserEmail() {
    const email = document.getElementById("email");
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.value.trim() || !emailRegex.test(email.value.trim())) {
        showError(email, "Por favor, introduce una dirección de correo electrónico válida.");
        return false;
    }
    return true;
}

function validateUserRol() {
    const rol = document.getElementById("rol");
    if (!rol.value) {
        showError(rol, "Debes seleccionar un rol de usuario.");
        return false;
    }
    return true;
}

// ----------------------------------------------------
// FUNCIONES AUXILIARES DE MENSAJES DE ERROR
// ----------------------------------------------------
function showError(inputElement, message) {
    inputElement.classList.add("border-red-500", "focus:ring-red-500");
    inputElement.classList.remove("border-gray-300", "focus:ring-green-500");

    const errorSpan = document.getElementById(`error-${inputElement.id}`);
    if (errorSpan) {
        errorSpan.textContent = message;
        errorSpan.classList.remove("hidden");
    }
}

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
