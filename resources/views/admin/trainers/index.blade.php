@extends('admin.layouts.master')
@section('title', __('All Trainer'))
@section('content')
<div class="content-wrapper">
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('All trainers') }}</h4>
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

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($trainers as $trainer)
                                        <tr>
                                            <th scope="row">{{ $trainer->id }}</th>
                                            <td>{{ $trainer->email }}</td>
                                            <td>{{ $trainer->user->name }}</td>
                                            <td>{{ $trainer->language->name }}</td>
                                            <td>{{ $trainer->dob }}</td>
                                            <td>{{ $trainer->phone }}</td>
                                            <td>{{ $trainer->address }}</td>
                                            <td>{{ $trainer->office->name }}</td>
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
