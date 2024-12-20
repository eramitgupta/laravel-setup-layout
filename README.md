## Advanced Layout Setup for Laravel Applications 🔥  
<center>
<img width="956" alt="Screenshot 2024-10-04 at 10 34 23 PM" src="https://github.com/user-attachments/assets/b05fe465-6349-4705-9cf5-4f7086182f2d">
</center>
<div align="center">

[![Packagist License](https://img.shields.io/badge/Licence-MIT-blue)](https://github.com/eramitgupta/laravel-setup-layout/blob/main/LICENSE)
[![Latest Stable Version](https://img.shields.io/packagist/v/erag/laravel-setup-layout?label=Stable)](https://packagist.org/packages/erag/laravel-setup-layout)
[![Total Downloads](https://img.shields.io/packagist/dt/erag/laravel-setup-layout.svg?label=Downloads)](https://packagist.org/packages/erag/laravel-setup-layout)

</div>
A versatile, easy-to-use package to streamline layout creation in Laravel.

## Features
- Simplifies layout management.
- Customizable configurations to fit your app's needs.
- Improves structure and organization in Laravel projects.

## Installation

Install the package via Composer:
```bash
composer require erag/laravel-setup-layout
```

### Step 1: Register Service Provider

#### Laravel 11.x  
Ensure the service provider is registered in `/bootstrap/providers.php`:
```php
return [
    // ...
    LaravelSetupLayoutServiceProvider::class
];
```

#### Laravel 10.x  
Add the service provider in `config/app.php`:
```php
'providers' => [
    // ...
    LaravelSetupLayout\LaravelSetupLayoutServiceProvider::class,
];
```

### Step 2: Publish Configuration

Run this command to publish the configuration file:
```bash
php artisan vendor:publish --tag=LaravelSetupLayout --force
```

### Step 4: assets `config/layout-assets.php`

```bash

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
```

### Step 4: Usage 🤔

#### Create a Controller
Generate a basic controller:
```bash
php artisan make:controller HomeController
```

#### Create a View
Create a view for your application:
```bash
php artisan make:view home
```
This will create `home.blade.php` in `resources/views`.

#### Subdirectory Controller
To create a controller in a subfolder, use:
```bash
php artisan make:controller Dashboard/HomeController
```
This creates `HomeController` under `app/Http/Controllers/Dashboard`.

#### Subdirectory View
For views in subdirectories:
```bash
php artisan make:view dashboard.home
```
Creates `home.blade.php` in `resources/views/dashboard`.

### Step 4: Define Routes

#### Home Route:
```php
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
```

#### Dashboard Route:
```php
Route::get('/dashboard', [App\Http\Controllers\Dashboard\HomeController::class, 'dashboard']);
```

Ensure you have matching controller methods, like so:

```php
// HomeController.php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        addWebAsset(['home']);
        return view('home');
    }
}

// Dashboard/HomeController.php
namespace App\Http\Controllers\Dashboard;

class HomeController extends Controller
{
    public function dashboard()
    {
        addVendors(['demo']);
        return view('dashboard.home');
    }
}
```

### Step 5: Use Layout Components

Add the layout components in your Blade files:

#### Home Layout (Front-End)
```html
<!-- resources/views/home.blade.php -->
<x-web-app-layout>
    <h1>Welcome to the Front-End 👋</h1>
</x-web-app-layout>
```

#### Dashboard Layout
```html
<!-- resources/views/dashboard/home.blade.php -->
<x-app-layout>
    <h1>Welcome to the Dashboard 👋</h1>
</x-app-layout>
```

### Blade Directives for Scripts and Styles

To include page-specific styles and scripts:
```html
<!-- resources/views/home.blade.php -->
@push('page_styles')
    <link rel="stylesheet" href="path/to/home-styles.css">
@endpush

@push('page_scripts')
    <script src="path/to/home-scripts.js"></script>
@endpush
```

### Page Title Setup

To set the page title dynamically:
```php
// HomeController.php
public function index()
{
    addWebAsset(['home', 'jq']);
    $data['title'] = 'Home Page';
    return view('home', $data);
}
```

And in your view:
```html
<!-- resources/views/home.blade.php -->
<x-web-app-layout>
    @section('title', $title)
    <h1>Welcome to the Home Page 👋</h1>
</x-web-app-layout>
```

---

### License
The MIT License (MIT). See the License file for details.

> GitHub [@eramitgupta](https://github.com/eramitgupta) &nbsp;&middot;&nbsp;  
> LinkedIn [@eramitgupta](https://www.linkedin.com/in/eramitgupta/) &nbsp;&middot;&nbsp;  
> Support [Donate](https://paypal.me/teamdevgeek/)
