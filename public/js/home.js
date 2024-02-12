const variableSesion = {};
//Función para cargar el contenido de la página dependiendo del tipo de viaje
document.addEventListener("DOMContentLoaded", function () {
    const originSelect = document.getElementById('origin');
    const destinationSelect = document.getElementById('destination');
    const tripTypeSelect = document.querySelectorAll('#tripType');

    // bloquear la entrada de letras y caracteres especiales en el campo de número de pasajeros
    const passengerCount = document.getElementById('adultsCount');
    passengerCount.addEventListener('input', function (e) {
        this.value = (this.value == 0) ? 1 : this.value;
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    passengerCount.addEventListener('change', function (e) {
        this.value = (this.value == '') ? 1 : this.value;
        adjustPassengers('adults', 0);
    });
    
    // bloquear la entrada de letras y caracteres especiales en el campo de número de niños
    const childrenCount = document.getElementById('childrenCount');
    childrenCount.addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    childrenCount.addEventListener('change', function (e) {
        this.value = (this.value == '') ? 0 : this.value;
        adjustPassengers('children', 0);
    });

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
        variableSesion.origin = selectedOrigin;
        /* Object.values(destinationSelect.options).forEach(function (option) {
            (option.value == selectedOrigin) ? option.disabled = true : option.disabled = false;
        }); */
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

            // recorrer el arreglo de áreas
           /*  response.data.forEach(function (area) {
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
            destinationSelect.value = "3"; // Asigna el valor correspondiente */
        })
        .catch(function (error) {
            console.log(error);
        });

        console.log(variableSesion);
    });

    destinationSelect.addEventListener('change', function destination(e) {
        const selectedDestination = e.target.value;
        variableSesion.destination = selectedDestination;
        console.log(variableSesion);
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
/* function adjustPassengers(type, amount) {
    var inputElement = document.getElementById(type + 'Count');
    var currentValue = parseInt(inputElement.value);
    var newValue = currentValue + amount;

    // Evitar valores negativos
    if (newValue < 0) {
        newValue = 0;
    }

    inputElement.value = newValue;
} */

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

    // Evitar que el numero de adultos sea menor a 1
    if (type === 'adults' && newValue < 1) {
        newValue = 1;
    }

    inputElement.value = newValue;

    // Actualizar el texto del botón con la cantidad de adultos y niños
    var adultsCount = parseInt(document.getElementById('adultsCount').value);
    var childrenCount = parseInt(document.getElementById('childrenCount').value);
    var totalPassengers = adultsCount + childrenCount;

    var adultsText = adultsCount > 0 ? adultsCount + ' Adult' + (adultsCount > 1 ? 's' : '') : '';
    var childrenText = childrenCount > 0 ? childrenCount + ' Child' + (childrenCount > 1 ? 'ren' : '') : '';

    var totalCountText = [adultsText, childrenText].filter(Boolean).join(', ');
    document.getElementById('passengerCount').textContent = totalCountText || '1 Adult';
    variableSesion.passengerCount = totalPassengers;
    console.log(variableSesion);
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
                variableSesion.departureDate = dateText;
                console.log("Departure Date selected: " + dateText);
            } else if (inst.id === 'returnDate') {
                variableSesion.returnDate = dateText;
                console.log("Return Date selected: " + dateText);
            }
        }
    });
});

function searchRoutes() {
    // Obtener los valores de los campos del formulario
    var origin = document.getElementById('origin').value;
    var destination = document.getElementById('destination').value;
    var departureDate = document.getElementById('departureDate').value;
    var returnDate = document.getElementById('returnDate').value;
    var passengerCount = document.getElementById('passengerCount').innerText;  // Ajusta según la estructura real de tu contador de pasajeros
    var tripType = document.querySelector('input[name="tripType"]:checked').value;

    // Construir la URL con los datos
    var url = '/show-routes?' +
        'origin=' + encodeURIComponent(origin) +
        '&destination=' + encodeURIComponent(destination) +
        '&departureDate=' + encodeURIComponent(departureDate) +
        '&returnDate=' + encodeURIComponent(returnDate) +
        '&passengerCount=' + encodeURIComponent(passengerCount) +
        '&tripType=' + encodeURIComponent(tripType);

    // Redirigir al controlador con los datos
    window.location.href = url;
}

  //Funcion para el slider
//Aqui quede, necesito que los slider se separen, y no se muestren juntos 
//   document.addEventListener('DOMContentLoaded', function () {
//     const carousell = document.querySelector('.carousell');
//     let currentIndex = 0;
//     const slideWidth = carousell.clientWidth;

//     function nextSlide() {
//         currentIndex = (currentIndex + 1) % carousell.children.length;
//         updateCarousell();
//     }

//     function updateCarousell() {
//         const translateValue = -currentIndex * slideWidth;
//         carousell.style.transform = `translateX(${translateValue}px)`;
//     }

//     // Cambia de slide cada 3 segundos
//     setInterval(nextSlide, 3000);
// });

document.addEventListener('DOMContentLoaded', function () {
    const carousell = document.querySelector('.carousell');
    const divSliders = document.querySelectorAll('.divSlider');
    const slideWidth = divSliders[0].clientWidth; // Asume que todos los sliders tienen el mismo ancho

    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % divSliders.length;
        updateCarousell();
    }

    function updateCarousell() {
        const translateValue = -currentIndex * slideWidth;
        carousell.style.transform = `translateX(${translateValue}px)`;
    }

    // Cambia de slide cada 3 segundos
    setInterval(nextSlide, 3000);
});

  
