
## Layout Setup for Laravel Applications 🔥.
### A versatile and easy-to-use package for setting up layouts in Laravel applications.

## Features
- Simplifies the process of creating and managing layouts.
- Customizable layout configurations to suit your application's needs.
- Enhances the structure and organization of your Laravel projects.

## Installation
Install the package via Composer:

```bash
composer require erag/laravel-setup-layout
```


### Step 1: Service Provider
Add the following line to the providers array in your `config/app.php` file:

```bash

'providers' => [
    // Other service providers...
    LaravelSetupLayout\LaravelSetupLayoutServiceProvider::class,
],

```


### Step 2: Publishing Configuration
To publish the configuration file, run the following Artisan command:

This command will copy the package's configuration file to your Laravel application, allowing you to customize layout settings according to your needs.

```bash
php artisan vendor:publish --tag=LaravelSetupLayout --force
```

## Step 3: how to use 🤔 

#### Basic Controller Creation:

To create a controller in Laravel using the` php artisan make:controller` command, you can follow these steps:
```bash 
php artisan make:controller HomeController
```

####  Basic View Creation:
To create views in Laravel using the php artisan make:view command, you can follow these steps:

```bash  
php artisan make:view home
```
This command will create a view file named `home.blade.php` in the resources/views directory by default.


#### Creating a Controller in a Subdirectory:
If you want to create a controller in a subdirectory like /Dashboard, you can specify the directory structure as part of the controller name:

```bash  
php artisan make:controller Dashboard/HomeController
```
This command will create a HomeController within the app/Http/Controllers/Dashboard directory.

####  Basic View Creation:
If you want to create a view in a subdirectory like dashboard, you can specify the directory structure as part of the view name:

```bash
php artisan make:view dashboard.home
```

This command will create a home.blade.php view within the `resources/views/dashboard` directory.


## Step 4: Routes defined  

Your provided routes are attempting to define routes in Laravel, pointing to specific controller actions. Here's an explanation of the routes you've written:

 - Route for the Home Controller:
     ```bash 
     Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
     ```
 - Route for the Dashboard Home Controller:

     ```bash  
     Route::get('/dashboard', [App\Http\Controllers\Dashboard\HomeController::class, 'dashboard']);
     ```
Make sure you have the corresponding controllers and methods created:

 - For the HomeController, there should be a file at `app/Http/Controllers/HomeController.php` with an index method.

For the `Dashboard\HomeController` there should be a file at 

 - app/Http/Controllers/Dashboard/HomeController.php with a dashboard method.

 Also, ensure that the controllers are correctly namespaced. If your controllers are not in the default namespace, you should adjust the use statement at the top of your routes file accordingly.

Here's an example of how the controllers might be structured:

```bash
// HomeController.php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        #/yourproject/config/layout-assets.php
        # You can add more as per your requirement
        # ex addWebAsset(['home', '', '']);
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
        #/yourproject/config/layout-assets.php
        # You can add more as per your requirement
        # ex addVendors(['demo', '', '']);
        addVendors(['demo']);
        return view('dashboard.home');
    }
}
```

## Step 5: Use layout   
 - Then, you can use this component in your `home.blade.php` or `dashboard/home.blade.php` view:
   ### Front-End Layout (x-web-app-layout)

     ```bash
     <!-- resources/views/home.blade.php -->
     <x-web-app-layout>
      <h1>Front-End 👋</h1>
     </x-web-app-layout>
     ```
     ### Dashboard Layout (x-app-layout)

     ```bash
     <!-- resources/views/dashboard/home.blade.php -->
     <x-app-layout>
      <h1>Dashboard 👋</h1>
     </x-app-layout>
     ```

     `@stack('page_scripts')`: Similar to `@stack('page_styles')`, this directive is used to push page-specific JavaScript scripts into a stack in your layout file:

    ```bash
    <!-- View file: resources/views/home.blade.php -->
    @push('page_styles')
        <link rel="stylesheet" href="path/to/home-styles.css">
    @endpush

    <!-- View file: resources/views/home.blade.php -->
    @push('page_scripts')
        <script src="path/to/home-scripts.js"></script>
    @endpush

    ```

    Using the `@section('title', 'Home Page')` directive, you're defining the title of the page as "Home Page". This value will replace the `@yield('title')` directive in your layout file.
    Within the layout, you'll have access to the title value defined in this view.

    It looks like you're using Blade directives to define the title and content for the home.blade.php view within the x-web-app-layout. Here's the corrected version:
    
    ```bash
    <!-- resources/views/home.blade.php -->
    <x-web-app-layout>
        @section('title', 'Home Page')

        <h1>Front-End 👋</h1>

        <!-- Your additional content goes here -->
    </x-web-app-layout>
    ```
    - And you title Controller can also pass from
    ```bash 
        <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        public function index()
        {
            #/yourproject/config/layout-assets.php
            # You can add more as per your requirement
            # ex addWebAsset(['home', '', '']);
            addWebAsset(['home', 'jq']);
            $data['title'] = 'Home Page';
            return view('home', $data);
        }
    }

    <!-- resources/views/home.blade.php -->
    <x-web-app-layout>
        @section('title', $title)
        <h1>Front-End 👋</h1>
    </x-web-app-layout>
    ```










The MIT License (MIT). Please see License File for more information.

> GitHub [@eramitgupta](https://github.com/eramitgupta) &nbsp;&middot;&nbsp;
> Linkedin [@eramitgupta](https://www.linkedin.com/in/eramitgupta/)&nbsp;&middot;&nbsp;
> Donote [@eramitgupta](https://paypal.me/teamdevgeek/)

