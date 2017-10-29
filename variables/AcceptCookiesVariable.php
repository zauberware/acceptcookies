<?php
namespace Craft;

class AcceptCookiesVariable {
    
    /**
     *  Loads settings for plugin
     */
    public function getSettings() {
        // return 'load tracking code from settings here';
        return craft()->plugins->getPlugin('AcceptCookies')->getSettings();
    }

    /**
     *  Renders the tracking code
     */
    public function getTrackingCode() {
        // Grab the new template's content
        $oldPath = craft()->path->getTemplatesPath();
        $newPath = craft()->path->getPluginsPath() . 'acceptcookies/templates';

        // Set template path to the plugin directory (temporarily)
        craft()->path->setTemplatesPath($newPath);

        // load template
        $templateContent = craft()->templates->render('cookie_notice');

        // Reset the template path
        craft()->path->setTemplatesPath($oldPath);

        // return template
        return $templateContent;
    }
}
