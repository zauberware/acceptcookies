# acceptcookies - Craft 2 CMS plugin + GoogleAnalytics
Craft 2 plugin for a drop in cookie acceptor with GoogleAnalytics integration and loading of custom scripts

## Features

 - includes GoogleAnalytics
 - allows to load custom scripts
 - Accept / Refuse cookies option for user
 - link to data policy page
 - easy code to change style or behaviour

## Installing

1. Copy the `acceptcookies` directory into your `craft/plugins` directory
2. Browse to Settings > Plugins in the Craft CP
3. Click on the Install button next to Accept Cookies

## Usage
Setup for plugin `http://yourdomain.com/admin/settings/plugins/acceptcookies`

1. Change Google Analytics ID
2. Add custom scripts
3. Link to data policy page
4. Let user reject the acceptor (-> no analytics.js or custom scripts for user)
5. Add `{{craft.acceptCookies.trackingCode|raw}}` in your base layout

Disable acceptor for logged in users ?
```php
{% if not currentUser %}
   {{ craft.acceptCookies.trackingCode|raw }}
{% endif %}
```


### How to load custom font (e.g. Google-Font)
Load font from external services only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
var head  = document.getElementsByTagName('head')[0];
var link  = document.createElement('link');
link.rel  = 'stylesheet';
link.type = 'text/css';
link.id   = 'myfont'

// change the link to an css here
link.href = 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100&amp;subset=latin,latin-ext';

link.media = 'all';
head.appendChild(link);

```

### How to load maps (e.g. Google-Maps)
Load maps from external services only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
var head  = document.getElementsByTagName('head')[0];
var link  = document.createElement('script');
link.id  = 'maps';

// change the API key in the maps link
link.src = 'https://maps.googleapis.com/maps/api/js?key=MAPS_API_KEY&callback=initMap';

link.async = true;
link.defer = true;
head.appendChild(link);

```

### How to facebook plugin
Load facebook plugin from external services only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
// Please use the snippets which facebooks give you. The language and API version from this snippet could be outdated.
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.5&appId=YOUR_APP_ID";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

```

After the script is loaded it will call the function `initMap()`. Put your initialization logic for your maps in there.

## Changelog

* 1.1
 * Allow custom scripts
 * Added translations
 * Added sample to load fonts

* 1.0
	* Basic cookie acceptor. If accepted -> triggers google analytics
	* Simple config/settings
	* Initial release!

## Feature Requests
* custom JS which loads after accepting cookies
* custom css field and basic styling options

Feel free to join !

![zauberware technologies](https://avatars3.githubusercontent.com/u/1753330?s=200&v=4)
