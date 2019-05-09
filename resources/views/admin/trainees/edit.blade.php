@extends('admin.layouts.master')
@section('title', __('Edit Trainee'))
@section('content')
    <div class="row match-height">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-round-controls">{{ __('Trainers') }}</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        @include('admin.trainees.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
