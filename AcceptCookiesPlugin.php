<?php

namespace Craft;

/**
 * AcceptCookies Plugin.
 *
 * Plugin to display cookie acceptor on page. If user accepts, the plugin enables GoogleAnalytics 
 *
 * @author    Simon Franzen <simon@zauberware.com>
 * @copyright Copyright (c) 2017, Simon Franzen @ zauberware technologies
 * @license   http://buildwithcraft.com/license Craft License Agreement
 *
 * @link      http://github.com/....
 * @since     1.0
 */

class AcceptCookiesPlugin extends BasePlugin {
    function getName() { return 'Accept Cookies'; }
    function getVersion() { return '1.1'; }
    function getDeveloper() { return 'zauberware technologies'; }
    function getDeveloperUrl() { return 'https://www.zauberware.com'; }

    protected function defineSettings() {
        return array(
            'googleAnalyticsTrackingId' => array(AttributeType::String,'default' => 'UA-YYYYYYYY-X'),
            'codeSnippets' => '',
            'policyUrl' => '/data-policy',
            'showRejectButton' => array('default' => true)
        );
    }

    public function getSettingsHtml() {
        return craft()->templates->render('acceptcookies/settings', array(
            'settings' => $this->getSettings()
        ));
    }

    public function prepSettings($settings) {
        // showRejectButton needs to be made a boolean?
        // we're getting an empty string from the settings page
        return $settings;
    }
}
