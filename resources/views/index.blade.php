<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/vendors/iconfonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="/images/favicon.png"/>

    <title>Science Network</title>
</head>
<body>
<div id="app"></div>

<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
