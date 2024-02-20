$(function() {
    // Tu código aquí
    $('#origin').select2({
        tags: true, // Permite añadir etiquetas personalizadas
        width: '100%', // Esto establece el ancho del select2
        // placeholder: 'Buscar o seleccionar opción', // Esto establece el texto del placeholder
        // minimumInputLength: 1, // Esto establece el mínimo de caracteres para empezar a buscar
        dropdownParent: $('body'),
        dropdownCssClass: 'originDiv' // Mostrar el dropdown debajo del input
    });

    $('#destination').select2({
        tags: true,
        width: '100%',
        dropdownParent: $('body'),
        dropdownCssClass: 'destinationDiv' // Agrega la clase destinationDiv al dropdown
    });


});