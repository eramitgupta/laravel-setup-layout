<?php

/*
 * Author: eramitgupta
 * Email: info.eramitgupta@gmail.com
 * 
 * Copyright (c) 2024 by eramitgupta.
 * All rights reserved.
 *
 * You cannot steal and copy my code, I have the copyright, I do not give authority.
 */

namespace LaravelSetupLayout\Core;

class Theme
{
    public static $htmlAttributes = [];
    public static $htmlClasses = [];

    public static $javascriptFiles = [];
    public static $cssFiles = [];
    public static $vendorFiles = [];
    public static $webAssets = [];


    function addHtmlAttribute($scope, $name, $value)
    {
        self::$htmlAttributes[$scope][$name] = $value;
        // dump(self::$htmlAttributes);
    }

    /**
     * Add multiple HTML attributes by scope
     *
     * @param $scope
     * @param $attributes
     *
     * @return void
     */
    function addHtmlAttributes($scope, $attributes)
    {
        foreach ($attributes as $key => $value) {
            self::$htmlAttributes[$scope][$key] = $value;
        }
    }

    /**
     * Add HTML class by scope
     *
     * @param $scope
     * @param $value
     *
     * @return void
     */
    function addHtmlClass($scope, $value)
    {
        self::$htmlClasses[$scope] = $value;
    }

    /**
     * Print HTML attributes for the HTML template
     *
     * @param $scope
     *
     * @return string
     */
    function printHtmlAttributes($scope)
    {
        $attributes = [];
        if (isset(self::$htmlAttributes[$scope])) {
            foreach (self::$htmlAttributes[$scope] as $key => $value) {
                $attributes[] = sprintf('%s="%s"', $key, $value);
            }
        }

        return join(' ', $attributes);
    }

    /**
     * Print HTML classes for the HTML template
     *
     * @param $scope
     * @param $full
     *
     * @return string
     */
    function printHtmlClasses($scope, $full = true)
    {
        if (empty(self::$htmlClasses)) {
            return '';
        }

        $classes = '';
        if (isset(self::$htmlClasses[$scope])) {
            $classes = self::$htmlClasses[$scope];
        }

        if ($full) {
            return sprintf('class="%s"', $classes);
        }

        return $classes;
    }

    function getGlobalAssets($type = 'js')
    {
        // $this->extendCssFilename()
        return config('layout-assets.THEME_ASSETS.global.' . $type);
    }

    /**
     * Add multiple vendors to the page by name. Refer to layout-assets THEME_VENDORS
     *
     * @param $vendors
     *
     * @return array
     */
    function addVendors($vendors)
    {
        foreach ($vendors as $value) {
            self::$vendorFiles[] = $value;
        }
        return array_unique(self::$vendorFiles);
    }


    /**
     * Add custom javascript file to the page
     *
     * @param $file
     *
     * @return void
     */
    function addJavascriptFile($file)
    {
        self::$javascriptFiles[] = $file;
    }

    /**
     * Add custom CSS file to the page
     *
     * @param $file
     *
     * @return void
     */
    function addCssFile($file)
    {
        self::$cssFiles[] = $file;
    }

    /**
     * Get vendor files from layout-assets. Refer to settings
     *
     * @param $type
     *
     * @return array
     */
    function getVendors($type)
    {
        $files = [];
        foreach (self::$vendorFiles as $vendor) {
            $vendors = config('layout-assets.THEME_VENDORS.' . $vendor);
            if (isset($vendors[$type])) {
                foreach ($vendors[$type] as $path) {
                    $files[] = $path;
                }
            }
        }

        return array_unique($files);
    }



    // 

    function addWebAsset($webAssets)
    {
        foreach ($webAssets as $value) {
            self::$webAssets[] = $value;
        }
        return array_unique(self::$webAssets);
    }

    function getWebAssets($type)
    {
        $files = [];
        foreach (self::$webAssets as $webAsset) {
            $assets = config('layout-assets.THEME_WEB_ASSETS.' . $webAsset);
            if (isset($assets[$type])) {
                foreach ($assets[$type] as $path) {
                    $files[] = $path;
                }
            }
        }

        return array_unique($files);
    }

    /**
     * Get custom js files from the settings
     *
     * @return array
     */
    function getCustomJs()
    {
        return self::$javascriptFiles;
    }

    /**
     * Get custom css files from the settings
     *
     * @return array
     */
    function getCustomCss()
    {
        return self::$cssFiles;
    }

    /**
     * Get HTML attribute based on the scope
     *
     * @param $scope
     * @param $attribute
     *
     * @return array
     */
    function getHtmlAttribute($scope, $attribute)
    {
        return self::$htmlAttributes[$scope][$attribute] ?? [];
    }
}
