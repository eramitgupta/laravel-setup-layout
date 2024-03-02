
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




The MIT License (MIT). Please see License File for more information.

> GitHub [@eramitgupta](https://github.com/eramitgupta) &nbsp;&middot;&nbsp;
> Linkedin [@eramitgupta](https://www.linkedin.com/in/eramitgupta/)&nbsp;&middot;&nbsp;
> Donote [@eramitgupta](https://paypal.me/teamdevgeek/)

