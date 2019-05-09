@extends('admin.layouts.master')
@section('title', __('All Trainees'))
@section('content')
    <div class="content-wrapper">
        <div class="content-body">

            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('All trainees') }}</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Language') }}</th>
                                            <th>{{ __('Date of Birth') }}</th>
                                            <th>{{ __('Phone') }}</th>
                                            <th>{{ __('Address') }}</th>
                                            <th>{{ __('Office') }}</th>
                                            <th>{{ __('Trainer') }}</th>
                                            <th>{{ __('Staff Type') }}</th>
                                            <th>{{ __('Gender') }}</th>
                                            <th>{{ __('Graduation Year') }}</th>
                                            <th>{{ __('Batch') }}</th>
                                            <th>{{ __('University') }}</th>
                                            <th>{{ __('Start Time') }}</th>
                                            <th>{{ __('End Time') }}</th>
                                            <th>{{ __('Course') }}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($trainees as $trainee)
                                            <tr>
                                                <th scope="row"> <a href="{{ route('trainees.edit', $trainee->id) }}">{{ $trainee->id }}</a></th>
                                                <td>{{ $trainee->user->email }}</td>
                                                <td>{{ $trainee->user->name }}</td>
                                                <td>{{ $trainee->language->name }}</td>
                                                <td>{{ $trainee->dob }}</td>
                                                <td>{{ $trainee->phone }}</td>
                                                <td>{{ $trainee->address }}</td>
                                                <td>{{ $trainee->office->name }}</td>
                                                <th>{{ isset($trainee->trainer->user->name) ? $trainee->trainer->user->name : '' }}</th>
                                                <th>{{ $trainee->staff_type->name }}</th>
                                                <th>{{ config('constants.gender.' . $trainee->gender) }}</th>
                                                <th>{{ $trainee->graduation_year }}</th>
                                                <th>{{ $trainee->batch }}</th>
                                                <th>{{ $trainee->university->name }}</th>
                                                <th>{{ $trainee->internship_start_time }}</th>
                                                <th>{{ $trainee->internship_end_time }}</th>
                                                <th>{{ isset($trainee->course->course_name) ? $trainee->course->course_name : '' }}</th>
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
@endsection
