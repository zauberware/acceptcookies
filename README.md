# acceptcookies - CraftCMS plugin + GoogleAnalytics
CraftCMS plugin for a drop in cookie acceptor with GoogleAnalytics integration and loading of custom scripts

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
{{ craft.acceptCookies.trackingCode|raw }}
```


### How to load custom font (e.g. Google-Font)
Load font from external services only after user accepts cookies. Use this example code to put into the custom script section of plugin settings.

```
var head  = document.getElementsByTagName('head')[0];
var link  = document.createElement('link');
link.rel  = 'stylesheet';
link.type = 'text/css';

# change the link to an css here
link.href = 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700,100&amp;subset=latin,latin-ext';

link.media = 'all';
head.appendChild(link);

```

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
