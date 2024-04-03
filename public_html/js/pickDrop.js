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

    $('#outboundTitle').html(`<h2>${origin} To ${destination}</h2>`);
    $('#outboundDate').html(`Departuring <br> <h3>${fecha}</h3>`);
    $('#dT').html(`Trip: <strong>${pick}</strong>`);
    $('#dD').html(`Departure: <strong>${departure}</strong>`);
    $('#dA').html(`Arrival: <strong>${arrival}</strong>`);
    $('#dP').html(`Price: <strong>${totalPrice}</strong>`);
});