# acceptcookies - CraftCMS plugin + GoogleAnalytics
CraftCMS plugin for a drop in cookie acceptor with GoogleAnalytics integration.

## Features

- includes GoogleAnalytics
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
2. Link to data policy page
3. Let user reject the acceptor (-> no analytics.js for user)
4. Include {{craft.acceptCookies.trackingCode|raw}} in your `_layout.twig`

Disable acceptor for logged in users ?
```php
{% if not currentUser %}
   {{ craft.acceptCookies.trackingCode|raw }}
{% endif %}
```

## Updates

* 1.0.0
	* Basic cookie acceptor. If accepted -> triggers google analytics
	* Simple config/settings
	* Initial release!

## Feature Requests
* custom JS which loads after accepting cookies
* custom css field and basic styling options

Feel free to join !

![zauberware technologies](https://avatars3.githubusercontent.com/u/1753330?s=200&v=4)
