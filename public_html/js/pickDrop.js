let idsReserves = [];
let intervalId = 0;
function startPickDrop(data) {
    console.log('PickDrop');
    // obtener los parametros de la URL
    idsReserves = [];
    const urlParams = new URLSearchParams(data);
    const pick = urlParams.get('tripNo');
    const fecha = urlParams.get('fecha');
    const departure = urlParams.get('departure');
    const arrival = urlParams.get('arrival');
    const adults = urlParams.get('adults');
    const children = urlParams.get('children');
    const priceAdult = urlParams.get('priceAdult');
    const priceChild = urlParams.get('priceChild');
    const origin = urlParams.get('origin');
    const destination = urlParams.get('destination');
    const returnTrip = urlParams.get('returnTrip');
    idsReserves.push(urlParams.get('idReserva'));
    const totalPrice = (children * priceChild) + (adults * priceAdult);
    let returnPrice = 0;
    let date = new Date(fecha + tZone);
    let formattedDate = date.toLocaleString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
    let arrayDate = formattedDate.split(' ');
    startTimer(60 * 10, document.querySelector('#timer'));
    $('#outboundTitle').html(`<h2>${origin} to ${destination}</h2>`);
    $('#outboundDate').html(`<h1>Departing </h1> ${arrayDate[0]}  <h1 class="numDate">${arrayDate[1]}</h1> ${arrayDate[2]}`);
    $('#dT').html(`Trip: <strong>${pick}</strong>`);
    $('#dD').html(`Departure: <strong>${formatHour(departure)}</strong>`);
    $('#dA').html(`Arrival: <strong>${formatHour(arrival)}</strong>`);
    $('#dP').html(`Price: <strong>${parseFloat(totalPrice).toFixed(2)}</strong>`);
    window.addEventListener('beforeunload', function () {
        cancelReserva(idsReserves);
    });
    
    if (returnTrip) {
        $('#returnCard').removeClass('hidden');
        const returnData = JSON.parse(returnTrip);
        idsReserves.push(returnData.idReserva);
        returnPrice = (returnData.childPassenger * returnData.priceChild) + (returnData.adultPassenger * returnData.priceAdult);
        let dateReturn = new Date(returnData.fecha + tZone);
        let formattedDateReturn = dateReturn.toLocaleString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
        let arrayDateReturn = formattedDateReturn.split(' ');

        $('#returnTitle').html(`<h2>${returnData.origen} to ${returnData.destino}</h2>`);
        $('#returndate').html(`<h1>Returning </h1> ${arrayDateReturn[0]}  <h1 class="numDate">${arrayDateReturn[1]}</h1> ${arrayDateReturn[2]}`);
        $('#rT').html(`Trip: <strong>${returnData.trip_no}</strong>`);
        $('#rD').html(`Departure: <strong>${formatHour(returnData.departure)}</strong>`);
        $('#rA').html(`Arrival: <strong>${formatHour(returnData.arrival)}</strong>`);
        $('#rP').html(`Price: <strong>${parseFloat(returnPrice).toFixed(2)}</strong>`);
    } else {
        $('#returnCard').addClass('hidden');

    }

    $('#departureOutbound, #arrivalOutbound').on('change', function () {
        const optionSelected = this.options[this.selectedIndex];
        const newPrice = (optionSelected.dataset.precio) ? ((optionSelected.dataset.precio * children) + (optionSelected.dataset.precio * adults)) + totalPrice : totalPrice;
        $('#dP').html(`Price: <strong>${parseFloat(newPrice).toFixed(2)}</strong>`);
        if (optionSelected.dataset.precio) {
            $('#hotel' + this.id).removeClass('hidden');
        } else {
            $('#hotel' + this.id).addClass('hidden');
        }
    });

    $('#departureReturn, #arrivalReturn').on('change', function () {
        const optionSelected = this.options[this.selectedIndex];
        const newPrice = (optionSelected.dataset.precio) ? ((optionSelected.dataset.precio * children) + (optionSelected.dataset.precio * adults)) + returnPrice : returnPrice;
        $('#rP').html(`Price: <strong>${parseFloat(newPrice).toFixed(2)}</strong>`);
        if (optionSelected.dataset.precio) {
            $('#hotel' + this.id).removeClass('hidden');
        } else {
            $('#hotel' + this.id).addClass('hidden');
        }
    });

    $('#btnReserve').on('click', function () {
        const data = JSON.stringify({
            tripNo: pick,
            fecha: fecha,
            departure: departure,
            arrival: arrival,
            adults: adults,
            children: children,
            priceAdult: priceAdult,
            priceChild: priceChild,
            origin: origin,
            destination: destination,
            returnTrip: returnTrip,
            idReservas: idsReserves
        });
        window.location.href = '/login';
        /* axios.post('/login', data).then(function (response) {
        }).catch(function (error) {
            console.log(error);
        }); */
    });

    $('#btnClose').on('click', function () {
        $('#contenedorAll').removeClass('hidden');
        $('#contenedorPickDrop').addClass('hidden');
        $('#contenedorPickDrop').html("");
        clearInterval(intervalId); // Detiene el intervalo
        if (globalTripType == 'oneWay') {
            cancelReserva(idsReserves);
        } else if (globalTripType == 'roundTrip') {
            $('[id="btnDeselect"]').trigger('click');
        }
    });
}

// Funcion para controlar el timer
function startTimer(duration, display) {
    let timer = duration, minutes, seconds;
    intervalId = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer == 0) {
            // actualizar la reserva a SUSPENDED
            cancelReserva(idsReserves, "SUSPENDED");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Time is over, your reservation has been Suspended!. Do you want to renew the time?',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, renew the time!'
            }).then((result) => {
                if (result.isConfirmed) {
                    cancelReserva(idsReserves, "RENEWED");
                    startTimer(60 * 10, display);
                } else {
                    cancelReserva(idsReserves);
                    $('#btnClose').trigger('click');
                }
            });
            clearInterval(intervalId); // Detiene el intervalo
        }
    }, 1000);
}

// peticion para cancelar la reserva
function cancelReserva(dataTrip, state = "CANCELLED") {
    const url = '/cancel-reserve?' +
    'idReserva=' + dataTrip
    + '&state=' + state;
    axios.get(url).then(function (response) {
        console.log(response.data.message);
    }).catch(function (error) {
        console.log(error);
    });
}
