# acceptcookies - Craft 2 CMS plugin
Craft 2 plugin for a drop in cookie acceptor to load GoogleAnalytics or other external resources only after the user accepts the Privacy Policy.

**You don't use Craft ?** This [gist](https://gist.github.com/simonfranzen/8d832e2bc02dc6716aaf05c15fe34ca9) is a good starting point. In the end it's just plain HTML/CSS/JS! 👏

## Features

 * Load GoogleAnalytics code only after accepting the notice.
 * Provide link to opt-out from analytics services.
 * Allows to load custom scripts like fonts, iframes, youtube videos, facebook, twitter plugin etc...
 * "Refuse cookies"-option for user
 * Set link to data policy page in settings.
 * Easy code to change style or behaviour.
 * No dependencies, just a few lines of HTML, JS and CSS


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

### Opt-Out link in your data policy

You can provide your visitors a link to opt-out of google analytics. This is the link to deactivate the tracking:

```
<a href="javascript:gaOptout();">Deactivate Google Analytics</a>
```


### Custom scripts under settings

#### How to load custom font (e.g. Google-Font, Adobe TypeKit)
Load font from external services only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
var head  = document.getElementsByTagName('head')[0];
var link  = document.createElement('link');
link.rel  = 'stylesheet';
link.type = 'text/css'; // if you include TypeKit then remove this line
link.id   = 'myfont'

// change the link to an css here
link.href = 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100&amp;subset=latin,latin-ext';

link.media = 'all';
head.appendChild(link);

```

#### How to load maps (e.g. Google-Maps)
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

#### How to load Google Tag Manager (gtag.js)
Load Google Tag Manager script only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
var head  = document.getElementsByTagName('head')[0];
var gtagscript  = document.createElement('script');
gtagscript.src= "https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X";
gtagscript.async = true;
head.appendChild(gtagscript);

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-XXXXXXXXX-X');

```

#### How to facebook plugin
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

### Experimental

#### Load iframes after visitor accepts

Write the following iframe in this way:

```
<div iframe-data="https://www.mylink.to/an/external/resource.mp4">
  You have to accept cookies to view this video.
</div>
```

The script will parse all [iframe-data] - elements and converts them into iframes 


After the script is loaded it will call the function `initMap()`. Put your initialization logic for your maps in there.

## Changelog

* 2.0
 * GDPR ready!
 * Optimized sentence in cookie acceptor.
 * Experimental: Load iframe, only after user accepts cookie.


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
