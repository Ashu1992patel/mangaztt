<script src="{{ url('assets/js/validation.js') }}"></script>

@if ($errors->any())
    <div role="alert" id="alert" class="alert alert-danger">{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('reset_password') }}" class="form-horizontal" id="frm">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label class="col-sm-3 control-label" for="new_password">New Password</label>
        <div class="col-sm-9">
            <input type="hidden" name="user_id" value="{{ $user_master_id }}">

            <input type="password" name="new_password" id="new_password" class="form-control input-sm required"
                placeholder="New Password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="confirm_password">Confirm Password</label>
        <div class="col-sm-9">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control input-sm required"
                placeholder="Confirm Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
