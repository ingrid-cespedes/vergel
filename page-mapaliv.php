<?php
/*
Template Name: Página para el Mapa de Valparaíso
*/
?>

<?php get_header() ?>

<div class="map-container margin-top-fix cf">
	<head>
<meta charset=utf-8 />
 <script src='http://api.tiles.mapbox.com/mapbox.js/v1.6.0/mapbox.js'></script>
 <link href='http://api.tiles.mapbox.com/mapbox.js/v1.6.0/mapbox.css' rel='stylesheet' />
</head>
<body>
   <style>

       @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);

       #map {
           position:static;
           top:0;
           bottom:0;
           width:100%;
       }

       #map-ui {
           position: absolute;
           top: 75px;
           left: 10px;
           list-style: none;
           margin: 0;
           padding: 0;
           z-index: 100;
       }

       #map-ui a {
           font: 13px/18px 'Open Sans', Helvetica, Arial, sans-serif;
           font-weight: 700, bold;
           background: #FFF;
           color: #000;
           display: block;
           margin: 0;
           padding: 0;
           border: 1px solid #BBB;
           border-bottom-width: 0;
           min-width: 190px;
           padding: 10px;
           text-decoration: none;
       }

       #map-ui a:hover {
           font: bold 13px/18px 'Open Sans', Helvetica, Arial, sans-serif;
           font-weight: 700, bold;
           color: #000;
       }

       #map-ui li:last-child a {
           border-bottom-width: 1px;
           -webkit-border-radius: 0 0 3px 3px;
           border-radius: 0 0 3px 3px;
       }

       #map-ui li:first-child a {
           -webkit-border-radius: 3px 3px 0 0;
           border-radius: 3px 3px 0 0;
       }

       #map-ui a.active {
           background: #B81823;
           border-color: #B81823;
           border-top-color: #FFF;
           font: 13px/18px 'Open Sans', Helvetica, Arial, sans-serif;
           font-weight: 400, normal;
           color: #FFF;
       }

       #map-ui a.active:hover {
           font: bold 13px/18px 'Open Sans', Helvetica, Arial, sans-serif;
           font-weight: 700, bold;
       }
   </style>

   <div id='map-container'>
       <ul id='map-ui'></ul>
       <div id='map'></div>
       <script type='text/javascript'>
       var map = L.mapbox.map('map', 'j-ulzurrun.i8j7ic71').setView([-33.062, -71.617], 13);
       var ui = document.getElementById('map-ui');

       var vergel439 = L.mapbox.tileLayer('cindysanhueza.x5j2hvsr');
       var albergues = L.mapbox.tileLayer('cindysanhueza.yzs7oukh');
       var acopio = L.mapbox.tileLayer('cindysanhueza.nfngxo1c');
       var catastro = L.mapbox.tileLayer('cindysanhueza.xl16c1ti');
       var juntas = L.mapbox.tileLayer('cindysanhueza.zwgi4bji');
       var cuadrillas = L.mapbox.tileLayer('cindysanhueza.0onyss2k');
       var salud = L.mapbox.tileLayer('cindysanhueza.sxft76tq');
       var animales = L.mapbox.tileLayer('cindysanhueza.51suxixd');
       var transporte = L.mapbox.tileLayer('cindysanhueza.e4ke2xwk');
       var zafectada = L.mapbox.tileLayer('j-ulzurrun.0b43g14i');

       addLayer(vergel439, L.mapbox.gridLayer('cindysanhueza.x5j2hvsr'),'VERGEL 439', 10);
       addLayer(zafectada, L.mapbox.gridLayer('j-ulzurrun.0b43g14i'),'ZONA AFECTADA', 1);
       addLayer(albergues, L.mapbox.gridLayer('cindysanhueza.yzs7oukh'),'ALBERGUES', 4);
       addLayer(acopio, L.mapbox.gridLayer('cindysanhueza.nfngxo1c'),'CENTROS ACOPIO', 2);
       addLayer(catastro, L.mapbox.gridLayer('cindysanhueza.xl16c1ti'),'CATASTRO Y DOCUMENTOS', 5);
       addLayer(juntas, L.mapbox.gridLayer('cindysanhueza.zwgi4bji'),'JUNTAS VECINALES', 6);
       addLayer(cuadrillas, L.mapbox.gridLayer('cindysanhueza.0onyss2k'),'CUADRILLAS', 8);
       addLayer(salud, L.mapbox.gridLayer('cindysanhueza.sxft76tq'),'CENTROS MÉDICOS', 3);
       addLayer(animales, L.mapbox.gridLayer('cindysanhueza.51suxixd'),'AYUDA ANIMAL', 6);
       addLayer(transporte, L.mapbox.gridLayer('cindysanhueza.e4ke2xwk'),'TRANSPORTE', 9);

       function addLayer(layer, gridlayer, name, zIndex) {
           layer
               .setZIndex(zIndex)
               .addTo(map);
           gridlayer
               .addTo(map);
           // add the gridControl to the active gridlayer
           var gridControl = L.mapbox.gridControl(gridlayer, {follow: false}).addTo(map);
           
           // Create a simple layer switcher that toggles layers on and off.
           var item = document.createElement('li');
           var link = document.createElement('a');

           link.href = '#';
           link.className = 'active';
           link.innerHTML = name;

           link.onclick = function(e) {
               e.preventDefault();
               e.stopPropagation();

               if (map.hasLayer(layer)) {
                   map.removeLayer(layer);
                   map.removeLayer(gridlayer);
                   this.className = '';
               } else {
                   map.addLayer(layer);
                   map.addLayer(gridlayer);
                   this.className = 'active';
               }
           };
           item.appendChild(link);
           ui.appendChild(item);
       }
       </script>
   </div>
</body>

</div>

