document.addEventListener('DOMContentLoaded', function () {
    const calendarPrev = document.getElementById('calendar-prev');
    const calendarNext = document.getElementById('calendar-next');
    let selectedDate = new Date(); // Variable para almacenar la fecha seleccionada

    function generateCalendar(container, monthOffset = 0) {
        let currentMonth = '';
        let currentYear = '';
        if (selectedDate.getMonth() === 11 && container.id == 'calendar-next') {
            // Si el mes actual es diciembre, cambia al enero del siguiente año
            currentMonth = selectedDate.setMonth(0);
            currentYear = selectedDate.setFullYear(selectedDate.getFullYear() + 1);
        } else {
            currentMonth = selectedDate.getMonth() + monthOffset;
            currentYear = selectedDate.getFullYear();
        }

        const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
        const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();

        const monthNames = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        const header = document.createElement('div');
        header.className = 'header';
        header.innerText = `${monthNames[currentMonth]} ${currentYear}`;
        container.innerHTML = '';
        container.appendChild(header);

        const daysContainer = document.createElement('div');
        daysContainer.className = 'days';
        container.appendChild(daysContainer);

        for (let i = 0; i < firstDayOfMonth.getDay(); i++) {
            const emptyDay = document.createElement('div');
            emptyDay.className = 'day empty';
            daysContainer.appendChild(emptyDay);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const day = document.createElement('div');
            day.className = 'day';
            day.innerText = i;
            day.addEventListener('click', function () {
                // Actualiza la fecha seleccionada cuando se hace clic en un día
                selectedDate = new Date(currentYear, currentMonth, i);
                console.log('Fecha seleccionada:', selectedDate);
            });
            daysContainer.appendChild(day);
        }
    }

    function updateCalendars(monthOffset) {
        generateCalendar(calendarPrev, monthOffset - 1);
        generateCalendar(calendarNext, monthOffset);
    }

    updateCalendars(1); // Inicialmente muestra el mes siguiente

    // Agrega event listeners para la navegación
    /*calendarPrev.addEventListener('click', function () {
        if (selectedDate.getMonth() === 11) {
            // Si el mes actual es diciembre, cambia al enero del siguiente año
            selectedDate.setMonth(0);
            selectedDate.setFullYear(selectedDate.getFullYear() + 1);
        } else {
            selectedDate.setMonth(selectedDate.getMonth() - 1);
        }
        updateCalendars(-1);
    });

    calendarNext.addEventListener('click', function () {
        selectedDate.setMonth(selectedDate.getMonth() + 1);
        updateCalendars(1);
    });*/
});