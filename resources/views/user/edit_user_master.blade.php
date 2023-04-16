<script src="{{ url('assets/js/validation.js') }}"></script>

@if (!is_null($user_master))
    {!! Form::open([
        'url' => 'user_master/' . $user_master->id,
        'class' => 'form-horizontal',
        'id' => 'user_master',
        'method' => 'put',
        'files' => true,
    ]) !!}
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="user_no">User No#</label>
                <div class='col-sm-8'>
                    <p></p>
                    <label for="" class="badge">BJINQ-{{ $user_master->user_no }}</label>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="role">Role *</label>
                <div class='col-sm-8'>
                    {{-- {!! Form::select('role_master_id', $role_masters, $user_master->role_master_id, [
                        'class' => 'form-control requiredDD',
                    ]) !!} --}}

                    <select name="role_master_id" class="form-control requiredDD" id="role_master_id">
                        @foreach ($role_masters as $key => $role)
                            <option value="{{ $role }}"
                                @if (old('role_master_id') == $role) {{ 'selected' }} @endif>
                                {{ $role }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="name">Name *</label>
                <div class='col-sm-8'>
                    <input type="text" name="name" id="name" value="{{ $user_master->name }}"
                        class="form-control input-sm required" placeholder="Name">
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="contact">Contact *</label>
                <div class='col-sm-8'>
                    <input type="text" name="contact" id="contact" value="{{ $user_master->contact }}"
                        class="form-control input-sm required contact" placeholder="Contact">
                </div>
            </div>
            <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-8'>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </div>
    {!! Form::close() !!}
@else
    <h4>UserMaster not found !</h4>
@endif
<script>
    $(function() {
        $('.dtp').datepicker({
            format: "dd-M-yyyy",
            maxViewMode: 2,
            todayBtn: "linked",
            daysOfWeekHighlighted: "0",
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
