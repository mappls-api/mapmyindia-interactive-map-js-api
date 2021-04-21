[<img src="https://www.mapmyindia.com/api/img/mapmyindia-api.png" height="40"/> </p>](https://www.mapmyindia.com/api)

# MapmyIndia Heat Map Plugin for Interactive Map JS SDK

**Easy To Integrate Maps & Location APIs & SDKs For Web & Mobile Applications**

Powered with India's most comprehensive and robust mapping functionalities.
**Now Available**  for Srilanka, Nepal, Bhutan, Bangladesh and Myanmar.

1. Copy and paste the JavaScript API key from your dashboard (http://www.mapmyindia.com/api/dashboard) in the sample code for interactive map development. 

2. The sample code is provided to help you understand the very basic functionality of MapmyIndia APIs. 

## Version History

| Version | Last Updated | Author |
| ---- | ---- | ---- |
| 0.0.1 | 21 April 2021 | MapmyIndia API Team ([MS](https://github.com/mamtasharma117)) |

## Introduction

The Heat map plugin for MapmyIndia Interactive Map JS library is provided for leaflet to illustrate the very basic functionality of HeatMapLayer over MapmyIndia base maps.

The plugin can be used in combination with our Interactive Map JS library but it also possesses the adaptability to be used as an independent plugin within any web map implementation that uses Leaflet JS as its map framework. 

## Live Demo

Visit the following link for visiting the live demo: 

[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-heatmap)

The above implementation uses MapmyIndia Interactive Map JS library as map rendering heat map.

## Implementation

### Adding the MapmyIndia Heatmap plugin script

#### Script URL

```js
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<token/key>/map_load?v=1.5&plugins=heatmap"></script>
```

### Adding the heatmap

#### Method

```js
var heat = L.heatLayer(data, { minOpacity:.5,radius:25,gradient:{0.2:'red',0.5:'blue'} });
```

#### Mandatory Parameters
1. `data`: Data based on which the heat map is generated. Consists of an array of coordinate pairs (lat,long) as well as their color intensity values ranging from 0 to 1. Each point in the input array can be either an array like [50.5, 30.5, 0.5], or a Leaflet-compatible LatLng object.<br> Example: 
    ```js
    var data=[[28.61477333,77.2425878,0.2],[28.612735,77.248696,0.5]];
    ```
2. options:
      - `minOpacity` - the minimum opacity the heat will start at
      - `maxZoom` - zoom level where the points reach maximum intensity (as intensity scales with zoom), equals maxZoom of the map by default.
      - `max` - maximum point intensity, 1.0 by default
      - `radius` - radius of each "point" of the heatmap, 25 by default
      - `blur` - amount of blur, 15 by default
      - `gradient` - color gradient config, e.g. {0.4: 'blue', 0.65: 'lime', 1: 'red'}


### Removing the heat map

#### Method

```js
map.removeLayer(heat);
```

### Sample code Snippet

```html
<!DOCTYPE html>
<html>
 <head>
    <title>MapmyIndia - Heatmap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="Mapmyindia Heatmap">
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/<token/key>/map_load?v=1.5&plugins=heatmap"></script>
    <style>
        body{margin: 0}
        #map{
            width: 100%; height: 100vh;margin:0;padding: 0;
        }
       
    </style>
    </head>
    <body>
        <div id="map"></div>
        <script>
            /*Map Initialization*/
            var map = new MapmyIndia.Map('map', {center: [28.61677,77.246809], zoom: 14, search: false});
            /*Heatmap*/
            var data=[
                    [28.61477333,77.2425878,.2],
                    [28.61477333,77.2425878,.2],
                    [28.61477333,77.2425878,.2],
                    [28.61477333,77.2425878,.2],
                    [28.61477333,77.2425878,.2],
                    [28.612735,77.249696,0.2],
                    [28.612735,77.248696,0.5],
                    [28.612735,77.248696,0.5],
                    [28.613735,77.249696,0.5],
                    [28.612735,77.249696,0.2],
                    [27.612735,77.249696,0.2],
                    [27.612735,77.249696,0.2],
                    [27.612735,77.249696,0.2],
                    [27.612735,77.239696,0.5],
                    [27.610735,77.249696,0.5]
                ];
                var heat = L.heatLayer(data, { minOpacity:.5,radius:25,gradient:{0.2:'red',0.5:'blue'} });
                map.addLayer(heat);
        </script>
    </body>
</html>
```

That's All Folks !

For any queries and support, please contact: 

[<img src="https://www.mapmyindia.com/images/logo.png" height="40"/> </p>](https://www.mapmyindia.com/api)
Email us at [apisupport@mapmyindia.com](mailto:apisupport@mapmyindia.com)


![](https://www.mapmyindia.com/api/img/icons/support.png)
[Support](https://www.mapmyindia.com/api/index.php#f_cont)
Need support? contact us!

<br></br>
<br></br>

[<p align="center"> <img src="https://www.mapmyindia.com/api/img/icons/stack-overflow.png"/> ](https://stackoverflow.com/questions/tagged/mapmyindia-api)[![](https://www.mapmyindia.com/api/img/icons/blog.png)](http://www.mapmyindia.com/blog/)[![](https://www.mapmyindia.com/api/img/icons/gethub.png)](https://github.com/MapmyIndia)[<img src="https://mmi-api-team.s3.ap-south-1.amazonaws.com/API-Team/npm-logo.one-third%5B1%5D.png" height="40"/> </p>](https://www.npmjs.com/org/mapmyindia) 



[<p align="center"> <img src="https://www.mapmyindia.com/june-newsletter/icon4.png"/> ](https://www.facebook.com/MapmyIndia)[![](https://www.mapmyindia.com/june-newsletter/icon2.png)](https://twitter.com/MapmyIndia)[![](https://www.mapmyindia.com/newsletter/2017/aug/llinkedin.png)](https://www.linkedin.com/company/mapmyindia)[![](https://www.mapmyindia.com/june-newsletter/icon3.png)](https://www.youtube.com/user/MapmyIndia/)




<div align="center">@ Copyright 2021 CE Info Systems Pvt. Ltd. All Rights Reserved.</div>

<div align="center"> <a href="https://www.mapmyindia.com/api/terms-&-conditions">Terms & Conditions</a> | <a href="https://www.mapmyindia.com/about/privacy-policy">Privacy Policy</a> | <a href="https://www.mapmyindia.com/pdf/mapmyIndia-sustainability-policy-healt-labour-rules-supplir-sustainability.pdf">Supplier Sustainability Policy</a> | <a href="https://www.mapmyindia.com/pdf/Health-Safety-Management.pdf">Health & Safety Policy</a> | <a href="https://www.mapmyindia.com/pdf/Environment-Sustainability-Policy-CSR-Report.pdf">Environmental Policy & CSR Report</a>

<div align="center">Customer Care: +91-9999333223</div>