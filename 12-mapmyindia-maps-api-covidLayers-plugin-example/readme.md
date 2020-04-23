![MapmyIndia APIs](https://www.mapmyindia.com/api/img/mapmyindia-api.png)

# Covid-19 Layers Overlay Plugin for Interactive Map JS

**Easy To Integrate Maps & Location APIs & SDKs For Web & Mobile Applications**

Powered with India's most comprehensive and robust mapping functionalities.
**Now Available**  for Srilanka, Nepal, Bhutan and Bangladesh

1. **Full documentation** available here: [https://www.mapmyindia.com/api/advanced-maps/doc/interactive-map-api](https://www.mapmyindia.com/api/advanced-maps/doc/interactive-map-api). 
You can get your api key to be used in this document here: [https://www.mapmyindia.com/api/signup](https://www.mapmyindia.com/api/signup)

2. Copy and paste the JavaScript API key from your dashboard (http://www.mapmyindia.com/api/dashboard) in the sample code for interactive map development

3. The sample code is provided to help you understand the very basic functionality of MapmyIndia APIs. 

## Version History

| Version | Last Updated | Author |
| ---- | ---- | ---- |
| 0.0.1 | 23 April 2020 | MapmyIndia API Team ([KB](https://github.com/kunalbharti)) |

## Introduction

Covid-19 Layers promoted on [MapmyIndia Move](https://maps.mapmyindia.com/corona) are being offered to customers as JS based plugin to overlay on top of MapmyIndia Raster Maps for Web.
This plugin allows easy overlay of such layers and their layer controls to be displayed on a webpage integrating our Raster JS based web SDK.

## Supported Layers

1. State Wise Corona Cases
2. Treatment Centres
3. Testing Lab 
4. Sample Collection Centres
5. Isolation Centres 
6. Containment Zones
7. District Containment Zone
8. Delhi Government Ration Shops
9. Hunger Relief Centres | Source: MyGov
10. Hunger & Night Shelter | Source: MyGov, NDMA

+ more that will be added dynamically by MapmyIndia without incurring any additional development effort for those who integrate this JS.


## Usage

### Important Notes to remember
 
1. The JS SDK version has been changed to `v=1.5` from `v=1.3` .
    ```html
    https://apis.mapmyindia.com/advancedmaps/v1/map_js_key/map_load?v=1.5&plugins=coronaLayers
    ```
2. The plugin for COVID-19 layers is called `coronaLayers`. To be used as `plugins=coronaLayers`.
3. The new version (`v=1.5`) of JS SDK supports all previous plugins and methods and widgets from `v=1.3`.
4. This version of SDK also introduces a callback method for SDK initialization. To be used as: 
    ```html
    https://apis.mapmyindia.com/advancedmaps/v1/map_js_key/map_load?v=1.5&plugins=coronaLayers&callback=init
    ```

## Live Demo

Visit the URL below for visiting the live demo: 
[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/coronalayer)

### Implementation

#### Adding the Covid-19 layers to Map

##### Method

```js
new MapmyIndia.covidLayer({'map':mapObj});
```

##### Mandatory Parameters
1. map: mapObject


##### Optional Parameters
1. `position`: to set position of layer UI default bottomleft
2. `multiple`:  for multiple layers selection default false
3. `defaultLayer`:  layerId default load on map
4. `expand`:  expand layer control UI true/false default false
5. `info`:  to show info in popup on click true/false default true
6. `infocallback`:  callback method for getting click info rmation
7. `showControl`:  to show or not show controls UI on map default true.
its for directly loading defaultLayer only
8. `skiplayerIds` to skip any laer form control
 ie. `skiplayerIds:['state_corona_stats','containment_zone_gradient']`

#### Getting the list of Covid-19 layers

##### Method

```js
var layers= MapmyIndia.covidLayer();
```

#### Removing the Covid-19 layers from Map

##### Method

```js
MapmyIndia.covidRemove();
```

### Sample Screenshots

#### Containment Zones
![](https://mmi-api-team.s3.ap-south-1.amazonaws.com/API-Team/covidImages/containmentZone.png)


#### Testing Labs
![](https://mmi-api-team.s3.ap-south-1.amazonaws.com/API-Team/covidImages/testingLabs.png)

That's All Folks !

For any queries and support, please contact: 

[<img src="https://www.mapmyindia.com/images/logo.png" height="40"/> </p>](https://www.mapmyindia.com/api)
Email us at [apisupport@mapmyindia.com](mailto:apisupport@mapmyindia.com)

![](https://www.mapmyindia.com/api/img/icons/stack-overflow.png)
[Stack Overflow](https://stackoverflow.com/questions/tagged/mapmyindia-api)
Ask a question under the mapmyindia-api

![](https://www.mapmyindia.com/api/img/icons/support.png)
[Support](https://www.mapmyindia.com/api/index.php#f_cont)
Need support? contact us!

![](https://www.mapmyindia.com/api/img/icons/blog.png)
[Blog](http://www.mapmyindia.com/blog/)
Read about the latest updates & customer stories


> © Copyright 2020. CE Info Systems Pvt. Ltd. All Rights Reserved. | [Terms & Conditions](http://www.mapmyindia.com/api/terms-&-conditions)