<div class="modal animated flipInY text-left" id="delete-{{ $id }}" tabindex="-1" role="dialog"
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
                <h5>{{ __('Delete?') }}</h5>
                <p>{{ __('You will delete one instance from database and can\'t see it at next time!') }}</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('phases.destroy', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-outline-danger">{{ __('Delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
