document.addEventListener('DOMContentLoaded', function () {
    // obtener los parametros de la URL
    const urlParams = new URLSearchParams(window.location.search);
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
    const totalPrice = (children * priceChild) + (adults * priceAdult);
    let date = new Date(fecha);
    let formattedDate = date.toLocaleString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
    let arrayDate = formattedDate.split(' ');

    $('#outboundTitle').html(`<h2>${origin} To ${destination}</h2>`);
    $('#outboundDate').html(`<h1>Departuring </h1> ${arrayDate[0]}  <h1 class="numDate">${arrayDate[1]}</h1> ${arrayDate[2]}`);
    $('#dT').html(`Trip: <strong>${pick}</strong>`);
    $('#dD').html(`Departure: <strong>${formatHour(departure)}</strong>`);
    $('#dA').html(`Arrival: <strong>${formatHour(arrival)}</strong>`);
    $('#dP').html(`Price: <strong>${totalPrice}</strong>`);
});

// Funcion para devolver las horas de salida y llegada
function formatHour(time) {
    let [hours, minutes] = time.split(":");
    let date = new Date();
    date.setHours(+hours);
    date.setMinutes(+minutes);
    return date.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
}