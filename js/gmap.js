
var map;
    
      map = new GMaps({
        el: '#map',
            
            lat: 9.996980, 
            lng: -84.674788,
            zoomControl : true,
            zoomControlOpt: {
                style : 'SMALL',
                position: 'TOP_RIGHT',
            },
          
            panControl : false,
            streetViewControl : false,
            mapTypeControl: false,
            overviewMapControl: false, 
          zoom: 14,
      });
        map.addMarker({
            lat: map.getCenter().lat(),
            lng: map.getCenter().lng(),
            
            
            icon: ruta.directorio+'/img/logomap.png',
        });
            
    
    
