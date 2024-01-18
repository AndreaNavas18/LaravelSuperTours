function openModal() {
    console.log("Funciono");
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    // Ocultar el modal
    document.getElementById('myModal').style.display = 'none';
}


//   document.addEventListener('DOMContentLoaded', function () {
//     // Obtener elementos del modal
//     const modal = document.getElementById('openModalButton');
//     const openModalButton = document.querySelector('openModalButton');
//     const closeModalButtons = document.querySelectorAll('[data-close="modal"]');

//     // Abrir modal
//     openModalButton.addEventListener('click', function () {
//       modal.classList.remove('hidden');
//     });

//     // Cerrar modal
//     closeModalButtons.forEach(button => {
//       button.addEventListener('click', function () {
//         modal.classList.add('hidden');
//       });
//     });

//     // Cerrar modal haciendo clic fuera de él
//     window.addEventListener('click', function (event) {
//       if (event.target === modal) {
//         modal.classList.add('hidden');
//       }
//     });
//   });
