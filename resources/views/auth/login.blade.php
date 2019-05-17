<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('admin.layouts.head')
    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/vendors/css/forms/icheck/icheck.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/vendors/css/forms/icheck/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/tracking_theme/app-assets/css/pages/login-register.css') }}">
    @endpush
</head>
<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">
                                            <h2 class="text-danger">{{ __('Tracking System') }}</h2>
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>{{ __('Login Tracking System') }}</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" action="{{ route('login') }}" method="POST">
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="email" value="{{ old('email') }}" placeholder="{{ __('Your Email') }}"
                                                    required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="password" 
                                                    placeholder="{{ __('Enter Password') }}" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-md-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }} class="chk-remember">
                                                        <label for="remember-me">{{ __('Remember Me') }}</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-12 text-center text-md-right"><a href="{{ route('password.request') }}" class="card-link">{{ __('Forgot Password?') }}</a></div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-info box-shadow-3 btn-lg btn-block"><i class="ft-unlock"></i>{{ __('Login') }}</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
    @include('admin.layouts.script')
    @push('js')
        <script src="{{ asset('bower_components/tracking_theme/app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bower_components/tracking_theme/app-assets/js/scripts/forms/form-login-register.js') }}" type="text/javascript"></script> 
    @endpush
</body>
</html>
