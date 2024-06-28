const reservas = JSON.parse(localStorage.getItem('reserva'));

document.addEventListener("DOMContentLoaded", function () {

    if (reservas && typeof reservas == 'object') {
        let retorno = 0;
        Object.entries(reservas).forEach(([key, value]) => {
            retorno++;
            const adultos = value.adults;
            const children = value.children;
            const totalPassengers = parseInt(adultos) + parseInt(children) - 1;
            if (totalPassengers > 0) {
                for (let i = 0; i < totalPassengers; i++) {
                    const passengerTemplate = document.getElementById('passengerTemplate').content.cloneNode(true);
                    const divButtons = document.getElementById('divButtons');
                    const passengerNumber = i + 2;
                    const complemento = ((retorno == 1) ? 'Departure' : 'Return') + passengerNumber;
                    passengerTemplate.querySelector('#passengerNumber').textContent = `Passenger ${complemento}`;
                    passengerTemplate.querySelector('#firstname').name = `firstname${complemento}`;
                    passengerTemplate.querySelector('#lastname').name = `lastname${complemento}`;
                    passengerTemplate.querySelector('#celphone').name = `celphone${complemento}`;
                    passengerTemplate.querySelector('#email').name = `email${complemento}`;

                    divButtons.parentNode.insertBefore(passengerTemplate, divButtons);
                }
            }
        });
    }
});