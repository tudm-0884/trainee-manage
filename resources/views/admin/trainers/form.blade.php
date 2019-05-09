<form class="form" action="{{ isset($trainer) ? route('trainers.update', $trainer->id) : route('trainers.store') }}" method="post">
    @if (isset($trainer))
    @method('PATCH')
    @endif

    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="complaintinput1">{{ __('Email') }}</label>
            <input type="text" id="email" class="form-control round"
                   name="email" value="{{ isset($trainer) ? $trainer->user->email : old('email') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput2">{{ __('Name') }}</label>
            <input type="text" id="name" class="form-control round"
                   name="name" value="{{ isset($trainer) ? $trainer->user->name : old('name') }}">
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
    <div class="form-actions">
        <button type="button" class="btn btn-warning mr-1">
            <i class="ft-x"></i> {{ __('Cancel') }}
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="la la-check-square-o"></i> {{ __('Save') }}
        </button>
    </div>
</form>
