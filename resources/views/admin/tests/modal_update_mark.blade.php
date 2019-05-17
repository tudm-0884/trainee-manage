<div class="modal animated bounceIn text-left" id="update-mark-{{ $id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel62">{{ __('Scoring the test') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>{{ __('The Test?') }}</h5>
                <p>{{ __('Click to content link. Score and mark it. Then paste score here!') }}</p>
                <p><a target="_blank" href="{{ $link }}">{{ $link }}</a></p>
                <form action="{{ $route }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mark">{{ __('Mark') }}</label>
                                <input type="number" id="mark" name="mark" min="0" required value="0" class="form-control">                            
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="{{ config('constants.not_achieved') }}">{{ config('constants.test_status')[config('constants.not_achieved')] }}</option>
                                    <option value="{{ config('constants.done') }}">{{ config('constants.test_status')[config('constants.done')] }}</option>
                                </select>                    
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-outline-info">{{ __('Update') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
