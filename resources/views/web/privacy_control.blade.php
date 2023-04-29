@if ($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('privacy_update') }}" class="form-horizontal" id="privacy_update">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class='form-group'>
                    <label class="col-sm-3 control-label" for="contact">Contact</label>
                    <div class='col-sm-9'>
                        <select class="form-control requiredDD" name="is_show_contact">
                            <option {{ $user->is_show_contact == '1' ? 'selected' : '' }} value="1">Show to all
                            </option>
                            <option {{ $user->is_show_contact == '0' ? 'selected' : '' }} value="0">Only me
                            </option>
                            <option {{ $user->is_show_contact == '2' ? 'selected' : '' }} value="2">
                                Accepted/Friends</option>
                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-3 control-label" for="dob">Date of Birth</label>
                    <div class='col-sm-9'>
                        <select class="form-control requiredDD" name="is_show_dob">
                            <option {{ $user->is_show_dob == '1' ? 'selected' : '' }} value="1">Show to all
                            </option>
                            <option {{ $user->is_show_dob == '0' ? 'selected' : '' }} value="0">Only me</option>
                            <option {{ $user->is_show_dob == '2' ? 'selected' : '' }} value="2">Accepted/Friends
                            </option>

                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-3 control-label" for="img">Profile Pic</label>
                    <div class='col-sm-9'>
                        <select class="form-control requiredDD" name="is_show_pic">
                            <option {{ $user->is_show_pic == '1' ? 'selected' : '' }} value="1">Show to all
                            </option>
                            <option {{ $user->is_show_pic == '0' ? 'selected' : '' }} value="0">Only me</option>
                            {{--                        <option {{$user->is_show_img=='2'?'selected':''}} value="2">Accepted/Friends</option> --}}

                        </select>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-offset-3 col-sm-9'>
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
