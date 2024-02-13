document.addEventListener('DOMContentLoaded', function () {
    const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');

    dropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const dropdownContent = this.querySelector('.dropdown-content');
            // dropdownContent.classList.toggle('show');
            const isShowing = dropdownContent.classList.toggle('show');
            if (isShowing) {
                const height = dropdownContent.offsetHeight;
                this.style.height = (this.offsetHeight + height) + 'px';
            } else {
                this.style.height = null;
            }
        });
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.dropdown-trigger')) {
            const dropdownContents = document.querySelectorAll('.dropdown-content');
            dropdownContents.forEach(content => {
                // content.classList.remove('show');
                content.classList.remove('show');
                content.closest('.dropdown-trigger').style.height = null;
            });
        }
    });
});
