# MapmyIndia Interactive Map JS API !

Full documentation available here: [https://www.mapmyindia.com/api/advanced-maps/doc/interactive-map-api](https://www.mapmyindia.com/api/advanced-maps/doc/interactive-map-api). 

You can get your api key to be used in this document here: [https://www.mapmyindia.com/api/signup](https://www.mapmyindia.com/api/signup)

## Introduction
The Interactive Maps JavaScript API based on Leaflet JS helps render and display map tiles while customizing the map's look and feel on mobile or web browser. [Leaflet](https://leafletjs.com) is the leading open-source JavaScript library for mobile-friendly interactive maps i.e. easy to use & high on performance. It is a collection of classes and functions that can be used to implement a host of map features.

**Features:**

-   **Zoom**: Pan-able map of India with 14 zoom levels, 18 being the highest (most detailed) and 4 being the lowest (country level) map display.
-   **Overlays**: The map is the key for any sort of transit and understanding this, we at MapmyIndia provide quick default overlays to reduce the boiler plate code for your code base.
    -   **Map Markers (Pushpins)**: Point to any location using default pushpin behaviours and provide it your own style to make it look more tailored for your application. Note: Have a look at the Plug-ins section to find out what makes it cooler.
    -   **Info Windows (Pop-ups)**: On a Map Clicking is a native behaviour understanding this, we provide out of the box info windows such that if a pushpin is clicked an info window pops up open and you can show your content related to that location there. You can style it to make it behave as required for your UI to be magnificent.
    -   **Polylines**: Connect any two points or even more with out of the box MapmyIndia polylines dedicated to high customizability and performance to suit your use cases. Note: Have a look at the plug-ins we provide to make your polylines have an edge up and suit your use cases in a more integrated manner.
    -   **Polygons**: Show a region in a spotlight with a polygon and show various localized data based on it.
    -   **Circles:** Show instant radial areas of inter
-   **Controls**: because we understand the use cases with a map we provide the below out of the box controls that can be turned off or on based on your requirement and because we care, we provide you to override our controls outlook by providing your own styles or CSS so that you can move them or customize them completely. Controls include:
    -   **Zoom Bar**: (appears by default at the centre on the right side). Helps to provide zoom in and zoom out functionality to the map by default.
    -   **Map Layer Control**: Allows to change the map view from Road to hybrid and visive. Also allows to show traffic layer on map.
    -   **Current Location Control**: Scopes the Map to the viewer’s current location.**  
        Note:**  The location settings must be turned on and must allow the site to fetch the location for this control to work.
    -   **The Search Control**: With MapmyIndia’s interactive map API you get MapmyIndia quick search built in out of the box. The search control is placed in the top left corner by default although you can style it or move it as per your UI. This control provides quick search via a name, address, eLoc (or Place_Id) with built in autosuggest.

**Please Note**: MapmyIndia may extend and enhance functionality for its interactive map API in future, which will be clearly documented in this section, and which will be available through the MapmyIndia.Map class and MapmyIndia.* set of classes generally.

## Getting Started

Now that you’re all caught up with the features let’s get down right to them and look at how can you integrate our Interactive Map to your Website from scratch.

### Initializing The Map

The easiest way to start loading maps in a web page is with a “Hello World” sample code, you can download or view a working “Hello World” sample from the links for adding your first marker below.


### Adding Your First Marker

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/w1ny7ogb)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-hello-world-example) 

The easiest way to start loading maps in a web page is with a “Hello World” sample code, you can download or view a working “Hello World” sample from the links above. 
  
The true hello world in case of a map scenario is plotting a pushpin that says hello world on click. So, to add a marker to the map, simply add the line of code below to the JavaScript:


**Please Note**: -Once you initialize a MapmyIndia Map, you can access all Leaflet functionalities through the, '**L**' and passing it the '**map**' variable to initialize the leaflet into  
- MapmyIndia Map. More documentation on Leaflet and plugins are available at  **leafletjs.org**.  
*All Leaflet functionality will work with MapmyIndia Interactive Map API. - The code shown will display a map centred on New Delhi, India. You need to obtain an API key by signing up for API usage to view a demo or use the sample code.

![](https://www.mapmyindia.com/api/img/demo1.png)

  

### Knowing Properties And Functions

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/tLpa0gfz)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-properties-and-events-example)

You can interact with properties of the Map we provide to suite your case scenarios and add additional customizability to your Map layer and the features it may have to offer on the flipside, functions are a quick go to in case of an event. 

### Using Events

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/tLpa0gfz)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-properties-and-events-example)

Events are basically  **Call-backs**  provided by UI elements or your own custom code base that tell you that something needs to be done.   
For more information on events and the list of all the events supported you can have a quick look at our [full documentation](https://www.mapmyindia.com/api/advanced-maps/doc/interactive-map-api) or the events supported by leaflet in the leaflet documentations and we support all features and functions provided by leaflet.

For a detailed implementation of events and them interacting with the properties and functions have a look at the sample code or a demo or even download a sample code from the links above.

Now that you’re all started up, next we’ll have a look at things from a more functionality point of view.

## Overlays and Controls

We’ve got you up to speed with all the basics you might be needing to implement your own Interactive Map leveraging MapmyIndia’s Interactive Map API. Now let’s look at what all can you add on to your interactive map to make it tailor made for your use cases.

### Markers

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/2z9968pv/)  | [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-marker-example)

Markers are effortless way of pointing to a location, so getting right to it, you can go ahead and add markers that we provide out of the box but just in case you want to add your own, we’ve got that covered for you as well. There are 3 main categories of markers that you can add namely,  
-  **Stock Marker**: The one you get out of the box using our interactive maps API and you can select from a lot of choices.  
-  **Custom Marker**: Just in case you want to provide your own markers, we’ve handled that for you as well.  
-  **HTML Marker**: In case you don’t want to add in an image you can use HTML to create a marker and then plot it on the map as well.
  
Now, that you have a basic understanding of Markers, Functions and Events let’s talk about Info Windows or Pop-Ups.

### Info Windows

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/6gz1nshs)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-info-window-example)

Info Windows are a convenient way of showing data about a marker or in simple words what that marker stands for. The Native behaviour of a user to know about any marker is to try and click on it to know what it’s all about and showing an info window would be the way to go about it:

**Please Note**: MapmyIndia interactive map supports a default info window that you can leverage but we want you to have an option to customize your info window to fit in with your UI and you can do so in the CSS.

For a quick sample or a demo you can follow up with the links on top. 

You can declare an info window in your CSS and write up a quick function to generate data in that info window and on marker click event simple open that info window.

![](https://www.mapmyindia.com/api/img/demo-map-info.png)

Info windows are just a small part of what we can use show our data in a map scenario we deal with more routes than textual data. Let’s have a look at polylines that help us to better represent the route data.

### Polylines

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/zgpnajwr)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-polyline-example)

Polylines are a way of showing movement or transit on a map. We at MapmyIndia understand the ways you can leverage the features offered by a map and one among them is a Polyline.

Polylines are continuous lines consisting of one or more line segments (preferably a geopath). To add a polyline, initialize map as shown in the previous sections and then create a data set. What is a data set? The Data set is the collection of points (latitude and longitude) over which you want the polyline to be drawn.

  
![](https://www.mapmyindia.com/api/img/demo-map-polyline.png)

In real case scenarios, you’ll need to get the data set on the fly or from a service and then you can leverage the events and functions we’ve learnt about to plot the polyline. You also might need to beautify your polyline or add transitions for your UI to look marvellous. Look at the plug-ins section to see about the plug-ins we offer to make your UI stand out.

The polyline is just the beginning, but sometimes you’ll need to mark a territory to properly showcase your information. In such cases a polyline might not be the perfect fit but Polygons and Circles may be the apt choice.

### Polygons

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/8d3vhkz6/)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-polygon-example)

Polygons are a way of showing a territory. In cases where you want to showcase data over an area, polygons are your best pick. You can use them to show Geozones as well.

It’s very like generating a polyline, the basic steps remain the same, create a Data set, generate a polygon and add it to the map.

  
![](https://www.mapmyindia.com/api/img/demo-map-polygon.png)

Now that we’ve covered polygons let’s have a look at **Circles** which provide another way of showcasing territory.

### Circles

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/egfebq0j/11/)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-circle-example)

Circles are way of marking a territory without too much interaction by the user. A circle only has two important values:

-   The Centre point of the circle (in this case it’ll be a latitude with a longitude).
-   The Radius of the circle.

With the two values, you can easily define a quick area of interest on a map.
  
![](https://www.mapmyindia.com/api/img/demo-map-circle.jpg)

And that’s all that’s there to it. You have all the basics you need to get started and fiddle around with things to make your own implementation leveraging MapmyIndia’s Interactive Maps API.

These are just the basics of all but to enhance your experience you might just not want the basics. Let’s have a look at some of the plug-ins we offer to make your users feel amazing and that in turn benefits you.

## Plug-Ins

Now that we’ve handled all the basics along with some controls and overlays you can use to better use the map, we would like to show you how can you extend functionalities of these controls and overlays to make your user experience rich.

Plug-Ins are the best way to extend functionality. You can add custom behaviours for controls or make them interact with other components to achieve desired output.

### Adding A Plug-In

To add any plug in to your project you necessarily need to add a reference to the CSS and the JS files. For each plug-in, the number of these files may vary depending upon the functionality the plug-in provides.

### Basic Cluster

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/6qt66wyk)  | [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-cluster-example)

The MapmyIndia basic cluster provides basic implementation of the leaflet’s cluster functionality.

For a detailed code snippet and explanation please refer to the code sample or the live demo from the links above.

![](https://www.mapmyindia.com/api/img/demo-culster.jpg)

**Please Note**: There is a performance criteria attached to this plug-in. If you have less than 25K (25 thousand) markers and a light weight plug-in this will be an ideal pick but just in case there is a possibility that you’ll have more than 25K markers we would advise go for the MapmyIndia’s Advanced Cluster instead. That can handle enormous amount of data and that too with impressive performance.

### Advanced Cluster

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/xudLa6Lz)  | [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-prune-cluster-example)

In the previous section, we looked at a basic cluster implementation. The advantage of it is that is light weight but on the flipside, it’s a very basic implementation and does not provide much customizability and it can’t handle large data sets. To overcome the above, we’ve got Advanced Cluster. Also based on the leaflet implementation, the MapmyIndia Advanced cluster can handle large data sets with impressive performance. Alongside this, the advanced cluster also provides some cool tweaks that can suit your use case scenarios.

**Please Note**: For a more detailed code snippet follow the links provided above to see the sample code or see a live demo.

### Decorated Polyline

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/1azb62y3/4/)  | [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-api-animated-markers-polyline-example)

In the previous section, we looked at clusters and their implementations. There will be cases where in you would want to get more of your polylines. For such a case scenario, we provide Decorated Polyline.

### KML Overlay

[JSFIDDLE](https://jsfiddle.net/mapmyindia_map/6k7uzm2v/19/)  |  [LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/mapmyindia-maps-kml-example)

**KML**: [Keyhole Markup Language](https://www.opengeospatial.org/standards/kml) is a file format used to display geographic data on maps.
Using this plugin, you can overlay KML data over MapmyIndia Maps for web.

#### Important Notes to remember
1. Only KML data supported.
2. KML file **must** have absolute path or raw KML string 
(in variable or in textbox)
3. All internal URL's path **must** be absolute. 
(for icon path etc)
4. File must not be password protected.
5. File must be CORS enabled.
6. File must follow KML standard strictly.

**Please Note**: For a more detailed code snippet follow the links provided above to see the sample code or see a live demo.

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