//Función para cargar el contenido de la página dependiendo del tipo de viaje
document.addEventListener("DOMContentLoaded", function() {
    const originSelect = document.getElementById('origin');
    const destinationSelect = document.getElementById('destination');
    const tripTypeSelect = document.querySelectorAll('#tripType');

    // Cambio de tipo de viaje
    tripTypeSelect.forEach(function(tripType) {
        tripType.addEventListener('change', function() {
            const selectedTripType = document.querySelector('#tripType:checked').value;
            const returnDateInput = document.querySelector('.destinationDate');

            if (selectedTripType == 'roundTrip') {
                returnDateInput.style.display = 'block';
            } else {
                returnDateInput.style.display = 'none';
            }
        });
    });
    // Al cargar la página, establece la opción predeterminada del destino como "Miami"
    destinationSelect.value = "11";  // Asigna el valor correspondiente a "Miami"

    originSelect.addEventListener('change', function uod() {
        console.log("Cambio detectado");  // Agrega esta línea
        const selectedOrigin = originSelect.value;

        // Deshabilitar la opción correspondiente en el destino
        for (let option of destinationSelect.options) {
            option.disabled = option.value == selectedOrigin;
        }
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
}
// Función para ajustar el número de pasajeros
function adjustPassengers(type, amount) {
    var inputElement = document.getElementById(type + 'Count');
    var currentValue = parseInt(inputElement.value);
    var newValue = currentValue + amount;

    // Evitar valores negativos
    if (newValue < 0) {
        newValue = 0;
    }

    inputElement.value = newValue;
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

    document.getElementById('passengerCount').textContent = totalCountText || 'Adult, Child';
}

// $(function() {
//     $('input[name="daterange"]').daterangepicker({
//       opens: 'left'
//     }, function(start, end, label) {
//       console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//     });
//   });

$(function() {
    $("#departureDate, #returnDate").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true,
        onSelect: function(dateText, inst) {
            // Acciones cuando se selecciona una fecha
            if (inst.id === 'departureDate') {
                console.log("Departure Date selected: " + dateText);
            } else if (inst.id === 'returnDate') {
                console.log("Return Date selected: " + dateText);
            }
        }
    });
});