<form class="form" action="{{ isset($phase) ? route('phases.update', $phase->id) : route('phases.store') }}" method="POST">
    @csrf
    @isset($phase)
        @method('PUT')
    @endisset
    <div class="form-body">
        <div class="form-group">
            <label for="name">{{ __('Phase name') }}</label>
            <input type="text" id="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" placeholder="{{ __('Phase name') }}" name="name" value="{{ isset($phase) ? old('name', $phase->name) : old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label>{{ __('Test of phase') }}</label>
            <div class="input-group">
                <div class="d-inline-block custom-control custom-radio mr-1">
                    <input type="radio" name="test_or_not" class="custom-control-input" value="{{ config('constants.test_or_not.yes') }}" {{ isset($phase) && $phase->test_or_not == config('constants.test_or_not.yes') ? 'checked' : '' }} id="yes">
                    <label class="custom-control-label" for="yes">{{ __('Yes') }}</label>
                </div>
                <div class="d-inline-block custom-control custom-radio">
                    <input type="radio" name="test_or_not" value="{{ config('constants.test_or_not.no') }}" {{ isset($phase) && $phase->test_or_not == config('constants.test_or_not.no') ? 'checked' : '' }} class="custom-control-input" id="no">
                    <label class="custom-control-label" for="no">{{ __('No') }}</label>
                </div>
            </div>
            @if ($errors->has('test_or_not'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('test_or_not') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-actions center">
        <button type="submit" class="btn btn-outline-purple btn-min-width btn-glow mr-1 mb-1">
            <i class="la la-check-square-o"></i> {{ isset($phase) ? __('Update') : __('Save') }}
        </button>
        <a class="btn btn-outline-danger btn-min-width btn-glow mr-1 mb-1" href="{{ route('phases.index') }}">
            <i class="ft-x"></i> {{ __('Cancel') }}
        </a>
    </div>
</form>
