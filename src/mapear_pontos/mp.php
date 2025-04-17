<?php
include('../banco.php');

$sql = "SELECT * FROM tbdenuncia WHERE checado = 'ok'";

$resultado = $conexao->query($sql);

if ($resultado) {
  if ($resultado->num_rows > 0) {
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);
  }
}


?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrando um Mapa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
  <script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
    }
	#map {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100%;
}
  </style>
</head>
<body>
		<body>
		  <!-- Div que irá carregar o mapa-->
		  <div id="map"></div>
		</body>
    <input style="display: none;" type="text" name="" id="longitude" value="<?php echo $linha['lng']?>">
    <input style="display: none;" type="text" name="" id="latitude" value="<?php echo $linha['lat']?>">
</body>
<script>
const key = '26T0zKjZfsRTnM0hjbvJ';
const source = new ol.source.TileJSON({
  url: 'https://api.maptiler.com/maps/basic-v2/tiles.json?key=26T0zKjZfsRTnM0hjbvJ',
  
  tileSize: 512,
  crossOrigin: 'anonymous'
});

const attribution = new ol.control.Attribution({
  collapsible: false,
});

const map = new ol.Map({
  layers: [
    new ol.layer.Tile({
      source: source
    })
  ],
  controls: ol.control.defaults.defaults({attribution: false}).extend([attribution]),
  target: 'map',
  view: new ol.View({
    constrainResolution: true,
    center: ol.proj.fromLonLat([-40.3547686, -3.6909937]),
    zoom: 15
  })
});

//código para marcadores
//dessa forma é possivel gerar uma estrutura de repetição (for ou while)
// com a consulta sql que contenha as coordenadas e assim é possivel modificar 
// os valores em tempo de execução
//abaixo eu coloquei 3 marcadores na rua Menino Deus como focos de lixo

//marcador 1

let campo_latitude = document.getElementById("latitude");
let latitude = campo_latitude.value;

let campo_longitude = document.getElementById("longitude");
let longitude = campo_longitude.value;

const marcador1 = new ol.layer.Vector({
	source: new ol.source.Vector({
	   features: [
	       new ol.Feature({
		       geometry: new ol.geom.Point(
			       ol.proj.fromLonLat([latitude, longitude])
			   )
		   })
	   ],
	}),style: new ol.style.Style({
	    image: new ol.style.Icon({
		    anchor: [0.5, 1],
			crossOrigin: 'anonymous',
			src: 'https://docs.maptiler.com/openlayers/default-marker/marker-icon.png'
		})
	})
})

map.addLayer(marcador1)
</script>
</html>