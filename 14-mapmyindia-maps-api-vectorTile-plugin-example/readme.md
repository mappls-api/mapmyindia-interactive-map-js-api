![MapmyIndia APIs](https://www.mapmyindia.com/api/img/mapmyindia-api.png)

# MapmyIndia Vector Tiles Plugin for Interactive Map JS SDK

**Easy To Integrate Maps & Location APIs & SDKs For Web & Mobile Applications**

Powered with India's most comprehensive and robust mapping functionalities.
Explore through [238 nations](https://github.com/MapmyIndia/mapmyindia-rest-api/blob/master/docs/countryISO.md) with Global Search, Routing and Mapping APIs & SDKs by MapmyIndia.

1. Copy and paste the JavaScript API key from your dashboard (http://www.mapmyindia.com/api/dashboard) in the sample code for interactive map development. 

2. The sample code is provided to help you understand the very basic functionality of MapmyIndia APIs. 

## Version History

| Version | Last Updated | Author |
| ---- | ---- | ---- |
| 0.0.1 | 06 August 2020 | MapmyIndia API Team ([KB](https://github.com/kunalbharti)) |

## Introduction

The Vector tiles plugin for MapmyIndia Interactive Map JS library is provided as a means to enable rendering of MapmyIndia base maps as Vector tile format. The format offers significant advantages over traditional Raster tiles such as: 
- Higher zoom levels
- Ability to zoom fractionally, rather than in integer steps.

The plugin can be used in combination with our Interactive Map JS library but it also possesses the adaptability to be used as an independent plugin within any web map implementation that uses Leaflet JS as its map framework. Thus it enables developers to include MapmyIndia Vector Map tiles in their own custom Leaflet JS frameworks easily.


## Live Demo

Visit the following link for visiting the live demo: 

[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/map_sdk/leaflet_vector)

The above implementation uses MapmyIndia Interactive Map JS library as map rendering framework with Vector Tile plugin.

## Implementation

### Adding the MapmyIndia Vector Tiles plugin script

#### Script URL

```js
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<your-map-key>/map_load?v=1.5&vectorLayer"></script>
```

### Adding the MapmyIndia Vector Tiles

#### Method

```js
var mmTile= new MapmyIndia.tiles().addTo(mapDiv);
```

#### Mandatory Parameters
1. mapDiv: The div where map is rendered.

### Removing the Vector Tiles

#### Method

```js
Map.removeLayer(mmiTile);
```

#### Mandatory Parameters
1. mmiTile: The variable used to add MapmyIndia Vector Map tiles to div.

### Sample code Snippet

```html
<!DOCTYPE html>
<html>
<head>
<title>MapmyIndia - Tiles</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" ></script>
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<your-map-key>/map_load?v=1.5&vectorLayer"></script>
</head>
<body>
<div id="mapid" style="width: 100%; height: 98vh;"></div>
<script>
      var mymap = L.map('mapid').setView([28.505, 77.09], 13);
       //ADD MAPMYINDIA TILES LAYER
       var mmTile= new MapmyIndia.tiles().addTo(mymap);       
       /*Map.removeLayer(mmiTile);*/
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




<div align="center">@ Copyright 2020 CE Info Systems Pvt. Ltd. All Rights Reserved.</div>

<div align="center"> <a href="https://www.mapmyindia.com/api/terms-&-conditions">Terms & Conditions</a> | <a href="https://www.mapmyindia.com/about/privacy-policy">Privacy Policy</a> | <a href="https://www.mapmyindia.com/pdf/mapmyIndia-sustainability-policy-healt-labour-rules-supplir-sustainability.pdf">Supplier Sustainability Policy</a> | <a href="https://www.mapmyindia.com/pdf/Health-Safety-Management.pdf">Health & Safety Policy</a> | <a href="https://www.mapmyindia.com/pdf/Environment-Sustainability-Policy-CSR-Report.pdf">Environmental Policy & CSR Report</a>

<div align="center">Customer Care: +91-9999333223</div>
