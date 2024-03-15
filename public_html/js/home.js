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
    });

    destinationSelect.addEventListener('change', function destination(e) {
        const selectedDestination = e.target.value;
        variableSesion.destination = selectedDestination;
        console.log(variableSesion);
    });

});

// funcion para cambiar el body de la pagina
function changeBody(button) {
    const pressed = button.getAttribute('aria-pressed') === 'true';
    const vistas = ['tickets', 'multi', 'one'];
    if (pressed) {
        return;
    } else {
        vistas.forEach(function (vista) {
            if (vista === button.getAttribute('data-vista')) {
                document.getElementById(vista).className = '';
                button.classList.add('activo');
            } else {
                document.getElementById(vista).className = 'hidden';
                const otroBoton = button.parentNode.querySelector('#btn' + vista);
                otroBoton.setAttribute('aria-pressed', false)
                otroBoton.classList.remove('activo');
            }
        });
    }
    button.setAttribute('aria-pressed', !pressed);
}

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
    const fechas = $("#departureDate, #returnDate").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true,
        dateFormat: "yy-mm-dd",
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
    $(fechas).datepicker("setDate", new Date());
});

// Función para devolver las fechas de ayer y mañana
function formatDate(date, d) {
    const year = date.getFullYear();
    const month = ("0" + (date.getMonth() + 1)).slice(-2); // Los meses en JavaScript comienzan desde 0
    const day = ("0" + (date.getDate() + d)).slice(-2);
    return `${year}-${month}-${day}`;
}

// Función para buscar rutas disponibles por los tres dias
async function allDays() {
    const departureDate = $('#departureDate').val();
    const returnDate = $('#returnDate').val();
    const tZone = "T00:00:00"
    const departureYesterday = formatDate(new Date(departureDate + tZone), -1);
    const returnYesterday = formatDate(new Date(returnDate + tZone), -1);
    const departureTomorrow = formatDate(new Date(departureDate + tZone), 1);
    const returnTomorrow = formatDate(new Date(returnDate + tZone), 1);
    const data = [
        { departureDate: departureDate, returnDate: returnDate, day: 'today', section: 'todaySection' },
        { departureDate: departureYesterday, returnDate: returnYesterday, day: 'yesterday', section: 'yesterdaySection' },
        { departureDate: departureTomorrow, returnDate: returnTomorrow, day: 'tomorrow', section: 'tomorrowSection' }
    ];
    Promise.all(data.map(d => searchRoutes(d))).then(() => console.log('All done!')).catch(e => console.error(e));
}

function searchRoutes(data) {
    // Obtener los valores de los campos del formulario
    const origin = document.getElementById('origin').value;
    const destination = document.getElementById('destination').value;
    const departureDate = data.departureDate;
    const returnDate = data.returnDate;
    const passengerCount = document.getElementById('passengerCount').innerText;  // Ajusta según la estructura real de tu contador de pasajeros
    const tripType = document.querySelector('input[name="tripType"]:checked').value;

    // Construir la URL con los datos
    const url = '/show-routes?' +
        'origin=' + encodeURIComponent(origin) +
        '&destination=' + encodeURIComponent(destination) +
        '&departureDate=' + encodeURIComponent(departureDate) +
        '&returnDate=' + encodeURIComponent(returnDate) +
        '&passengerCount=' + encodeURIComponent(passengerCount) +
        '&tripType=' + encodeURIComponent(tripType);

    // traer las rutas disponibles con los parametros establecidos
    axios.get(url)
        .then(function (response) {
            $('#divHome .bodySection').addClass('hidden');
            $('#divRoutes').removeClass('hidden');
            const initialDate = response.data.viajes[0].fecha_ini.split('.');
            const today = new Date(initialDate[0]);
            const fecha = initialDate[0].split('T');
            let yesterday = fecha[0].split('-');
            yesterday[2]--;
            yesterday = new Date(yesterday.join('-') + "T" + fecha[1]);
            let tomorrow = fecha[0].split('-');
            tomorrow[2]++;
            tomorrow = new Date(tomorrow.join('-') +  "T" + fecha[1]);
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            $('#' + data.day).text(today.toLocaleDateString('en-US', options));
            /* $('#yesterday').text(yesterday.toLocaleDateString('en-US', options));
            $('#tomorrow').text(tomorrow.toLocaleDateString('en-US', options)); */
            // contruir las cards para cada ruta disponible
            response.data.viajes.forEach(function (viaje) {
                // crear el elemento card
                let card = document.createElement('div');

                // crear el elemento body
                let cardBody = document.createElement('div');
                cardBody.className = 'cardRoute';

                // crear el elemento título
                let title = document.createElement('h5');
                title.className = 'card-title';
                title.textContent = 'Trip ' + viaje.trip_no;
                
                const departureHour = parseInt(viaje.trip_departure.split(':')[0], 10);
                const arrivalHour = (departureHour <= viaje.trip_arrival.split(':')[0]) ?
                    parseInt(viaje.trip_arrival.split(':')[0], 10) : parseInt(viaje.trip_arrival.split(':')[0], 10) + 24;
                const departureMinutes = parseInt(viaje.trip_departure.split(':')[1], 10);
                const arrivalMinutes = parseInt(viaje.trip_arrival.split(':')[1], 10);
                const departureTime =  (departureHour * 60) + departureMinutes;
                const arrivalTime = (arrivalHour * 60) + arrivalMinutes;
                const difference = (arrivalTime - departureTime);
                const hours = Math.trunc(difference / 60);
                const minutes = difference % 60;
                const diferencia = hours + 'h ' + minutes + 'm';
                // crear el elemento texto
                let text = document.createElement('p');
                text.className = 'card-text';
                text.textContent = 'Salida: ' + viaje.trip_departure + ' - ' + diferencia +
                    ' - Llegada: ' + viaje.trip_arrival;

                // crear el elemento enlace
                let link = document.createElement('a');
                link.href = '#';
                link.className = 'btn btn-primary';
                link.textContent = 'Comprar';

                // agregar los elementos al body
                cardBody.appendChild(title);
                cardBody.appendChild(text);
                cardBody.appendChild(link);

                // agregar los elementos al card
                card.appendChild(cardBody);

                // agregar el card al contenedor de cards
                document.getElementById(data.section).appendChild(card);
            });

            // constrir la data table con las rutas disponibles
            /* const table = $('#routesTable');
            table.DataTable({
                ordering: false,
                searching: false,
                paging: false,
                info: false,
                data: response.data.viajes,
                columns: [
                    { data: 'trip_departure' },
                    { data: function (row) {
                            // diferencia de horas entre la hora de salida y la hora de llegada
                            const departureHour = parseInt(row.trip_departure.split(':')[0], 10);
                            const arrivalHour = (departureHour <= row.trip_arrival.split(':')[0]) ?
                                parseInt(row.trip_arrival.split(':')[0], 10) : parseInt(row.trip_arrival.split(':')[0], 10) + 24;
                            const departureMinutes =parseInt(row.trip_departure.split(':')[1], 10);
                            const arrivalMinutes = parseInt(row.trip_arrival.split(':')[1], 10);
                            const departureTime =  (departureHour * 60) + departureMinutes;
                            const arrivalTime = (arrivalHour * 60) + arrivalMinutes;
                            const difference = (arrivalTime - departureTime);
                            const hours = Math.trunc(difference / 60);
                            const minutes = difference % 60;
                            return hours + 'h ' + minutes + 'm';
                        }
                    },
                    { data: 'trip_arrival' },
                    { data: 'trip_no' },
                    { data: function (row) { 
                        return row.wfprc_adult + ' - ' + row.wfprc_child;
                        }
                    }
                ]
            }); */
        })
        .catch(function (error) {
            console.log(error);
        });
    
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

function cambiarColorYImxagen(boton, color, nuevaImagen, colorTexto) {

    var fondo = boton;
    fondo.style.backgroundColor = color;
  
    var imagen = boton.querySelector('.iconosType');
    imagen.src = nuevaImagen;

    var texto = boton.querySelector('.titleNew');
    texto.style.color = colorTexto;

    console.log("Si estoy cambiando ");
  }

  var botonSeleccionado = null;

function cambiarColorYImagen(boton, color, nuevaImagen, colorTexto) {
    // Si el botón actualmente seleccionado es el mismo que el botón clicado, deselecciónalo
    if (boton === botonSeleccionado) {
        boton.classList.remove('clicked');
        botonSeleccionado = null; // Reinicia el botón seleccionado
    } else {
        // Deselecciona el botón anterior si hay uno seleccionado
        if (botonSeleccionado) {
            botonSeleccionado.classList.remove('clicked');
        }

        // Selecciona el nuevo botón
        boton.classList.add('clicked');
        botonSeleccionado = boton; // Actualiza el botón seleccionado
    }

    // Aplica los estilos al botón
    var fondo = boton;
    fondo.style.backgroundColor = color;
  
    var imagen = boton.querySelector('.iconosType');
    imagen.src = nuevaImagen;

    var texto = boton.querySelector('.titleNew');
    texto.style.color = colorTexto;

    console.log("Si estoy cambiando ");
}

document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    function showSlides() {
      let slides = document.getElementsByClassName("slidew");
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      slides[slideIndex-1].style.display = "block";  
      setTimeout(showSlides, 2000); // Cambia las imágenes cada 2 segundos (ajusta según sea necesario)
    }
    
    showSlides();
});

  //Slider movil de servicios
document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("serviciow");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 2000); // Cambia las imágenes cada 2 segundos (ajusta según sea necesario)
    }
});
  
