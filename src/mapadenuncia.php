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
#fixo {
    position: fixed;
    /* deixando o elemento na posição desejada */
    right: 50px;
    top: 200px;
    /* apenas para aparência */
    /*background-color: gold;
    border: 1px solid red;
    width: 100px;
    height: 100px;*/
}
#fixo2 {
    position: fixed;
    /* deixando o elemento na posição desejada */
    right: 50px;
    top: 170px;
    /* apenas para aparência */
    /*background-color: gold;
    border: 1px solid red;
    width: 100px;
    height: 100px;*/
}

  </style>
</head>
<body>

		
		  <!-- Div que irá carregar o mapa-->
		  <div id="map"></div>
         
          <div id="fixo"></div>
          <form method="GET" action="denunciafinal.php">
          <input type="hidden" id="codusu" name="codusu" value="<?php echo $_GET['codusu']; ?>">
          <input type="hidden" id="nome" name="nome" value="<?php echo $_GET['nome']; ?>">
          <input type="hidden" id="cpf" name="cpf" value="<?php echo $_GET['cpf']; ?>">
          <input type="hidden" id="email" name="email" value="<?php echo $_GET['email']; ?>">
          <input type="hidden" id="telefone" name="telefone" value="<?php echo $_GET['telefone']; ?>">
          <input type="hidden" id="catd" name="catd" value="<?php echo $_GET['catd']; ?>">
          <input type="hidden" id="rua" name="rua" value="<?php echo $_GET['rua']; ?>">
          <input type="hidden" id="bairro" name="bairro" value="<?php echo $_GET['bairro']; ?>">
          <input type="hidden" id="cidade" name="cidade" value="<?php echo $_GET['cidade']; ?>">
          <input type="hidden" id="cep" name="cep" value="<?php echo $_GET['cep']; ?>">
          <input type="hidden" id="descricao" name="descricao" value="<?php echo $_GET['descricao']; ?>">
          <input type="hidden" id="datad" name="datad" value="<?php echo $_GET['datad']; ?>">
          <input type="hidden" id="hora" name="hora" value="<?php echo $_GET['hora']; ?>">
          <input type="text" id="fixo2" name="coord">
          
          
          <button type="submit" id="fixo">Confirmar Localização</button>
         </form>

		
</body>

<script>
function getPosition(event){
    console.log(map.getEventCoordinate(event));
}
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
const marcador1 = new ol.layer.Vector({
	source: new ol.source.Vector({
	   features: [
	       new ol.Feature({
		       geometry: new ol.geom.Point(
			       ol.proj.fromLonLat([-40.34720182438675, -3.6882463513573365])
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

//marcador2
const marcador2 = new ol.layer.Vector({
	source: new ol.source.Vector({
	   features: [
	       new ol.Feature({
		       geometry: new ol.geom.Point(
			       ol.proj.fromLonLat([-40.34705673386156, -3.6881365759129676])
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

//marcador 3
const marcador3 = new ol.layer.Vector({
	source: new ol.source.Vector({
	   features: [
	       new ol.Feature({
		       geometry: new ol.geom.Point(
			       ol.proj.fromLonLat([-40.34690065648684, -3.6879992417747625])
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
//marcador 3
const marcador4 = new ol.layer.Vector({
	source: new ol.source.Vector({
	   features: [
	       new ol.Feature({
		       geometry: new ol.geom.Point(
			       ol.proj.fromLonLat([-40.35395562737109, -3.688041752972339])
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
map.addLayer(marcador2)
map.addLayer(marcador3)
map.addLayer(marcador4)


//marcado
map.on('singleclick', function (evt) {
    console.log(evt.coordinate);

    // convert coordinate to EPSG-4326
    document.getElementById('fixo2').value = ol.proj.transform(evt.coordinate, 'EPSG:3857', 'EPSG:4326');
    alert('Coordenadas Marcadas com Sucesso!');
   

});

</script>
</html>