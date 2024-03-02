// mapa.js

function inicializarMapa() {
    var mapa = L.map('mapa').setView([26.0112, -80.1495], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mapa);

    var marker = L.marker([LATITUD, LONGITUD]).addTo(mapa);
    marker.bindPopup('Ubicación').openPopup();
}
