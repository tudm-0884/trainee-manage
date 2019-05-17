@extends('admin.layouts.master')
@section('title', __('Tests'))
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
                            <h4 class="card-title">{{ __('All tests') }}</h4>
                        </div>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
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
                                        <th>{{ __('Test Name') }}</th>
                                        <th>{{ __('Tests Owner') }}</th>
                                        <th>{{ __('Content') }}</th>
                                        <th>{{ __('Mark') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($tests as $test)
                                        <tr>
                                            <th scope="row">{{ $test->id }}</th>
                                            <td>{{ $test->name }}</td>
                                            <td>{{ optional($test->trainee->user)->name }}</td>
                                            <td><a target="_blank" href="{{ $test->content }}">{{ $test->content }}</a></td>
                                            <td>{{ $test->mark }}</td>
                                            <td> 
                                                <b class="badge badge-{{ config('constants.test_status_badge')[$test->status] }}">{{ config('constants.test_status')[$test->status] }}</b>
                                            </td>
                                            <td>
                                                @if ($test->status == config('constants.resolved') || $test->status == config('constants.resend'))
                                                <button type="button" class="btn btn-outline-primary btn-glow btn-sm" data-toggle="modal" data-target="#update-mark-{{ $test->id }}">{{ __('Update Mark') }}</button>
                                                @include('admin.tests.modal_update_mark', ['route' => route('tests.update', $test->id), 'id' => $test->id, 'link' => $test->content])
                                                @endif
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
