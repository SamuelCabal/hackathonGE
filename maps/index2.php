<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 380px;
		width:300px;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script language="javascript" src="js/jquery-1.7.2.min.js"></script>
    <script language="javascript" src="js/fancywebsocket.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script>


var map;
var marker;





function initialize() 
{
  var mapOptions = {
    zoom: 15,//zoom empieza el mapa
  };
  
  map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);//creamos un nuevo objeto de las librerias

  // Try HTML5 geolocation
  if(navigator.geolocation) //si acepta la geolocalizacion
  {
    	navigator.geolocation.getCurrentPosition(function(position) 
		{
      		var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);//generamos una nueva pocision en 
			//formato  latitude,longitude
				 
	 var goldStar = {//creamos las propiedades para un nuevo marcador
		path: google.maps.SymbolPath.CIRCLE,
	    strokeColor: '#276ED0',
		fillColor: '#276ED0',
		fillOpacity: .9,
		strokeWeight: 1,
		scale: 6,
  	};
 	var marker = new google.maps.Marker({//creamos un nuevo marcador con las propiedades de goldstar
			position: pos,//lo pocisionamos con alguna ubicacion
			icon: goldStar,//con las propiedades previemente creadas
			draggable: true,//le dmos la propiedad de arrastrar el marcador
			animation: google.maps.Animation.DROP,//propiedad de animacion
			map: map,
  	});
	
	map.setCenter(pos);//pocisionamos el marcador en el centro
	  

    }, function() //excepciones
	{
      handleNoGeolocation(true);
    });
  } 
  else 
  {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function animar()//funcion crea un nuevo marcador en el mapa
{
	navigator.geolocation.getCurrentPosition(function(position) 
	{
      				
	var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
			
    map.panTo(pos);
	
 		var goldStar = {
			path: google.maps.SymbolPath.CIRCLE,
			strokeColor: '#FF4E51',
			fillColor: '#FF4E51',
			fillOpacity: .9,
			strokeWeight: 1,
			scale: 5,
  		};
		 var marker = new google.maps.Marker({
			position: pos,
			icon: goldStar,
			draggable: true,
			map: map
		  });		
		
	 var options = {//opciones de la nueva pocision
			map: map,
			position: pos,
		  };
		  
	send(position.coords.latitude+","+position.coords.longitude);	//enviamos al socket la nueva pocision	  
  	//var infowindow = new google.maps.InfoWindow(options);ventana con informacion
  	map.setCenter(options.position);//pocisionamos el mapa al centro de la nueva locacion
  
  });
}

function handleNoGeolocation(errorFlag) 
{
	  if (errorFlag) 
	  {
		var content = 'Error: The Geolocation service failed.';
	  } 
	  else 
	  {
		var content = 'Error: Your browser doesn\'t support geolocation.';
	  }
	
	  var options = {
		map: map,
		position: new google.maps.LatLng(60, 105),
		content: content
	  };
	
	  var infowindow = new google.maps.InfoWindow(options);
	  map.setCenter(options.position);
}


google.maps.event.addDomListener(window, 'load', initialize);

setTimeout(function(){animar()}, 5000);//cada 5 segundos extraemos la ubicacion nuevamente

function pocision(pos)
{
}

/*
window.onfocus=function(event)
{
    if(event.explicitOriginalTarget===window)
	{
		cargarnotificacionesprueba(animar());
    }
}
 */
 
var timestamp=new Date().getTime();//si el usuario cambia de ventana, al momento de regresar el foco a nuestra
//aplicacion lanzara la nueva ubicacion
function checkResume()
{
    var current=new Date().getTime();
    if(current-timestamp>100)
    {
        var event=document.createEvent("Events");
        event.initEvent("focus",true,true);
        document.dispatchEvent(event);
    }
    timestamp=current;
}

window.setInterval(checkResume,1);
document.addEventListener("focus",function()
{
    animar();
},false);

</script>
  </head>
  <body>
  	<section>
  		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18814.829314352017!2d-100.39519313897334!3d20.65593803041149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDM5JzUzLjIiTiAxMDDCsDI0JzAwLjYiVw!5e0!3m2!1ses!2smx!4v1538256670708" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  	</section>
    <div id="map-canvas"> </div>
  </body>
</html>