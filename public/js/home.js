const variableSeccion = {};
//Función para cargar el contenido de la página dependiendo del tipo de viaje
document.addEventListener("DOMContentLoaded", function () {
    const originSelect = document.getElementById('origin');
    const destinationSelect = document.getElementById('destination');
    const tripTypeSelect = document.querySelectorAll('#tripType');
    console.log("Cargando home.js");
    // traer las areas desde el controlador con axios
    /* axios.get('/areas')
        .then(function (response) {
            console.log("Áreas de origen y destino");
            console.log(response.data);

            // recorrer el arreglo de áreas
            response.data.forEach(function (area) {
                // crear el elemento option para el origen
                let originOption = document.createElement('option');
                // asignar el valor del área al option
                originOption.value = area.id;
                // asignar el nombre del área al option
                originOption.text = area.nombre;

                // agregar el option al select de origen
                originSelect.appendChild(originOption);

                // crear el elemento option para el destino
                let destinationOption = document.createElement('option');
                // asignar el valor del área al option
                destinationOption.value = area.id;
                // asignar el nombre del área al option
                destinationOption.text = area.nombre;

                // agregar el option al select de destino
                destinationSelect.appendChild(destinationOption);

                // Deshabilitar "Orlando" en el destino
                if (area.nombre === 'Orlando') {
                    destinationOption.disabled = true;
                }

            });

            // Al cargar la página, establece la opción predeterminada del destino
            destinationSelect.value = "3"; // Asigna el valor correspondiente
        })
        .catch(function (error) {
            console.log(error);
        });
 */


    // Cambio de tipo de viaje
    tripTypeSelect.forEach(function (tripType) {
        tripType.addEventListener('change', function () {
            const selectedTripType = document.querySelector('#tripType:checked').value;
            const returnDateInput = document.querySelector('.destinationDate');

            if (selectedTripType == 'roundTrip') {
                returnDateInput.style.display = 'block';
            } else {
                returnDateInput.style.display = 'none';
            }
        });
    });

    originSelect.addEventListener('change', function origin(e) {
        const selectedOrigin = e.target.value;
        variableSeccion.origin = selectedOrigin;
        Object.values(destinationSelect.options).forEach(function (option) {
            (option.value == selectedOrigin) ? option.disabled = true : option.disabled = false;
        });
        console.log(variableSeccion);
    });

    destinationSelect.addEventListener('change', function destination(e) {
        const selectedDestination = e.target.value;
        variableSeccion.destination = selectedDestination;
        console.log(variableSeccion);
    });

});
// Función para intercambiar los valores de origen y destino
function exchangeLocations() {
    var originSelect = document.getElementById("origin");
    var destinationSelect = document.getElementById("destination");

    // Intercambiar valores
    var tempValue = originSelect.value;
    originSelect.value = destinationSelect.value;
    destinationSelect.value = tempValue;
    // Crear un nuevo evento 'change'
    var event = new Event('change');

    // Disparar el evento en los elementos
    originSelect.dispatchEvent(event);
    destinationSelect.dispatchEvent(event);
}
// Función para ajustar el número de pasajeros
// function adjustPassengers(type, amount) {
//     var inputElement = document.getElementById(type + 'Count');
//     var currentValue = parseInt(inputElement.value);
//     var newValue = currentValue + amount;

//     // Evitar valores negativos
//     if (newValue < 0) {
//         newValue = 0;
//     }

//     inputElement.value = newValue;
// }

//funcion para el menu desplegable 

function toggleDropdown(dropdownId) {
    var dropdown = document.getElementById(dropdownId);
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

// Función para contar el número de pasajeros

function adjustPassengers(type, amount) {
    var inputElement = document.getElementById(type + 'Count');
    var currentValue = parseInt(inputElement.value);
    var newValue = currentValue + amount;

    // Evitar valores negativos
    if (newValue < 0) {
        newValue = 0;
    }

    inputElement.value = newValue;

    // Actualizar el texto del botón con la cantidad de adultos y niños
    var adultsCount = parseInt(document.getElementById('adultsCount').value);
    var childrenCount = parseInt(document.getElementById('childrenCount').value);

    var adultsText = adultsCount > 0 ? adultsCount + ' Adult' + (adultsCount > 1 ? 's' : '') : '';
    var childrenText = childrenCount > 0 ? childrenCount + ' Child' + (childrenCount > 1 ? 'ren' : '') : '';

    var totalCountText = [adultsText, childrenText].filter(Boolean).join(', ');
console.log(totalCountText);
    document.getElementById('passengerCount').textContent = totalCountText || 'Adult, Child';
    variableSeccion.passengerCount = totalCountText;
    console.log(variableSeccion);
}

// $(function() {
//     $('input[name="daterange"]').daterangepicker({
//       opens: 'left'
//     }, function(start, end, label) {
//       console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//     });
//   });

$(function () {
    $("#departureDate, #returnDate").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true,
        onSelect: function (dateText, inst) {
            // Acciones cuando se selecciona una fecha
            if (inst.id === 'departureDate') {
                variableSeccion.departureDate = dateText;
                console.log("Departure Date selected: " + dateText);
            } else if (inst.id === 'returnDate') {
                variableSeccion.returnDate = dateText;
                console.log("Return Date selected: " + dateText);
            }
        }
    });
});
