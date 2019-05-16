@extends('admin.layouts.master')
@section('title', __('Courses'))
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Create course') }}</h4>
                    </div>
                    @include('admin.components.alert')
                    <div class="card-body">
                        @include('admin.courses.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
