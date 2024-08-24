<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="{{asset('assets')}}" data-template="vertical-menu-template">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
      <title>Bame - @stack('title')</title>
      <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/favicons/apple-icon-57x57.png')}}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/favicons/apple-icon-60x60.png')}}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/favicons/apple-icon-72x72.png')}}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/favicons/apple-icon-76x76.png')}}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/favicons/apple-icon-114x114.png')}}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/favicons/apple-icon-120x120.png')}}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/favicons/apple-icon-144x144.png')}}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/favicons/apple-icon-152x152.png')}}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-icon-180x180.png')}}">
      <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/android-icon-192x192.png')}}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
      <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicons/favicon-96x96.png')}}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
      <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/ms-icon-144x144.png')}}">
      <meta name="theme-color" content="#ffffff">
      @include('admin.partial.style')
      @stack('styles')
   </head>
   <body>
    <style>
        .layout-page{
            background-image: url('{{ asset('assets/img/bg/bg27.jpg') }}');
        }
        .layout-page{
            background-size: cover;
        }
    </style>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
           @yield('content')
           @include('admin.partial.sidebar')
              @include('admin.partial.header')
            </div>
        </div>
        {{-- @include('admin.partial.footer') --}}
     @include('admin.partial.script')
     @stack('scripts')
   </body>
</html>
