# Map Properties

Please refer to the map properties implemented and available from version 1.5

## Implementation

#### Script URL

```js
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<your-map-key>/map_load?v=1.5"></script>
```

#### Method

```js
var map= new MapmyIndia.Map
```

#### Mandatory Parameters
1. mapDiv: The div where map is rendered.

#### Optional Parameters
1. Center: centerpoints;  _defines the center of the map_
1. zoomControl: true; _to show or hide the zoom controls_
1. coronaLink: false; _to show or hide the corona layers link_
1. token_callback: function(d){console.log(d);} _callback for token expiry_
1. search: false, _to show or hide the search bar_
1. Traffic: true, _to show or hide the traffic layer_
1. zoom:17; _to set the zoom level of the map_
1. fullscreen: true, _to allow full screen map_
1. scrollwheel: true  _to allow the scrollwheel for map zooming_
1. hybrid: true; _to show or hide the hybrid layer_
1. location: true;   _Scopes the Map to the viewer’s current location_
1. Optional Other setting for location

```
    location:{
          callback: Method, _callback method to get every location change_
          marker: false, _Hide current location marker, default true_
          setView: false, _set Map view to current location,  default true_
          watch: true _continuous getting location if location button is active, it will inactive once map manually drag or click on active location 
                  button again , default is false_
    }
```


### Sample code Snippet

```html
<!DOCTYPE html>
<html>
<head>
    <title>MapmyIndia Maps: Hello World!</title>
    <script type="text/javascript">
    </script>
    
   <script src="https://apis.mapmyindia.com/advancedmaps/api/<token>/map_load?v=1.5&callback=init" async defer></script>
   <style>
   #map  {margin: 0;padding: 0;width: 100%;height: 100%;}
   </style>
   <script language="javascript">
      function init() {
        var centre = new L.LatLng(28.61, 77.23);
        map=new MapmyIndia.Map('map',{center:centre,search:false,token_callback:tokenExpire });
        var marker=L.marker(centre).addTo(map);/**--add marker at the centre of map--**/
        marker.bindPopup('Hello World');
      }
      function tokenExpire(r)
      {
        	window.location.reload();
	        /*map.setToken(<token>); // to set new token */
      }
   </script>
</head>
<body>
   <div id="map"></div>
</body>                                                                                                                          
</html>
```

That's All Folks !