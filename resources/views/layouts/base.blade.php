<!DOCTYPE html>
<html lang="DATN">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">--}}
    @yield('styles')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('script-files')
</head>
<body>
<div id="wrapper">
    @include('layouts/header')
    <div id="wrapper-content" style="padding-top: 85px !important; padding-left: 270px !important;">
        @include('layouts/sidebar')
        @yield('content')
    </div>
</div>
</body>
@yield('js')
</html>