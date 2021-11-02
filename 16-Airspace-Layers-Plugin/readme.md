[<img src="https://www.mapmyindia.com/api/img/mapmyindia-api.png" height="40"/> </p>](https://www.mapmyindia.com/api)

# DigitalSky Airspace Layers

## Introduction
This is an easy & FREE to integrate DigitalSky Airspace zones layers widget by MapmyIndia.

The drone airspace map is an interactive map of India that demarcates the yellow and red zones across the country. 

The airspace map may be modified by authorised entities from time to time.
Anyone planning to operate a drone should mandatorily check the latest airspace map for any changes in zone boundaries.

We're helping ANY website or app developer to easily integrate this information, for the benefit of your users and visitors. 

[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-airspace)


## Version History
| Version | Last Updated | Author | Release Note |
| --- | --- | --- | --- |

| 1.0 | 15 October 2021 | Mamta Sharma([MS](https://github.com/mamtasharma117)) | Initial Commit |

<br>

## 3 Step process to integrate DigitalSky Airspace widget in any Web App
<br>

1. #### Step 1
    
    Inside the <head> section of HTML of web page, or wherever else you find more suitable, include the following MapmyIndia javascript code.
    ```html
    <script src="https://apis.mapmyindia.com/advancedmaps/api/<access_token>/map_load?&v=1.5&callback=initmap&airspacelayers" defer async></script>

></script>
    
2. #### Step 2

    Inside the <body> section of HTML of web page, define a div into which the widget needs to be loaded.
    ```html
    <div id=“map”></div>
    ```

3. #### Step 3 
    To load this widget from MapmyIndia, call the following javascript code **AFTER** the mapmyindia javascript file (as defined in step 2) has loaded.
    ```js
    <script>
        function initmap(){
            map = new MapmyIndia.Map('map', {
                center: [28.61, 77.23],
                zoomControl: true,
                location: true,
                });
        }
        </script>
    ```

4. #### Step4

    Below refered code will load the widget directly on the map. It will show 4 layers for Yellow (based on )and Red zones for Drones including a layers showing India International Boundary.[See live Demo](livedemo)

    Yellow zone is the airspace above 400 feet in a designated green zone; above 200 feet in the area located between 8-12 km from the perimeter of an operational airport and above ground in the area located between 5-8 km from the perimeter of an operational airport

    Red zone is the ‘no-drone zone’ within which drones can be operated only after a permission from the Central Government.

    The layers are:
   - id: `coastal_area_india_region_25km` named as `International Boundary - 25km`
   - id: `airport_region_radius_8_to_12_km_yellow` named as `Airport Yellow [8-12]km`
   - id: `airport_region_radius_5_to_8_km` named as `Airport Yellow [5-8]km`
   - id: `airport_region_radius_0_to_5_km` named as `Airport Red`



    ```js
    new MapmyIndia.airspaceLayer(
    {
        'map': map_object,
        'key': '<access_token>',
        'position': 'bottomleft', //options - topright, topleft, bottomright
        //'multiple': true;
        //'defaultLayer':[coastal_area_india_region_25km, airport_region_radius_8_to_12_km_yellow];//this will show only these 2 selected layers.
        //'expand': false;
        //'showControl': 0;
        //'skiplayerIds': [airport_region_radius_0_to_5_km]...this will skip the international boundary layer from the control.
    });
     ```

## Optional Parameters

1. `position`: to set position of layer UI. Default is bottomleft.
2. `multiple`: for multiple layers selection. Default is false.
3. `defaultLayer`: layerId default load on map.If not used all 4 layers will be visible unselected in control.
4. `expand`: expand layer control UI.Default is true.
6. `showControl`: to show or not show controls UI on map default 1. It is for directly loading chosen defaultLayer.
7. `skiplayerIds` to skip any laer form control ie. skiplayerIds:['coastal_area_india_region_25km']

## Additional Methods

To remove all Airspace layers from the map

```js
MapmyIndia.airspaceRemove({map:map_object});
```

To remove a particular layer

```js
MapmyIndia.airspaceRemove({map:map_object, layerId:coastal_area_india_region_25km});
```

## Sample Implementation

```js
<html>

<head>
    <title>MapmyIndia Plugin - airspaceLayers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desciption" content="Mapmyindia airspaceLayers Plugin">
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/<access_token>/map_load?v=1.5&callback=initmap&airspacelayers"></script>
    <style>
        #map {width: 100%;height: 100vh;margin: 0;padding: 0;}
    </style>
</head>

<body>
    <div id="map"></div>
    <script>
        var map;
        function initmap() {
            map = new MapmyIndia.Map('map', {
                center: [28.62, 77.09],
                zoom: 5,
                search: false,
            });
                new MapmyIndia.airspaceLayer(
                {
                    'map': map_object,
                    'key': 'access_token',
                    // 'multiple' : true, // Default false
                    // 'showControl':0, // Default 1
                    // 'expand': false, // Default true
                    // skiplayerIds: ['coastal_area_india_region_25km'],
                    // defaultLayer:['coastal_area_india_region_25km','airport_region_radius_5_to_8_km'],
                    position: 'bottomleft'
                });
           
        }
    </script>
</body>

</html>

```


For any queries and support, please contact: 

[<img src="https://www.mapmyindia.com/images/logo.png" height="50"/> </p>](https://www.mapmyindia.com/api)
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