@extends('admin.layouts.master')
@section('title', __('Add new Schedule'))
@section('content')
    <div class="row match-height">
        <div class="col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Create Schedule') }}</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        @include ('admin.schedules.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('bower_components/tracking_theme/app-assets/vendors/js/extensions/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('bower_components/tracking_theme/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('bower_components/tracking_theme/app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}"></script>
    <script src="{{ asset('bower_components/tracking_theme/app-assets/js/scripts/forms/wizard-steps.js') }}"></script>
    <script src="{{ mix('js/custom.js') }}"></script>
    <script src="{{ mix('js/multiselect.js') }}"></script>
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/custom.css') }}">
@endpush
