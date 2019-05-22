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
                        <div class="btn btn-outline-info btn-glow float-right mt-2">
                            <a href="{{ route('trainers.create') }}"> {{ __('Create') }}</a>
                        </div>
                    </div>
                    @include('admin.components.alert')
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
                                        <th>{{ __('Action') }}</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($trainers as $trainer)
                                        <tr>
                                            <th scope="row">{{ $trainer->id }}</th>
                                            <td>{{ optional($trainer->user)->email }}</td>
                                            <td>{{ $trainer->user->name }}</td>
                                            <td>{{ optional($trainer->language)->name }}</td>
                                            <td>{{ $trainer->dob }}</td>
                                            <td>{{ $trainer->phone }}</td>
                                            <td>{{ $trainer->address }}</td>
                                            <td>{{ optional($trainer->office)->name }}</td>
                                            <td>
                                                <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-light round mr-1">{{ __('Edit') }}</a>
                                                <button type="button" class="btn btn-danger round mr-1" data-toggle="modal" data-target="#delete-{{ $trainer->id }}">{{ __('Delete') }}</button>
                                                @include('admin.components.modal', ['route' => route('trainers.destroy', $trainer->id), 'id' => $trainer->id ])
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
@endsection
