<form id="schedule_form" class="form number-tab-steps wizard-circle" action="{{ isset($schedule) ? route('schedules.update', $schedule->id) : route('schedules.store') }}" method="post" >
@if (isset($schedule))
    @method('PATCH')
@endif

    @csrf
<!-- Step 1 -->
    <h6>{{ __('Step 1') }}</h6>
    <fieldset>
        <div class="form-group">
            <label for="issueinput5">{{ __('Pick a Language') }}</label>
            <select id="language_id" name="language_id" class="form-control" data-toggle="tooltip"
                    data-trigger="hover" data-placement="top" data-title="Priority">
                @foreach ($languages as $language)
                    <option value="{{ $language->id }}">{{ __($language->name) }}</option>
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
            <label for="complaintinput2">{{ __('Name') }}</label>
            <input type="text" id="schedule_name" class="form-control round"
                   name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="complaintinput3">{{ __('Applied Day') }}</label>
            <input type="date" id="applied_day_schedule" class="form-control round" name="applied_day" value="{{ old('applied_day') }}">
        </div>
    </fieldset>
    <!-- Step 2 -->
    <h6>{{ __('Step 2') }}</h6>
    <fieldset>
        <section class="basic-dual-listbox">
            <input type="hidden" id="selected_phases_id" name="selected_phases_id" value="">
            <input type="hidden" id="selected_phases_name" name="selected_phases_name" value="">
            <div class="form-group">
                <select multiple="multiple" class="duallistbox" id="phase_id" name="phase_id[]">
                    @foreach ($phases as $phase)
                        <option value="{{ $phase->id }}">{{ __($phase->name) }}</option>
                    @endforeach
                </select>
            </div>
        </section>
    </fieldset>
    <!-- Step 3 -->
    <h6>{{ __('Step 3') }}</h6>
    <fieldset>
        <div class="row">
            <div id="step3">
            </div>
        </div>
    </fieldset>
</form>
