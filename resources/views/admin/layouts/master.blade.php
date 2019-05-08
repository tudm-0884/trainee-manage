<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
    <head>
        @include('admin.layouts.head')
    </head>
    <body class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar"
        data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
        <!-- fixed-top-->
        @include('admin.layouts.navbar')
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        @include('admin.layouts.sidebar')
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content">
            @yield('content')
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        @include('admin.layouts.footer')
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        @include('admin.layouts.script')
    </body>
</html>
