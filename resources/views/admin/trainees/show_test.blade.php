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
                    <div class="col-md-12">
                        @include('admin.components.alert')
                    </div>
                    <!-- check null because now don't have policy -->
                    @if ($tests != null)
                    <div class="card-content collapse show">
                        <div class="card-header">
                            <div class="col-md-12">
                                <p class="card-title">{{ __('Trainee copy link test and paste to form and update and wait Trainee scoring this!') }}</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div id="tab-collapsed" role="tablist" aria-multiselectable="true">
                                @foreach ($tests as $key => $test)
                                    @php
                                        $color = config('constants.test_status_color')[$test->status];
                                    @endphp
                                    <div class="card collapse-icon accordion-icon-rotate">
                                        <div id="test-id-{{ $key }}" class="card-header border{{ $color }}">
                                            <a data-toggle="collapse" data-parent="#accordionWrap6" href="#test-content-id-{{ $key }}" aria-expanded="false" aria-controls="test-content-id-{{ $key }}" class="card-title lead {{ $color }} collapsed">{{ $test->name }} {{ '(' . config('constants.test_status')[$test->status] . ')' }}</a>
                                        </div>
                                        <div id="test-content-id-{{ $key }}" role="tabpanel" aria-labelledby="test-id-{{ $key }}" class="card-collapse border-{{ $color }} collapse" aria-expanded="true">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    @if ($test->status == config('constants.new') || $test->status == config('constants.not_achieved'))
                                                        <form class="form" action="{{ route('tests.update_content', $test->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label for="content">{{ __('Test Link') }}</label>
                                                                    <input type="text" id="content" class="form-control {{ $errors->has('content') ? 'border-danger' : '' }}" placeholder="{{ __('Test Link') }}" name="content" value="{{ old('content', $test->content) }}">
                                                                    @if ($errors->has('content'))
                                                                        <span class="help-block text-danger">
                                                                            <strong>{{ $errors->first('content') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="form-actions center">
                                                                <button type="submit" class="btn btn-outline-info btn-min-width btn-glow mr-1 mb-1">
                                                                    <i class="la la-check-square-o"></i> {{ __('Update') }}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    @else
                                                        <div class="col-md-12">
                                                            <h3>{{ __('You sent your test!') }}</h3>
                                                            <p>{{ __('This test at: ') }}<a target="_blank" href="{{ $test->content }}">{{ $test->content }}</a></p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
