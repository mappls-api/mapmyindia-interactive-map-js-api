![MapmyIndia APIs](https://www.mapmyindia.com/api/img/mapmyindia-api.png)

# Corona Safety Check Widget for Interactive Map JS

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
| 0.0.1 | 25 May 2020 | MapmyIndia API Team ([SS](https://github.com/souravsharma110)) |

## Introduction

Corona Safety Check Widget promoted on [MapmyIndia Move](https://maps.mapmyindia.com/corona) are being offered to customers as JS based plugin to overlay on top of MapmyIndia Raster Maps for Web.

This widget allows to check whether you are in a Containment zone area or not, If you are in a Containment zone area it will alert you with a message that you are in a Containment zone or if you are near to Containment zone it will show you that you are further km away from Containment zone


## Live Demo

Visit the following link for visiting the live demo: 
[LIVE DEMO](https://www.mapmyindia.com/api/advanced-maps/doc/sample/safetycheck)

### Implementation

#### Adding the Covid-19 layers to Map

##### Method

```js
    new MapmyIndia.showSafetyCheck();
```

##### Mandatory Parameters
1. map: mapObject

##### Optional Parameters
1. parentDivId: Clients custom div Id in which widget will be loading
2. details: Show details on safety check page, default range is medium
   - low: This only shows the information if you are in a Containment zone or not.
   - medium: This shows us the Name & District of the Containment zone you are in or away along with the information if you are ina Containment zone or not.
   - high: This will show us all the information that is available in low & medium details along with the following details mentioned below:
     - Sample Collection Centre
     - Quarantine Centre
     - Treatment Centre
3. geolocation: To show users geolocation option in widget. It accepts boolean value i.e TRUE or FALSE.
   - TRUE: It will allow you to fetch your current location.
   - FALSE: It will not allow you to fetch your current location.
4. shareOptions: To show users social share options in widget
   - TRUE: It will allow you to share your details over social media platforms.
   - FALSE: It will not allow you to share your details over social media platforms.

### Sample Screenshots

#### In Containment Zone
![](https://mmi-api-team.s3.ap-south-1.amazonaws.com/API-Team/covidImages/inContainment.png)


#### Near Containement Zone
![](https://mmi-api-team.s3.ap-south-1.amazonaws.com/API-Team/covidImages/nearContainment.png)

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