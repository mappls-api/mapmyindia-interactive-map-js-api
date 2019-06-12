<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>MapmyIndia Maps API: Circle Example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon">
                <!--put your map api javascript url with key here-->
        <script src="https://apis.mapmyindia.com/advancedmaps/v1/<js_map_key>/map_load?v=1.3"></script>
        <style type="text/css">
            /*map css **/
            body,html { height: 100%;font-family:Verdana,sans-serif, Arial;color:#555;margin: 0; font-size:12px; padding: 0; background:#fafafa}
            #map{position: absolute;left: 312px; top: 46px;right: 2px; bottom: 2px;border: 1px solid #cccccc; }
            #menu {position: absolute;left: 2px; top: 46px;width: 306px;bottom: 2px;border: 1px solid #cccccc;background-color: #FAFAFA;overflow-x:hidden;overflow-y: auto;}
        </style>
        <script>
            var lat = 28.6129602407977;
            var lon = 77.22945570945740;
            var radius = 100;
            var marker;
            var currentDiameter;

            window.onload = function () {
                document.getElementById('lat').value = lat;
                document.getElementById('lon').value = lon;
                document.getElementById('radius').value = radius;
                if (lat != '' && lon != '' && radius != '') {
                    if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                        var centre = new L.LatLng(lat, lon);
                        map = new MapmyIndia.Map('map', {center: centre, zoomControl: true, hybrid: true});
                        /*1.create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passing it at the minimum div object, all others are optional...
                         2.all leaflet mapping functions can be called simply on the L object
                         3.MapmyIndia may extend and in future modify the customised/forked Leaflet object to enhance mapping functionality for developers, which will be clearly documented in the MapmyIndia API documentation section.*/
                        var icon = L.icon({iconUrl: 'images/Marker.png', iconRetinaUrl: 'images/Marker.png', iconSize: [30, 30]});
                        marker = L.marker(centre, {icon: icon, draggable: true}).addTo(map);
                        marker.on('dragend', function (event) {
                            var position = event.target.getLatLng();
                            document.getElementById('lat').value = position.lat;/***set div elements values***/
                            document.getElementById('lon').value = position.lng;
                            showCircle();
                        });
                        showCircle();
                    }
                }
                else {
                    document.getElementById('result').innerHTML = "Please enter lat/lon/radius";
                }
            };

            function showCircle() {
                document.getElementById('result').innerHTML = "";
                if (currentDiameter)
                    map.removeLayer(currentDiameter);

                lat = document.getElementById('lat').value;
                lon = document.getElementById('lon').value;
                radius = document.getElementById('radius').value;
                if (lat != '' && lon != '' && radius != '') {
                    if (checkValidLatlong(parseFloat(lat), parseFloat(lon))) {
                        if (marker)
                            marker.setLatLng([lat, lon]);
                        currentDiameter = L.circle([lat, lon], {
                            color: 'pink',
                            fillColor: '#FFC0CB',
                            fillOpacity: 0.5,
                            radius: radius
                        });
                        currentDiameter.addTo(map);
                        map.fitBounds(currentDiameter.getBounds());
                    }
                }
                else {
                    document.getElementById('result').innerHTML = "Insufficient parameters";
                }
            }


            function isNumberKeyDecimals(evt) {
                /*check for input boxes*/
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode != 46 && (charCode < 48 || charCode > 57)))
                    return false;
                return true;
            }

            function checkValidLatlong(lat, lon) {
                /*check for input as valid lat lon*/
                if (lat >= 180 || lat <= -180 || lon >= 180 || lon <= -180) {
                    document.getElementById('result').innerHTML = "Invalid Lat lon values";
                    return false;
                } else {
                    return true;
                }
            }


        </script>
        </head>
        <body>
            <div style="border-bottom: 1px solid #e9e9e9;padding:10px 12px;background:#fff;"><span style="font-size: 20px">MapmyIndia Maps API:</span> <span style="font-size:16px;color:#777">Circle Example</span></div>
            <div id="menu">
                <div style="padding: 0 12px 0 12px"> <div style="padding: 5px 0;font-size:13px;color:#222">Enter Latitude</div>
                    <input type="text" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="lat" placeholder="Latitude" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                                showCircle();
                            return isNumberKeyDecimals(event);"><br/>
                        <div style="padding: 5px 0;font-size:13px;color:#222">Enter Longitude</div>
                        <input type="text" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="lon" placeholder="longitude" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                                    showCircle();
                                return isNumberKeyDecimals(event);"/>
                        <div style="padding: 5px 0;font-size:13px;color:#222">Enter Radius (in m)</div>
                        <input type="number" style="width: 254px; margin-right: 10px;padding:5px;border:1px solid #ddd;color:#555" id="radius" placeholder="radius" autocomplete="off" onkeypress="if (event.which == 13 || event.keyCode == 13)
                                    showCircle();
                                return isNumberKeyDecimals(event);"/>
                        <br/><br/><button onclick="showCircle();">Search</button>
                </div>
                <div style="margin-top: 20px">
                    <ul style=" line-height: 20px; font-size: 12px;">
                        <li>Drag marker to geofence at your desired location</li>
                    </ul>
                </div>
                <div style="border-top: 1px solid #e9e9e9;margin-top: 20px;padding: 10px 10px 5px 17px;font-size: 13px;" id="result">loading..</div>
            </div>
            <!--put your map container here-->
            <div id="map"></div>
        </body>
        </html>