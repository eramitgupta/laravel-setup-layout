<?php

return [
     
     #THEME_VENDORS <x-web-app-layout> Define web assets for different pages
     'THEME_WEB_ASSETS' => [
          'home' => [
               // CSS files for the home page
               'css' => [
                    'assets/css/demo.css',
               ],
               // JavaScript files for the home page
               'js'  => [
                    'assets/js/demo.js',
               ],
          ],
          // You can add more as per your requirement
     ],


     #THEME_ASSETS <x-app-layout>  Define global assets used across all pages
     'THEME_ASSETS' => [
          'global'  => [
               // Global CSS files, such as Bootstrap
               'css' => [
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
                    // You can add more global CSS files here
               ],
               // Global JavaScript files, such as Bootstrap JS
               'js'  => [
                    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
                    // You can add more global JavaScript files here
               ],
          ],
     ],

     #THEME_VENDORS <x-app-layout> Define vendor assets specific to certain pages or components
     'THEME_VENDORS' => [
          'demo' => [
               // CSS files for the login page or component
               'css' => [
                    'assets/css/demo.css',
               ],
               // JavaScript files for the login page or component
               'js'  => [
                    'assets/js/demo.js',
               ],
          ],
          // You can add more as per your requirement
     ],
];
