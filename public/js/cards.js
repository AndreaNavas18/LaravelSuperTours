const { default: axios } = require("axios");

//Funcion One way
document.addEventListener('DOMContentLoaded', function () {
    const originSelect = document.getElementById('origin');
    const destinationSelect = document.getElementById('destination');
    const departureDateSelect = document.getElementById('departureDate');
    const returnDateSelect = document.getElementById('returnDate');
    const passengerSelect = document.getElementById('passengerCount');

    axios.get('/routes')
        .then(function (response) {
            console.log("Estos son los trip_froms");
            console.log(response.data);
        });



});