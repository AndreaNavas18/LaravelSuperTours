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

//Funcion para generar los schedules dinamicos
const data = [
    {id: 'h1', image: './images/tierra1.png', text: 'Orlando to Fort Pierce'},
    {id: 'h2', image: './images/tierra2.png', text: 'Orlando to West Palm Beach'},
    {id: 'h3', image: './images/tierra1.png', text: 'Orlando to Pompano'},
    {id: 'h4', image: './images/tierra2.png', text: 'Orlando to Fort Lauderdale'},
    {id: 'h5', image: './images/tierra1.png', text: 'Orlando to Hollywood'},
    {id: 'h6', image: './images/tierra2.png', text: 'Orlando to North Miami Beach'},
    {id: 'h7', image: './images/tierra1.png', text: 'Orlando to Miami Beach'},
    {id: 'h8', image: './images/tierra2.png', text: 'Orlando to South Miami Beach'},
    {id: 'h9', image: './images/tierra1.png', text: 'Orlando to Miami Downtown'},
    {id: 'h10', image: './images/tierra2.png', text: 'Orlando to Miami Airport (Main Terminal)'},
    {id: 'h11', image: './images/tierra1.png', text: 'Orlando to Miami Airport Area (Zone)'},
];
// Referencia al contenedor
const contenedor = document.getElementById("contieneTodo2");
// Genera dinámicamente los divs basados en los datos
data.forEach((item) => {
    const div = document.createElement("div");
    div.className = "schDiv1";
    div.id = item.id; // Asigna el ID único
    div.innerHTML = `
      <img src="${item.image}" class="schIcon">
      <h3>${item.text}</h3>
      <button class="schBtn">(View More)</button>
    `;
    contenedor.appendChild(div);
  });