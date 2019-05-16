<div class="modal animated bounceIn text-left" id="add-trainee" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel62">{{ __('Add trainee into course') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ __('You will add the trainees into this course!') }}</p>
                <form action="{{ route('courses.add_trainee_into_course') }}" method="POST">
                    @csrf
                    <div class="row">
                        <input type="text" hidden="true" name="course_id" value="{{ $course->id }}">
                        @forelse ($trainees as $trainee)
                        <div class="col-md-6">
                            <fieldset>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="trainee_id[]" value="{{ $trainee->id }}" id="trainee-{{ $trainee->id }}">
                                    <label class="custom-control-label" for="trainee-{{ $trainee->id }}">{{ optional($trainee->user)->name }}</label>
                                </div>
                            </fieldset>
                        </div>
                        @empty
                            <div class="col-md-6">
                                <p>{{ __('No Trainee. All trainee had their course. Please add more trainee!') }}</p>
                            </div>
                        @endforelse
                    </div>
                    <hr>
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    @if (!$trainees->isEmpty())
                    <button type="submit" class="btn btn-outline-danger">{{ __('Add Trainee') }}</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
