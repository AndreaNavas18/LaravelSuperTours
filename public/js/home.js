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