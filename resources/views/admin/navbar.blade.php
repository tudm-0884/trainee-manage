<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="modern admin logo" src="{{ asset('bower_components/tracking_theme/app-assets/images/logo/logo.png') }}" }>
                        <h3 class="brand-text">{{ __('Trainee Manage') }}</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="{{ __('Search') }}">
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">{{ __('Hello, ') }}
                            <span class="user-name text-bold-700">{{ __('Admin') }}</span>
                            </span>
                            <span class="avatar avatar-online">
                            <img src="{{asset('bower_components/tracking_theme/app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ft-user"></i> {{ __('Edit Profile') }}</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ asset('/logout') }}"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> {{ __('English') }}</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn"></i> {{ __('Vietnamese') }}</a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">{{ __('?') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">{{ __('Notifications') }}</span>
                                </h6>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ asset('/admin') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('Dashboard') }}</span></a>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">{{ __('Trainers') }}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('trainers.index') }}" data-i18n="nav.templates.vert.main">{{ __('All Trainers') }}</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('trainers.create') }}" data-i18n="nav.templates.horz.main">{{ __('Create Trainer') }}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">{{ __('Trainees') }}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('trainees.index') }}" data-i18n="nav.templates.vert.main">{{ __('All Trainess') }}</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('trainees.create') }}" data-i18n="nav.templates.horz.main">{{ __('Create Trainee') }}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">{{ __('Schedule') }}</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('Phase') }}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('phases.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('All Phase') }}</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('phases.create') }}" data-i18n="nav.templates.vert.compact_menu">{{ __('Create New Phase') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.horz.main">{{ __('Schedule') }}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('schedules.index') }}" data-i18n="nav.templates.horz.classic">{{ __('All Schedule') }}</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('schedules.create') }}" data-i18n="nav.templates.horz.top_icon">{{ __('Create New Schedule') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="menu-item" href="#" data-i18n="nav.templates.horz.main">{{ __('Course') }}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('courses.index') }}" data-i18n="nav.templates.horz.classic">{{ __('All Courses') }}</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('courses.create') }}" data-i18n="nav.templates.horz.top_icon">{{ __('Create New Course') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
