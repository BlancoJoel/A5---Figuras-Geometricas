document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los inputs numéricos y de texto del formulario
    const inputs = document.querySelectorAll('input[type="number"], input[type="text"]');
    // Añade evento blur para validar cada campo al perder el foco
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validarCampo(input);
        });
    });

    // Validación al enviar el formulario
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            let valido = true;
            // Valida todos los campos antes de enviar
            inputs.forEach(input => {
                if (!validarCampo(input)) {
                    valido = false;
                }
            });
            // Si algún campo no es válido, evita el envío
            if (!valido) {
                e.preventDefault();
            }
        });
    }

    /**
     * Valida un campo individual según su tipo
     * - Para números: obligatorio, mayor que cero, máximo dos decimales
     * - Para texto: obligatorio
     */
    function validarCampo(input) {
        let valor = input.value.trim();
        let errorMsg = '';
        // Validación específica para cada campo
        if (input.type === 'number') {
            if (valor === '') {
                errorMsg = 'Este campo es obligatorio.';
            } else if (isNaN(valor) || Number(valor) <= 0) {
                errorMsg = 'Introduce un número mayor que cero.';
            } else if (!/^\d+(\.\d{1,2})?$/.test(valor)) {
                errorMsg = 'Solo se permiten números positivos con hasta dos decimales.';
            }
        } else if (input.type === 'text') {
            if (valor === '') {
                errorMsg = 'Este campo es obligatorio.';
            }
        }
        // Muestra el mensaje de error si existe
        mostrarError(input, errorMsg);
        // Devuelve true si el campo es válido
        return errorMsg === '';
    }

    /**
     * Muestra o borra el mensaje de error debajo del campo
     */
    function mostrarError(input, mensaje) {
        let errorElem = input.nextElementSibling;
        // Si no existe el elemento de error, lo crea
        if (!errorElem || !errorElem.classList.contains('error-msg')) {
            errorElem = document.createElement('div');
            errorElem.className = 'error-msg';
            errorElem.style.color = 'red';
            errorElem.style.fontSize = '0.9em';
            input.parentNode.insertBefore(errorElem, input.nextSibling);
        }
        // Actualiza el texto del mensaje de error
        errorElem.textContent = mensaje;
        // Si no hay mensaje, lo borra
        if (mensaje === '') {
            errorElem.textContent = '';
        }
    }
});
