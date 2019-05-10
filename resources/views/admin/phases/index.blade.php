@extends('admin.layouts.master')
@section('title', __('Phases'))
@section('content')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="heading-left">
                            <h4 class="card-title">{{ __('All phases') }}</h4>
                        </div>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a href="{{ route('phases.create') }}" class="btn btn-outline-info btn-glow">{{ __('Create') }}</a></li>
                            </ul>
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
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Test') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($phases as $phase)
                                        <tr>
                                            <th scope="row">{{ $phase->id }}</th>
                                            <td>{{ $phase->name }}</td>
                                            <td>{{ config('constants.test_or_not.yes') == $phase->test_or_not ? __('have test') : __('don\'t have test') }}</td>
                                            <td>
                                                <a href="{{ route('phases.edit', $phase->id) }}" class="btn btn-light round mr-1">{{ __('Edit') }}</a>
                                                <button type="button" class="btn btn-danger round mr-1" data-toggle="modal" data-target="#delete-{{ $phase->id }}">{{ __('Delete') }}</button>
                                                @include('admin.components.modal', ['route' => route('phases.destroy', $phase->id), 'id' => $phase->id])
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
