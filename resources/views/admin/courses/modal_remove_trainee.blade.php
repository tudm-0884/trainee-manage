<div class="modal animated zoomIn text-left" id="remove-trainee-{{ $id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel62">{{ __('Are you sure?') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>{{ __('Remove?') }}</h5>
                <p>{{ __('You will remove trainee from course!') }}</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('courses.remove_trainee_from_course', $id) }}" method="POST">
                    @csrf
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-outline-danger">{{ __('Remove') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
