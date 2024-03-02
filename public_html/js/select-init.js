$(function() {
    // Tu código aquí
    $('#origin').select2({
        tags: true, // Permite añadir etiquetas personalizadas
        width: '100%', // Esto establece el ancho del select2
        // placeholder: 'Buscar o seleccionar opción', // Esto establece el texto del placeholder
        // minimumInputLength: 1, // Esto establece el mínimo de caracteres para empezar a buscar
        dropdownParent: $('body'),
        dropdownCssClass: 'originDiv' // Mostrar el dropdown debajo del input
    }).on('change', function(e) {
        console.log('aqui');
        const selectedOrigin = e.target.value;
        const destinationSelect = document.getElementById('destination');

        axios.get('/areas', {
            params: {
                origin: selectedOrigin
            }
        })
        .then(function (response) {
            console.log("Áreas de origen y destino");
            console.log(response.data);
            // crear las nuevas opciones del select de destino
            destinationSelect.innerHTML = '';
            response.data.forEach(function (area) {
                // crear el elemento option para el destino
                let destinationOption = document.createElement('option');
                // asignar el valor del área al option
                destinationOption.value = area.id;
                // asignar el nombre del área al option
                destinationOption.text = area.nombre;

                // agregar el option al select de destino
                destinationSelect.appendChild(destinationOption);
            });
        })
        .catch(function (error) {
            console.log(error);
        });
    });

    $('#destination').select2({
        tags: true,
        width: '100%',
        dropdownParent: $('body'),
        dropdownCssClass: 'destinationDiv' // Agrega la clase destinationDiv al dropdown
    });


});