<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG BANK SAMPAH</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
     integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
     crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
     integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
     crossorigin=""></script>

     <style>
        #map { height: 600px; }
     </style>
</head>
<body>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">SISTEM INFORMASI GEOGRAFIS LOKASI BANK SAMPAH KOTA PONTIANAK</h1> 
    <style>
    h1 {
        padding-left: 200px;
        font-family: courier;
        font-size: 160%;
    }
    </style>
    <div id="map"></div>

</body>
<script>
    var map = L.map('map').setView([-0.0300733,109.3257109], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
//bsi khatulistiwa
L.marker([-0.0208261,109.2875838]).addTo(map);
//bsu rosella siantan
L.marker([-0.0131726,109.3471108]).addTo(map);
//bsu rosella purnama
L.marker([-0.0593516,109.3256939]).addTo(map);
//bsu dansen sejahtera
L.marker([-0.0489587,109.3047359]).addTo(map);
//bsu selamat sejahtera
L.marker([0.0246254,109.3301458]).addTo(map);
//bsu rumput hias
L.marker([-0.0467809,109.3011055]).addTo(map);
//bsu palem asri
L.marker([-0.0289742,109.2969343]).addTo(map);
//bsu wahana bersama
L.marker([-0.0158499,109.347169]).addTo(map);
//bsu sejahtera asri
L.marker([-0.0090215,109.2991737]).addTo(map);
//bsu mahasiswa untan
L.marker([-0.0629182,109.345639]).addTo(map);
//bsu kampoeng pokok telok
L.marker([-0.0640079,109.357893]).addTo(map);
//bsu 
L.marker([-0.0289742,109.2969343]).addTo(map);
</script>
</html>