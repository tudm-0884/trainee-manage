<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('dashboard') }}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">{{ __('Dashboard') }}</span></a>
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
