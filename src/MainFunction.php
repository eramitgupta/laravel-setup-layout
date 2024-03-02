<?php

use LaravelSetupLayout\Core\Theme;


/*
 * Author: eramitgupta
 * Email: info.eramitgupta@gmail.com
 * 
 * Copyright (c) 2024 by eramitgupta.
 * All rights reserved.
 *
 * You cannot steal and copy my code, I have the copyright, I do not give authority.
 */

if (!function_exists('theme')) {
     function theme()
     {
          return (new Theme);
     }
}

if (!function_exists('addHtmlAttribute')) {
     /**
      * Add HTML attributes by scope
      *
      * @param $scope
      * @param $name
      * @param $value
      *
      * @return void
      */
     function addHtmlAttribute($scope, $name, $value)
     {
          theme()->addHtmlAttribute($scope, $name, $value);
     }
}


if (!function_exists('addHtmlAttributes')) {
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
          theme()->addHtmlAttributes($scope, $attributes);
     }
}


if (!function_exists('addHtmlClass')) {
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
          theme()->addHtmlClass($scope, $value);
     }
}


if (!function_exists('printHtmlAttributes')) {
     /**
      * Print HTML attributes for the HTML template
      *
      * @param $scope
      *
      * @return string
      */
     function printHtmlAttributes($scope)
     {
          return theme()->printHtmlAttributes($scope);
     }
}


if (!function_exists('printHtmlClasses')) {
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
          return theme()->printHtmlClasses($scope, $full);
     }
}

if (!function_exists('getGlobalAssets')) {
     /**
      * Get the global assets
      *
      * @param $type
      *
      * @return array
      */
     function getGlobalAssets($type = 'js')
     {
          return theme()->getGlobalAssets($type);
     }
}


if (!function_exists('addVendors')) {
     /**
      * Add multiple vendors to the page by name. Refer to settings THEME_VENDORS
      *
      * @param $vendors
      *
      * @return void
      */
     function addVendors($vendors)
     {
          theme()->addVendors($vendors);
     }
}


if (!function_exists('addWebAsset')) {
     function addWebAsset($webAssets)
     {
          theme()->addWebAsset($webAssets);
     }
}

if (!function_exists('getWebAssets')) {
     function getWebAssets($type)
     {
          return theme()->getWebAssets($type);
     }
}


if (!function_exists('addJavascriptFile')) {
     /**
      * Add custom javascript file to the page
      *
      * @param $file
      *
      * @return void
      */
     function addJavascriptFile($file)
     {
          theme()->addJavascriptFile($file);
     }
}


if (!function_exists('addCssFile')) {
     /**
      * Add custom CSS file to the page
      *
      * @param $file
      *
      * @return void
      */
     function addCssFile($file)
     {
          theme()->addCssFile($file);
     }
}


if (!function_exists('getVendors')) {
     /**
      * Get vendor files from settings. Refer to settings THEME_VENDORS
      *
      * @param $type
      *
      * @return array
      */
     function getVendors($type)
     {
          return theme()->getVendors($type);
     }
}


if (!function_exists('getCustomJs')) {
     /**
      * Get custom js files from the settings
      *
      * @return array
      */
     function getCustomJs()
     {
          return theme()->getCustomJs();
     }
}


if (!function_exists('getCustomCss')) {
     /**
      * Get custom css files from the settings
      *
      * @return array
      */
     function getCustomCss()
     {
          return theme()->getCustomCss();
     }
}


if (!function_exists('getHtmlAttribute')) {
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
          return theme()->getHtmlAttribute($scope, $attribute);
     }
}
