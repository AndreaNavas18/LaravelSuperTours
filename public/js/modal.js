const btnAbrirModal = document.querySelector('#btn-abrir-modal');
const btnCerrarModal = document.querySelector('#btn-cerrar-modal');
const modal = document.querySelector('#modal');

btnAbrirModal.addEventListener('click', () => {
    modal.showModal();
    console.log('funciono');
});

btnCerrarModal.addEventListener('click', () => {
    modal.close();
});