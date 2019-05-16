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
                        <h4 class="card-title">{{ __('Show course') }}</h4>
                    </div>
                    @include('admin.components.alert')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="lead">{{ __('Course Information') }}</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="text-bold-800">{{ __('Course Name') }}</td>
                                                <td class="text-right text-bold-800 text-muted">{{ $course->course_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Start date') }}</td>
                                                <td class="text-right">{{ $course->start_date }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('End date') }}</td>
                                                <td class="text-right">{{ $course->start_date }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ __('Schedule Name') }}</td>
                                                <td class="pink text-right">
                                                    <a data-toggle="collapse" href="#schedule" aria-expanded="false" aria-controls="schedule" class="card-title lead">{{ $course->schedule->name }}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    <div id="schedule" role="tabpanel" aria-labelledby="schedule" class="collapse">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">{{ __('Language') }}</td>
                                                                <td class="text-right">{{ optional($course->schedule->language)->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">{{ __('Schedule For') }}</td>
                                                                <td class="text-right">{{ optional($course->schedule->staff_type)->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pink">
                                                                    <ul class="list-group">
                                                                        @foreach($course->schedule->phases as $phase)
                                                                            <li class="list-group-item"><span class="badge badge-primary badge-pill float-right">{{ $phase->pivot->time_duration . ' ' . __('days') }}</span>{{ $phase->name }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="lead text-left">{{ __('Trainee') }}</p>
                                    </div>
                                    <div class="col-md-8">
                                        <button class="lead btn btn-outline-success pull-right" data-toggle="modal" data-target="#add-trainee" >{{ __('Add Trainee') }}</button>
                                        @include('admin.courses.modal_add_trainee')
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>{{ __('Trainee') }}</th>
                                                <th>{{ __('Type') }}</th>
                                                <th>{{ __('Language') }}</th>
                                                <th>{{ __('Delete') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($course->trainees as $trainee)
                                                <tr>
                                                    <td>{{ optional($trainee->user)->name }}</td>
                                                    <td>{{ optional($trainee->staff_type)->name }}</td>
                                                    <td>{{ optional($trainee->language)->name }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-danger round mr-1" data-toggle="modal" data-target="#remove-trainee-{{ $trainee->id }}">{{ __('Delete') }}</button>
                                                        @include('admin.courses.modal_remove_trainee', ['id' => $trainee->id])
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
