<form class="form" action="{{ isset($trainer) ? route('trainers.update', $trainer->id) : route('trainers.store') }}" method="post">
    @if (isset($trainer))
    @method('PATCH')
    @endif

    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="complaintinput1">{{ __('Email') }}</label>
            <input type="text" id="email" class="form-control round {{ $errors->has('email') ? 'border-danger' : '' }}"
                   name="email" value="{{ isset($trainer) ? $trainer->user->email : old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="complaintinput2">{{ __('Name') }}</label>
            <input type="text" id="name" class="form-control round {{ $errors->has('name') ? 'border-danger' : '' }}"
                   name="name" value="{{ isset($trainer) ? $trainer->user->name : old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block text-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="complaintinput3">{{ __('Date of Birth') }}</label>
            <input type="date" id="dob" class="form-control round" name="dob" value="{{ isset($trainer) ? $trainer->dob : old('dob') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput4">{{ __('Address') }}</label>
            <input type="text" id="address" class="form-control round"
                   name="address" value="{{ isset($trainer) ? $trainer->address : old('address') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput4">{{ __('Phone') }}</label>
            <input type="text" id="phone" class="form-control round"
                   name="phone" value="{{ isset($trainer) ? $trainer->phone : old('phone') }}">
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Language') }}</label>
            <select id="language_id" name="language_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($languages as $language)
                    <option value="{{ $language->id }}" {{ (isset($trainer) && $trainer->language_id == $language->id) ? 'selected' : '' }}>{{ $language->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Office') }}</label>
            <select id="office_id" name="office_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($offices as $office)
                    <option value="{{ $office->id }}" {{ (isset($trainer) && $trainer->office_id == $office->id) ? 'selected' : '' }}>{{ $office->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
        <div class="form-actions center">
            <button type="submit" class="btn btn-outline-purple btn-min-width btn-glow mr-1 mb-1">
                <i class="la la-check-square-o"></i> {{ isset($trainer) ? __('Update') : __('Save') }}
            </button>
            <a class="btn btn-outline-danger btn-min-width btn-glow mr-1 mb-1" href="{{ route('trainers.index') }}">
                <i class="ft-x"></i> {{ __('Cancel') }}
            </a>
        </div>
</form>
