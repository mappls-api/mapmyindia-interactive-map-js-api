
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"lang="en" xml:lang="en">

    <head>
        <title>MapmyIndia Maps API:Cluster Example!</title>
        <link rel="icon" href="http://mapmyindia.com/images/favicon.ico" type="image/x-icon">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style type="text/css">
            html { height: 100%; }
            body { height: 100%;font-family:Verdana,sans-serif, Arial;color:#000;margin: 0; font-size:14px; padding: 0; }
            #map-container {
                position: absolute;
                left: 312px; top: 46px; 
                right: 2px; bottom: 2px; 
                border: 1px solid #cccccc; }
            #result {
                position: absolute; 
                left: 2px; top: 46px;
                width: 306px;
                bottom: 2px; 
                border: 1px solid #cccccc;
                background-color: #FAFAFA;
                overflow: auto;
                font-family:Verdana,sans-serif, Arial;
            }
            button{width: 220px;font-family:Verdana,sans-serif, Arial;font-size:12px;padding:2px 0;color:#333}
        </style>

    

        <!--put your map api javascript url with key here-->
       <script src="https://apis.mapmyindia.com/advancedmaps/v1/<js_lic_key>/map_load?v=0.1"></script>
        <link rel="stylesheet" href="css/MarkerCluster.css" />
        <link rel="stylesheet" href="css/MarkerCluster.Default.css" />       
        <script src="js/leaflet.markercluster-src.js"></script>
        <script>
            var map = null;
            var latitudeArr = [28.549948, 28.552232, 28.551748, 28.551738, 28.548602, 28.554603, 28.545639, 28.544339, 28.553196, 28.545842];
            var longitudeArr = [77.268241, 77.268941, 77.269022, 77.270164, 77.271546, 77.268305, 77.26480, 77.26424, 77.265407, 77.264195];
            var mark = [];
            var singlemarker = null;
            var markers = null;
            var marker_remove = true;
            var markers_remove = true;
            var markerClusters;
            window.onload = function() {
                var test_num_markers = 100;
                
                map=new MapmyIndia.Map('map-container',{ zoomControl: true,hybrid:true,zoom:10});/*map initialized*/
                 /*1.create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...
                  2.all leaflet mapping functions can be called simply on the L object
                  3.MapmyIndia may extend and in future modify the customised/forked Leaflet object to enhance mapping functionality for developers, which will be clearly documented in the MapmyIndia API documentation section.*/
                var test_num_markers = 100;
                //function to generate random markers//
                var generate_markers = function(num_markers) {
                    var bounds = map.getBounds();
                    var map_sw = bounds.getSouthWest();
                    var map_ne = bounds.getNorthEast();
                    var lng_span = map_ne.lng - map_sw.lng;
                    var lat_span = map_ne.lat - map_sw.lat;
                    var markers = [];
                    markerClusters = L.markerClusterGroup({chunkedLoading: true, maxClusterRadius: 100, disableClusteringAtZoom: 26, singleMarkerMode: false, addRegionToolTips: false});
                    /* by default the Cluster group some defaults:
                    showCoverageOnHover: When you mouse over a cluster it shows the bounds of its markers.
                    zoomToBoundsOnClick: When you click a cluster we zoom to its bounds.
                    spiderfyOnMaxZoom: When you click a cluster at the bottom zoom level we spiderfy it so you can see all of its markers. (Note: the spiderfy occurs at the current zoom level if all items within the cluster are still clustered at the maximum zoom level or at zoom specified by disableClusteringAtZoom option)
                    removeOutsideVisibleBounds: Clusters and markers too far from the viewport are removed from the map for performance.
                    spiderLegPolylineOptions**/

                    var event_div = document.getElementById("event-log");
                    for (var i = 0; i < num_markers; ++i) {
                        var pt = new L.LatLng(map_sw.lat + Math.random() * lat_span, map_sw.lng + Math.random() * lng_span);
                        var m = new L.marker(pt,{draggable: true});
                        m.bindPopup("marker clicked");
                        /*events on marker*/
                        m.on('click', function (a) {
                        event_div.innerHTML = 'marker is clicked';
                        });                    
                        
                        markers.push(m);
                    }
                    markerClusters.addLayers(markers);//Bulk adding : addLayers is bulk methods for adding markers //
                    map.addLayer(markerClusters);//add marker cluster to map//

                    /*events on marker cluster: clusterclick,mouseover,mouseout*/
                    markerClusters.on('clusterclick', function (a) {
                            event_div.innerHTML = 'This cluster contains '+ a.layer.getAllChildMarkers().length + ' markers';
                    });
                    /*getAllChildMarkers: Returns the array of total markers contained within that cluster.
                      getChildCount: Returns the total number of markers contained within that cluster.
                    */
                    markerClusters.on('clustermouseover', function (a) {
                            event_div.innerHTML = 'This cluster contains '+ a.layer.getAllChildMarkers().length + ' markers; click to view the markers';
                    });
                    return markers;
                };
                markers = generate_markers(test_num_markers);
            };

            var addMarker = function(pt) {
                return new L.marker(pt,{
                    draggable: true,
                });
            }

            var mapmyindia_add_marker = function() {
                /*Adding and removing Markers: addLayer, removeLayer and clearLayers are methods that allows the operation.
                Bulk adding and removing Markers: addLayers and removeLayers are bulk methods for adding and removing markers 
                */
                if (marker_remove) {
                    var pt = new L.LatLng(28.6099808, 77.2882724);
                    singlemarker = addMarker(pt);
                    markerClusters.addLayer(singlemarker);                    
                }
                else {
                    markerClusters.removeLayer(singlemarker);
                    singlemarker = null;
                }

                markerClusters.refreshClusters();
                var marker = document.getElementById("marker");
                marker.innerHTML = marker_remove ? "Remove Marker" : "Add Marker";
                marker_remove = marker_remove ? false : true;
            }

            var mapmyindia_add_markers = function() {
                  /*Adding and removing Markers: addLayer, removeLayer and clearLayers are methods that allows the operation.
                Bulk adding and removing Markers: addLayers and removeLayers are bulk methods for adding and removing markers 
                */
                if (markers_remove) {
                    for (var i = 0; i < latitudeArr.length; i++) {
                        var postion = new L.LatLng(latitudeArr[i], longitudeArr[i]);/*WGS location object*/
                        mark.push(addMarker(postion));
                    }
                    markerClusters.addLayers(mark);
                }
                else {
                    markerClusters.removeLayers(mark);
                    delete mark;
                    mark = [];
                }
                markerClusters.refreshClusters();
                var markers = document.getElementById("markers");
                markers.innerHTML = markers_remove ? "Remove Markers" : "Add Markers";
                markers_remove = markers_remove ? false : true;


            }

            var mapmyindia_clear_cluster = function() {
               map.removeLayer(markerClusters);/*Removes all clusters from map however the markerclusters are retained*/
            }

            var mapmyindia_redraw_cluster = function() {
                map.addLayer(markerClusters);/*add marker cluster to map*/
                markerClusters.refreshClusters();/*Redraws all cluster icons in the Marker Cluster Group to be re-drawn.*/
            }

        </script>
    </head>
    <body>
        <div style="border-bottom: 1px solid #e9e9e9;padding:10px 12px;"><span style="font-size: 20px">MapmyIndia Maps API:</span><span style="font-size:16px;color:#777">Cluster Example</span></div>
        <div id="result">
            <div style="padding: 16px 12px 6px 38px"><button onclick="mapmyindia_redraw_cluster()" style="width: 220px;">Redraw Cluster</button></div>
            
            <div style="padding: 6px 12px 6px 38px"><button onclick="mapmyindia_add_marker()" style="width: 220px;" id="marker">Add marker</button></div>
            <div style="padding: 6px 12px 6px 38px"><button onclick="mapmyindia_add_markers()" style="width: 220px;" id="markers">Add markers</button></div>
            <div style="padding: 6px 12px 6px 38px"><button onclick="mapmyindia_clear_cluster()" style="width: 220px;">Clear Cluster</button></div>
            <div style="padding:14px 12px 6px 38px;color: #333;">Event Logs</div>
            <div style="padding:6px 12px 6px 38px;color: #777; font-size: 12px; line-height: 22px;" id="event-log"></div>
        </div>
        <div id="map-container"></div>
    </body>
</html>
