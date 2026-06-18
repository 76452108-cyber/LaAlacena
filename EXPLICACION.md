# Memoria y Explicación del Proyecto - La Alacena

Este documento sirve como manual explicativo y sustentación del desarrollo de los requerimientos implementados en la plataforma **La Alacena**. El objetivo de estos cambios ha sido cumplir de forma íntegra con las consignas del prototipo y con los criterios de la rúbrica de evaluación, centrándonos en el diseño y la interacción sin alterar la base de datos.

---

## 1. Cambios y Adiciones Realizadas

Se han desarrollado e integrado los siguientes componentes en el proyecto:

### A. Pie de Página Semántico (Footer)
* **Archivo Creado:** `resources/views/layouts/footer.blade.php`
* **Descripción:** Se diseñó un pie de página usando la etiqueta HTML5 semántica `<footer>` y Tailwind CSS, adaptándose automáticamente a dispositivos móviles y de escritorio.
* **Justificación de Rúbricas:**
  * **Criterio 7.2 (Bien Común):** Describe claramente la misión del proyecto para mitigar el desperdicio de comida y apoyar el bienestar social en Arequipa.
  * **Criterio 7.3 (Propiedad Intelectual):** Detalla los créditos, tecnologías utilizadas (Laravel, Tailwind CSS, Alpine.js, Google Fonts) y su licenciamiento libre respectivo para reconocer las fuentes de terceros.

### B. Interfaz del Restaurante ("Añadir Producto" con Tailwind CSS)
* **Archivo Modificado:** `resources/views/restaurante/restaurante.blade.php`
* **Descripción:** Rediseño completo y estético del formulario de registro de productos con **Tailwind CSS**. Esto permite que cuando un usuario con rol `"restaurante"` acceda a la plataforma, cuente con una interfaz optimizada, limpia y moderna para añadir productos.
* **Integración:** Se incluyó el pie de página semántico en la base del formulario y se enlazó con la lógica de validación interactiva.

### C. Validación de Formularios con JavaScript
* **Archivo Creado:** `public/js/validation.js`
* **Descripción:** Script en JavaScript que intercepta la acción de envío del formulario de registro de productos para verificar del lado del cliente:
  * Que ningún campo esté vacío.
  * Que el precio sea estrictamente positivo (mayor a S/ 0).
  * Que el stock no sea un número negativo.
* **Resultado:** Se muestra un mensaje de error y el input correspondiente se bordea de rojo dinámicamente si no cumple con las reglas, previniendo el envío al servidor y mejorando la interactividad.

---

## 2. Guía de Pruebas y Verificación

Para demostrar el funcionamiento del prototipo al evaluador, realiza los siguientes pasos:

### Paso 1: Visualización del Footer
1. Desplázate al fondo de la página de inicio (`/`) o del formulario de restaurante (`/restaurante`).
2. Verifica la presencia del bloque oscuro (Footer) con la descripción social y la lista formal de créditos que respeta los derechos de autor de las tecnologías utilizadas.

### Paso 2: Interfaz de Añadir Producto y Validación JavaScript
1. Inicia sesión con una cuenta del rol `restaurante`.
2. Ve a la sección **Añadir producto** (ruta `/restaurante`).
3. Comprueba el formulario estructurado en tarjetas con Tailwind CSS.
4. Intenta guardar el producto con un precio negativo (ej. `-2`) o stock negativo (ej. `-5`).
5. Comprueba que el script de JavaScript detiene el envío, aplica un borde rojo al input y despliega el mensaje de alerta debajo del campo dinámicamente.
6. Corrige los datos con valores válidos y comprueba que se permite el envío con normalidad.
