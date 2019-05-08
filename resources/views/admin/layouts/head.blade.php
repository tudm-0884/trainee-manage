<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>{{ __('Trainee Manage') }}</title>
<link rel="apple-touch-icon" href="{{ asset('bower_components/tracking_theme/app-assets/images/ico/apple-icon-120.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('bower_components/tracking_theme/app-assets/images/ico/favicon.ico') }}">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/vendors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/vendors/css/forms/listbox/bootstrap-duallistbox.min.css') }}">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/app.css') }}">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/plugins/forms/dual-listbox.css') }}">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/assets/css/style.css') }}">
<!-- END Custom CSS-->
<!-- Icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components//tracking_theme/app-assets/fonts/line-awesome/css/line-awesome.min.css') }}">

@stack('css')
