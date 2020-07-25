const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

let myMap = L.map('myMap').setView([6.060893, -75.499016], 15);

L.tileLayer(tilesProvider,{
  maxZoom: 15,
}).addTo(myMap)

let marker = L.marker([6.060893, -75.499016]).addTo(myMap)
 //Obtiene ubicación
navigator.geolocation.getCurrentPosition(
  (pos) => {
    const { coords } = pos
    console.log(coords)
    L.marker([coords.latitude, coords.longitude]).addTo(myMap)
  },
  (err) => {
    console.log(err)
  },
  {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  }
)
