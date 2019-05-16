@extends('admin.layouts.master')
@section('title', __('Schedule detail'))
@section('content')
    <div class="content-wrapper">
        <h2>{{ __($schedule->name) }}</h2>
        <div id="my-timeline" data-duration="{{ json_encode($duration) }}">

        </div>
    </div>
@endsection
@push ('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/trainee-manage/dist/jquery.roadmap.min.css') }}">
@endpush
@push ('js')
    <script src="{{ asset('bower_components/trainee-manage/dist/jquery.roadmap.js') }}"></script>
    <script src="{{ asset('js/timeline.js') }}"></script>
@endpush
