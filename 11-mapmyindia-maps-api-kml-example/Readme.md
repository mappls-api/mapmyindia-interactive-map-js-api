![MapmyIndia APIs](https://www.mapmyindia.com/api/img/mapmyindia-api.png)

# KML Overlay Plugin for Interactive Map JS

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
| 0.5.2 | 17 October 2018 | MapmyIndia API Team (BM) |

## Introduction

**KML**: [Keyhole Markup Language](https://www.opengeospatial.org/standards/kml) is a file format used to display geographic data on maps.
Using this plugin, you can overlay KML data over MapmyIndia Maps for web.

## Usage

### Important Notes to remember
 
1. Only KML data supported.
2. KML file **must** have absolute path or raw KML string 
(in variable or in textbox)
3. All internal URL's path **must** be absolute. 
(for icon path etc)
4. File must not be password protected.
5. File must be CORS enabled.
6. File must follow KML standard strictly.

### Implementation

```js
var kmlLayer=new MapmyIndia.kml(map,"https://www.mapmyindia.com/api/advanced-maps/doc/sample/mmi.kml", {fitBounds:true,async: true});
```
#### Parameters
1. Map object assigned earlier i.e.
```js
var map= new MapmyIndia.Map('map',{center:centre,zoomControl: true,hybrid:true });
```
2. Absolute URL / Raw Data
3. Options: 
	- `fitBounds:true` (boolean; default false)
	- `async:true` (boolean; default true)

#### Error Handling

- *Map not initialized*
Error:wrong map object for kml, enter variable of new `MapmyIndia.Map`
- *Path issue console message*
Error:Not able to read file, check if file has absolute path & CORS allowed for accessing the file.

### Example

#### Absolute Path

[https://www.mapmyindia.com/api/advanced-maps/doc/sample/mmi.kml](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mmi.kml)

OR

#### Raw File

```xml
<?xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://www.opengis.net/kml/2.2">
  <Document>
    <name>KmlFile</name>
    <Style id="mmi_office">
      <IconStyle>
        <Icon>
          <href>https://maps.mapmyindia.com/images/marker.png
          </href>
        </Icon>
      </IconStyle>
      <LineStyle>
      <color>A600CC33</color>
      <width>10</width>
    </LineStyle>
    <PolyStyle>
      <color>1A0000FF</color>
      <fill>1</fill>
      <outline>1</outline>
    </PolyStyle>
    </Style>
       <Placemark>
      <name>MapmyIndia old Office</name>
      <styleUrl>#mmi_office</styleUrl>
      <ExtendedData>
      </ExtendedData>
      <Point>
        <coordinates>77.268038,28.549652,0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <name>MapmyIndia New Office</name>
      <styleUrl>#mmi_office</styleUrl>
         <Point>
        <coordinates>77.268952,28.5510446,0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
    <name>Direction</name>
    <description><![CDATA[Direction]]></description>
    <styleUrl>#mmi_office</styleUrl>
    <LineString>
      <coordinates>
            77.268953,28.551042
            77.268649,28.551005
            77.268392,28.550986
            77.268231,28.550967
            77.268177,28.550967
            77.268016,28.550958
            77.267587,28.55092
            77.267651,28.550722
            77.267823,28.55042
            77.267802,28.550128
            77.267995,28.549751
            77.268039,28.549652
          </coordinates>
    </LineString>
  </Placemark>
  </Document>
</kml>
```
## Live Demo

Visit the URL below for visiting the live demo: 
[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-kml-example)

For any queries and support, please contact: 

![Email](https://www.google.com/a/cpanel/mapmyindia.co.in/images/logo.gif?service=google_gsuite) 
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


> © Copyright 2019. CE Info Systems Pvt. Ltd. All Rights Reserved. | [Terms & Conditions](http://www.mapmyindia.com/api/terms-&-conditions)
>  Written with [StackEdit](https://stackedit.io/) by MapmyIndia.