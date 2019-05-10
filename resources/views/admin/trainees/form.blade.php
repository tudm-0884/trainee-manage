<form class="form" action="{{ isset($trainee) ? route('trainees.update', $trainee->id) : route('trainees.store') }}" method="post">
    @if (isset($trainee))
        @method('PATCH')
    @endif

    @csrf
    <div class="form-body">
        <div class="form-group">
            <label for="complaintinput1">{{ __('Email') }}</label>
            <input type="text" id="email" class="form-control round"
                   name="email" value="{{ isset($trainee) ? $trainee->user->email : old('email') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput2">{{ __('Name') }}</label>
            <input type="text" id="name" class="form-control round"
                   name="name" value="{{ isset($trainee) ? $trainee->user->name : old('name') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput3">{{ __('Date of Birth') }}</label>
            <input type="date" id="dob" class="form-control round" name="dob" value="{{ isset($trainee) ? $trainee->dob : old('dob') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput4">{{ __('Address') }}</label>
            <input type="text" id="address" class="form-control round"
                   name="address" value="{{ isset($trainee) ? $trainee->address : old('address') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput4">{{ __('Phone') }}</label>
            <input type="number" id="phone" class="form-control round"
                   name="phone" value="{{ isset($trainee) ? $trainee->phone : old('phone') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput3">{{ __('Start Date') }}</label>
            <input type="date" id="internship_start_time" class="form-control round" name="internship_start_time" value="{{ isset($trainee) ? $trainee->dob : old('internship_start_time') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput3">{{ __('End Date') }}</label>
            <input type="date" id="internship_end_time" class="form-control round" name="internship_end_time" value="{{ isset($trainee) ? $trainee->dob : old('internship_end_time') }}">
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Trainer') }}</label>
            <select id="trainer_id" name="trainer_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($trainers as $trainer)
                    <option value="{{ $trainer->id }}" {{ (isset($trainee) && $trainee->trainer_id == $trainer->id) ? 'selected' : '' }}>{{ $trainer->user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Staff Type') }}</label>
            <select id="staff_type_id" name="staff_type_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($staff_types as $staff_type)
                    <option value="{{ $staff_type->id }}" {{ (isset($trainee) && $trainee->staff_type_id == $staff_type->id) ? 'selected' : '' }}>{{ $staff_type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Gender') }}</label>
            <select id="gender" name="gender" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($genders as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Language') }}</label>
            <select id="language_id" name="language_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($languages as $language)
                    <option value="{{ $language->id }}" {{ (isset($trainee) && $trainee->language_id == $language->id) ? 'selected' : '' }}>{{ $language->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('Office') }}</label>
            <select id="office_id" name="office_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($offices as $office)
                    <option value="{{ $office->id }}" {{ (isset($trainee) && $trainee->office_id == $office->id) ? 'selected' : '' }}>{{ $office->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="complaintinput4">{{ __('Graduation Year') }}</label>
            <input type="number" id="graduation_year" class="form-control round"
                   name="graduation_year" value="{{ isset($trainee) ? $trainee->graduation_year : old('graduation_year') }}">
        </div>
        <div class="form-group">
            <label for="issueinput5">{{ __('University') }}</label>
            <select id="university_id" name="university_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($universities as $university)
                    <option value="{{ $university->id }}" {{ (isset($trainee) && $trainee->university_id == $university->id) ? 'selected' : '' }}>{{ $university->name }}</option>
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
