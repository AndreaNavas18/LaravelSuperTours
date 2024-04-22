const variableSesion = {};
const sectionsDays = {
    yesterdayCards: [],
    todayCards: [],
    tomorrowCards: [],
    yesterday: '',
    today: '',
    tomorrow: '',
    yesterdayCardsReturn: [],
    todayCardsReturn: [],
    tomorrowCardsReturn: [],
    yesterdayReturn: '',
    todayReturn: '',
    tomorrowReturn: ''
};
const tripsSelected = {
    departure: {},
    return: {}
};
const tZone = "T00:00:00"
let pastDay = '';
let variablePastDay = '';
let variablePastDayReturn = '';
let totalPassengers = 1;
let adultsCount = 1;
let childrenCount = 0;

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

// evento para cambiar la section today a la section yesterday
function changeYesterday () {
    if (variablePastDay >= pastDay) {
        $('#todayCards').addClass('fade');
            setTimeout(() => {
                $('#todayCards').removeClass('fade');
            }, 500);
        $('#today').text(sectionsDays.yesterday);
        $('#tomorrow').text(sectionsDays.today);
        $('#yesterdayCards').html('');
        $('#todayCards').html('');
        $('#tomorrowCards').html('');
        sectionsDays.tomorrowCards = [];
        sectionsDays.tomorrow = sectionsDays.today;
        sectionsDays.today = sectionsDays.yesterday;
        $('#btntomorrow').val($('#btntoday').val());
        $('#btntoday').val($('#btnyesterday').val());
        sectionsDays.todayCards.forEach(function (viaje) {
            createCard(viaje, 'tomorrowCards');
            sectionsDays.tomorrowCards.push(viaje);
        });
        sectionsDays.todayCards = [];
        sectionsDays.yesterdayCards.forEach(function (viaje) {
            createCard(viaje, 'todayCards');
            sectionsDays.todayCards.push(viaje);
        });
        searchRoutes({
            departureDate: formatDate(new Date($('#btnyesterday').val() + tZone), -1),
            day: 'yesterday',
            section: 'yesterdayCards'
        });
    }
};

// evento para cambiar la section todayReturn a la section yesterdayReturn
function changeYesterdayReturn () {
    if (variablePastDayReturn >= pastDay) {
        $('#todayCardsReturn').addClass('fade');
            setTimeout(() => {
                $('#todayCardsReturn').removeClass('fade');
            }, 500);
        $('#todayReturn').text(sectionsDays.yesterdayReturn);
        $('#tomorrowReturn').text(sectionsDays.todayReturn);
        $('#yesterdayCardsReturn').html('');
        $('#todayCardsReturn').html('');
        $('#tomorrowCardsReturn').html('');
        sectionsDays.tomorrowCardsReturn = [];
        sectionsDays.tomorrowReturn = sectionsDays.todayReturn;
        sectionsDays.todayReturn = sectionsDays.yesterdayReturn;
        $('#btntomorrowReturn').val($('#btntodayReturn').val());
        $('#btntodayReturn').val($('#btnyesterdayReturn').val());
        sectionsDays.todayCardsReturn.forEach(function (viaje) {
            createCard(viaje, 'tomorrowCardsReturn');
            sectionsDays.tomorrowCardsReturn.push(viaje);
        });
        sectionsDays.todayCardsReturn = [];
        sectionsDays.yesterdayCardsReturn.forEach(function (viaje) {
            createCard(viaje, 'todayCardsReturn');
            sectionsDays.todayCardsReturn.push(viaje);
        });
        searchRoutes({
            departureDate: formatDate(new Date($('#btnyesterdayReturn').val() + tZone), -1),
            day: 'yesterdayReturn',
            section: 'yesterdayCardsReturn'
        });
    }
};

// evento para cambiar la section today a la section tomorrow
function changeTomorrow () {
    variablePastDay = new Date($("#btntoday").val());
    $('#todayCards').addClass('fade');
        setTimeout(() => {
            $('#todayCards').removeClass('fade');
        }, 500);
    $('#today').text(sectionsDays.tomorrow);
    $('#yesterday').text(sectionsDays.today);
    $('#yesterdayCards').html('');
    $('#todayCards').html('');
    $('#tomorrowCards').html('');
    sectionsDays.yesterdayCards = [];
    sectionsDays.yesterday = sectionsDays.today;
    sectionsDays.today = sectionsDays.tomorrow;
    $('#btnyesterday').val($('#btntoday').val());
    $('#btntoday').val($('#btntomorrow').val());
    sectionsDays.todayCards.forEach(function (viaje) {
        createCard(viaje, 'yesterdayCards');
        sectionsDays.yesterdayCards.push(viaje);
    });
    sectionsDays.todayCards = [];
    sectionsDays.tomorrowCards.forEach(function (viaje) {
        createCard(viaje, 'todayCards');
        sectionsDays.todayCards.push(viaje);
    });
    searchRoutes({
        departureDate: formatDate(new Date($('#btntomorrow').val() + tZone), 1),
        day: 'tomorrow',
        section: 'tomorrowCards'
    });
};

// evento para cambiar la section todayReturn a la section tomorrowReturn
function changeTomorrowReturn () {
    variablePastDayReturn = new Date($("#btntodayReturn").val());
    $('#todayCardsReturn').addClass('fade');
        setTimeout(() => {
            $('#todayCardsReturn').removeClass('fade');
        }, 500);
    $('#todayReturn').text(sectionsDays.tomorrowReturn);
    $('#yesterdayReturn').text(sectionsDays.todayReturn);
    $('#yesterdayCardsReturn').html('');
    $('#todayCardsReturn').html('');
    $('#tomorrowCardsReturn').html('');
    sectionsDays.yesterdayCardsReturn = [];
    sectionsDays.yesterdayReturn = sectionsDays.todayReturn;
    sectionsDays.todayReturn = sectionsDays.tomorrowReturn;
    $('#btnyesterdayReturn').val($('#btntodayReturn').val());
    $('#btntodayReturn').val($('#btntomorrowReturn').val());
    sectionsDays.todayCardsReturn.forEach(function (viaje) {
        createCard(viaje, 'yesterdayCardsReturn');
        sectionsDays.yesterdayCardsReturn.push(viaje);
    });
    sectionsDays.todayCardsReturn = [];
    sectionsDays.tomorrowCardsReturn.forEach(function (viaje) {
        createCard(viaje, 'todayCardsReturn');
        sectionsDays.todayCardsReturn.push(viaje);
    });
    searchRoutes({
        departureDate: formatDate(new Date($('#btntomorrowReturn').val() + tZone), 1),
        day: 'tomorrowReturn',
        section: 'tomorrowCardsReturn'
    });
};

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
    const dropdown = document.getElementById(dropdownId);
    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
        console.log('salio');
        document.removeEventListener('click', eventDocument);
    } else {
        console.log('entroooooo');
        dropdown.style.display = 'block';
        setTimeout(() => {
            document.addEventListener('click', eventDocument);
        }, 1000);
    }
}

function eventDocument(event) {
    const dropdown = document.getElementById('passengersDropdown');
    // Si el dropdown no está abierto, no hacer nada
    if (dropdown.style.display === 'none') {
        return;
    }

    const isClickInside = dropdown.contains(event.target);

    // Si el clic fue fuera del dropdown, ocultarlo
    if (!isClickInside) {
        dropdown.style.display = 'none';
        document.removeEventListener('click', eventDocument);
    }
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
    adultsCount = parseInt(document.getElementById('adultsCount').value);
    childrenCount = parseInt(document.getElementById('childrenCount').value);
    totalPassengers = adultsCount + childrenCount;

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
    const departureDate = $("#departureDate").datepicker({
        numberOfMonths: 2,
        dateFormat: "yy-mm-dd",
        minDate: 0
    });
    const returnDate = $("#returnDate").datepicker({
        numberOfMonths: 2,
        dateFormat: "yy-mm-dd",
        minDate: 0
    });
    $(departureDate).datepicker("setDate", new Date());
    $(returnDate).datepicker("setDate", new Date());
    $(departureDate).on("change", function () {
        $(returnDate).datepicker("option", "minDate", $(this).datepicker("getDate"));
    });
});

// Función para devolver las fechas de ayer y mañana
function formatDate(date, d) {
    date.setDate(date.getDate() + d);
    const year = date.getFullYear();
    const month = ("0" + (date.getMonth() + 1)).slice(-2); // Los meses en JavaScript comienzan desde 0
    const day = ("0" + (date.getDate())).slice(-2);
    return `${year}-${month}-${day}`;
}

// Funcion para devolver las horas de salida y llegada
function formatHour(time) {
    let [hours, minutes] = time.split(":");
    let date = new Date();
    date.setHours(+hours);
    date.setMinutes(+minutes);
    return date.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
}


// Función para buscar rutas disponibles por los tres dias
function allDays() {
    cleanRoutes();
    $('#videoHeader').addClass('searchActive');
    $('#imgHeader').addClass('showImg');
    $('#sectionHeader').addClass('searchActive');
    $('#navHeader').addClass('searchActive');
    $('#yesterdayCards').html('');
    $('#todayCards').html('');
    $('#tomorrowCards').html('');
    $('#yesterdayCardsReturn').html('');
    $('#todayCardsReturn').html('');
    $('#tomorrowCardsReturn').html('');
    const tripType = document.querySelector('input[name="tripType"]:checked').value;
    const departureDate = $('#departureDate').val();
    const returnDate = $('#returnDate').val();
    const departureYesterday = formatDate(new Date(departureDate + tZone), -1);
    const returnYesterday = formatDate(new Date(returnDate + tZone), -1);
    const departureTomorrow = formatDate(new Date(departureDate + tZone), 1);
    const returnTomorrow = formatDate(new Date(returnDate + tZone), 1);
    const data = [
        { departureDate: departureDate, day: 'today', section: 'todayCards', direction: 'departure'},
        { departureDate: departureYesterday, day: 'yesterday', section: 'yesterdayCards', direction: 'departure' },
        { departureDate: departureTomorrow, day: 'tomorrow', section: 'tomorrowCards', direction: 'departure' }
    ];
    if (tripType == 'roundTrip') {
        $('#divCardsreturn').removeClass('hidden');
        $('#divSelectedreturn').removeClass('hidden');
        data.push({ departureDate: returnDate, day: 'todayReturn', section: 'todayCardsReturn', direction: 'return'});
        data.push({ departureDate: returnYesterday, day: 'yesterdayReturn', section: 'yesterdayCardsReturn', direction: 'return' });
        data.push({ departureDate: returnTomorrow, day: 'tomorrowReturn', section: 'tomorrowCardsReturn', direction: 'return' });
    } else {
        $('#divCardsreturn').addClass('hidden');
        $('#divSelectedreturn').addClass('hidden');
    }
    Promise.all(data.map(d => searchRoutes(d))).then(() => console.log('All done!')).catch(e => console.error(e));
}

function searchRoutes(data) {
    // Obtener los valores de los campos del formulario
    const selectOrigin = document.getElementById('origin');
    const selectDestination = document.getElementById('destination');
    const origin = (data.direction == 'departure') ? selectOrigin.value : selectDestination.value;
    const destination = (data.direction == 'departure') ? selectDestination.value : selectOrigin.value;
    const departureDate = data.departureDate;
    const passengerCount = document.getElementById('passengerCount').innerText;  // Ajusta según la estructura real de tu contador de pasajeros
    const tripType = document.querySelector('input[name="tripType"]:checked').value;
    // poner los titulos en los divs de las cards
    const textOrigin = (data.direction == 'departure') ? selectOrigin.options[selectOrigin.selectedIndex].text : selectDestination.options[selectDestination.selectedIndex].text;
    const textDestination = (data.direction == 'departure') ? selectDestination.options[selectDestination.selectedIndex].text : selectOrigin.options[selectOrigin.selectedIndex].text;
    $('#titleSelected' + data.direction).text(textOrigin.toUpperCase() + '  TO  ' + textDestination.toUpperCase());

    // Construir la URL con los datos
    const url = '/show-routes?' +
        'origin=' + encodeURIComponent(origin) +
        '&destination=' + encodeURIComponent(destination) +
        '&departureDate=' + encodeURIComponent(departureDate) +
        '&returnDate=' + encodeURIComponent(departureDate) +
        '&passengers=' + encodeURIComponent(totalPassengers) +
        '&tripType=' + encodeURIComponent(tripType);

    // traer las rutas disponibles con los parametros establecidos
    axios.get(url)
        .then(function (response) {
            $('#divHome .bodySection').addClass('hidden');
            $('#divRoutes').removeClass('hidden');
            pastDay = new Date(response.data.fecha_server);
            pastDay = pastDay.setDate(pastDay.getDate() - 1) // Resta un día
            if (data.day == 'yesterday') {
                variablePastDay = new Date(data.departureDate); 
            }
            if (data.day == 'yesterdayReturn') {
                variablePastDayReturn = new Date(data.departureDate);
            }
            //variablePastDay = `${variablePastDay.getFullYear()}-${("0" + (variablePastDay.getMonth() + 1)).slice(-2)}-${("0" + variablePastDay.getDate()).slice(-2)}`; 
            sectionsDays[data.section] = [];
            const initialDate = response.data.viajes[0].fecha_ini.split('.');
            const today = new Date(initialDate[0]);
            /* const fecha = initialDate[0].split('T');
            let yesterday = fecha[0].split('-');
            yesterday[2]--;
            yesterday = new Date(yesterday.join('-') + "T" + fecha[1]);
            let tomorrow = fecha[0].split('-');
            tomorrow[2]++;
            tomorrow = new Date(tomorrow.join('-') +  "T" + fecha[1]);
            $('#yesterday').text(yesterday.toLocaleDateString('en-US', options));
            $('#tomorrow').text(tomorrow.toLocaleDateString('en-US', options)); */
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            $('#' + data.day).text(today.toLocaleDateString('en-US', options));
            $('#btn' + data.day).val(departureDate.split('T')[0]);
            sectionsDays[data.day] = today.toLocaleDateString('en-US', options);
            // contruir las cards para cada ruta disponible
            response.data.viajes.forEach(function (viaje) {
                // agregar el evento click a la section
                sectionsDays[data.section].push(viaje);
                createCard(viaje, data.section);
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

function createCard(viaje, section) {
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
     let horario = document.createElement('div');
        horario.className = 'card-text';
     let salida = document.createElement('div');
        salida.textContent = formatHour(viaje.trip_departure);
     let llegada = document.createElement('div');
        llegada.textContent = formatHour(viaje.trip_arrival);
     let tiempo = document.createElement('div');
        tiempo.textContent = diferencia;
        tiempo.className = (section == 'todayCards' || section == 'todayCardsReturn') ? 'card-main' : 'card-subs';
     let medio = document.createElement('div');
        medio.className = 'medio-div';
        (section == 'todayCardsReturn') ? medio.classList.add('medio-divReturn') : '';
        medio.appendChild(tiempo);
    horario.appendChild(salida);
    horario.appendChild(medio);
    horario.appendChild(llegada);

     // crear el elemento enlace
     let price = document.createElement('div');
        price.className = 'divButton';
     let priceText = document.createElement('span');
     priceText.innerHTML = `$${parseFloat(viaje.wfprc_adult).toFixed(2)} Adult<br>$${parseFloat(viaje.wfprc_child).toFixed(2)} Child`;
        price.appendChild(priceText);

    if (section == 'todayCards' || section == 'todayCardsReturn') {
        // boton para seleccionar el viaje
         card.id = 'card' + viaje.trip_no;
        let priceBtn = document.createElement('button');
        if (viaje.tripAvilable && viaje.passengersAvailable >= 0) {
            
            priceBtn.className = (section == 'todayCards') ? 'buttonCards' : 'buttonCards buttonCardsReturn';
            priceBtn.dataset.trip = (section == 'todayCards') ? 'departure' : 'return';
            priceBtn.dataset.trip_no = viaje.trip_no;
            priceBtn.dataset.fecha = viaje.fecha_ini.split('T')[0];
            priceBtn.dataset.departure = viaje.trip_departure;
            priceBtn.dataset.arrival = viaje.trip_arrival;
            priceBtn.dataset.capacity = viaje.seats_remain;
            priceBtn.dataset.origen = viaje.origen;
            priceBtn.dataset.destino = viaje.destino;
            priceBtn.dataset.priceAdult = viaje.wfprc_adult;
            priceBtn.dataset.priceChild = viaje.wfprc_child;
            priceBtn.dataset.idOrigen = viaje.trip_from;
            priceBtn.dataset.idDestino = viaje.trip_to;
            priceBtn.textContent = 'Select';
            priceBtn.addEventListener('click', function () {
                selectTrip(this.dataset);
            });
            price.appendChild(priceBtn);
        } else {
            if ((viaje.seats_remain - viaje.passengersToReserve) == -1) {
                const textSeats = (viaje.passengersToReserve - 1) == 1 ? 'seat available.' : 'seats availables.'
                let alertOneAvailable = document.createElement('div');
                alertOneAvailable.className = 'alertOneAvailable';
                alertOneAvailable.textContent = `Only ${viaje.passengersToReserve - 1} ${textSeats}`;
                price.appendChild(alertOneAvailable);
            }
            priceBtn.className = 'buttonCardsDisabled';
            priceBtn.textContent = 'Sold Out';
            price.appendChild(priceBtn);
        }
    }


     // agregar los elementos al body
     cardBody.appendChild(title);
     cardBody.appendChild(horario);
     cardBody.appendChild(price);

     // agregar los elementos al card
     card.appendChild(cardBody);

     // agregar el card al contenedor de cards
     document.getElementById(section).appendChild(card);

}

// Función para revisar los puestos disponibles y reservarlos
function selectTrip(dataTrip) {
    dataTrip.adultPassenger = adultsCount;
    dataTrip.childPassenger = childrenCount;
    dataTrip.tripType = document.querySelector('input[name="tripType"]:checked').value;
    const url = '/reserve-trip?' +
        'tripNo=' + encodeURIComponent(dataTrip.trip_no) +
        '&fecha=' + encodeURIComponent(dataTrip.fecha) +
        '&capacity=' + encodeURIComponent(dataTrip.capacity) +
        '&departure=' + encodeURIComponent(dataTrip.departure) +
        '&adults=' + encodeURIComponent(dataTrip.adultPassenger) +
        '&children=' + encodeURIComponent(dataTrip.childPassenger) +
        '&origin=' + encodeURIComponent(dataTrip.origen) +
        '&destination=' + encodeURIComponent(dataTrip.destino) +
        '&tripType=' + encodeURIComponent(dataTrip.trip);

    axios.get(url)
        .then(function (response) {
            if (response.data.status == 'success') {
                console.log(response.data.message);
                dataTrip.idReserva = response.data.idReserva;
                if (dataTrip.tripType == 'oneWay') {
                    pickUpDropOff(dataTrip);
                } else if (dataTrip.tripType == 'roundTrip') {
                    verficarSeleccion(dataTrip);
                }
            } else {
                console.log(response.data.message);
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}

// funcion para verificar si ya esta seleccionado el viaje de ida y vuelta
function verficarSeleccion(dataTrip) {
    const tripSelected = "card" + dataTrip.trip_no;
    const tripDirection = dataTrip.trip;
    tripsSelected[tripDirection] = dataTrip;
    const tripCardClone = document.getElementById(tripSelected).cloneNode(true);
    tripCardClone.classList.add('selected');
    const btnSelect = tripCardClone.querySelector('button');
    btnSelect.textContent = 'Deselect';
    btnSelect.style.backgroundColor = 'gray';
    btnSelect.addEventListener('click', function () {
        deselectTrip(dataTrip);
    });
    $('#divSelected' + tripDirection).append(tripCardClone);
    $('#divCards' + tripDirection).addClass('hidden');

    console.log(tripsSelected);
    // Si ambos viajes están seleccionados, mostrar la vista de pick up y drop off
    if (Object.keys(tripsSelected.departure).length > 0 && Object.keys(tripsSelected.return).length > 0) {
       showContinue(tripsSelected.departure);
    }
}    

// funcion para deseleccionar el viaje de ida y vuelta
function deselectTrip(dataTrip) {
    const tripSelected = "card" + dataTrip.trip_no;
    const tripDirection = dataTrip.trip;
    tripsSelected[tripDirection] = {};
    $('#divSelected' + tripDirection).find("#" + tripSelected).remove();
    $('#divCards' + tripDirection).removeClass('hidden');
    $('#btnContinue').addClass('hidden');
    $('#btnContinue').off();
    // peticion para cancelar la reserva
    const url = '/cancel-reserve?' +
        'idReserva=' + dataTrip.idReserva;
    axios.get(url).then(function (response) {
        console.log(response.data.message);
    }).catch(function (error) {
        console.log(error);
    });

}

function cleanRoutes() {
    $('#divSelecteddeparture').find('div').remove();
    $('#divSelectedreturn').find('div').remove();
    $('#divCardsdeparture').removeClass('hidden');
    $('#divCardsreturn').removeClass('hidden');
    $('#btnContinue').addClass('hidden');
    $('#btnContinue').off();
}

function showContinue(dataTrip) {
    $('#btnContinue').removeClass('hidden');
    $('#btnContinue').on('click', function () {
        pickUpDropOff(dataTrip);
    });
}


// funcion para pasar a la vista de pick up y drop off
function pickUpDropOff(dataTrip) {
    let url = '/pickUp-dropOff' +
        '?tripNo=' + dataTrip.trip_no +
        '&fecha=' + dataTrip.fecha +
        '&departure=' + dataTrip.departure +
        '&arrival=' + dataTrip.arrival +
        '&adults=' + dataTrip.adultPassenger +
        '&children=' + dataTrip.childPassenger +
        '&priceAdult=' + dataTrip.priceAdult +
        '&priceChild=' + dataTrip.priceChild +
        '&origin=' + dataTrip.origen +
        '&destination=' + dataTrip.destino +
        '&idOrigen=' + dataTrip.idOrigen +
        '&idDestino=' + dataTrip.idDestino +
        '&idReserva=' + dataTrip.idReserva;

        if (dataTrip.tripType == 'oneWay') {
            window.location.href = url;
        } else if (dataTrip.tripType == 'roundTrip') {
            url += '&returnTrip=' + JSON.stringify(tripsSelected.return);
            window.location.href = url;
        }
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
  
