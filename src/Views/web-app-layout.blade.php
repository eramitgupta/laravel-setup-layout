<!doctype html>
<html lang="{{ str_replace('_', '-', $lang ?? app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        var BaseUrl = "{{ URL::to('') }}";
    </script>
    <!--begin::Vendor Stylesheets(used by this page)-->
    @foreach (getWebAssets('css') as $path)
        {!! sprintf('<link rel="stylesheet" href="%s">', asset($path)) !!}
    @endforeach
    <!--end::Vendor Stylesheets-->
    <!--begin::Custom Stylesheets(optional)-->
    @stack('page_styles')
</head>

<body>
    @yield('content')

    <!--begin::Vendors Javascript(used by this page)-->
    @foreach (getWebAssets('js') as $path)
        {!! sprintf('<script src="%s"></script>', asset($path)) !!}
    @endforeach
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(optional)-->
    @stack('page_scripts')
    <!--end::Custom Javascript-->
</body>

</html>
