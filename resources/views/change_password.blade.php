@extends('layout.master.master')

@section('title', 'Change Password')

@section('content')
    <h4>Change Password</h4>
    <hr />
    @if ($errors->any())
        <div role="alert" id="alert" class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <form action="/change_password" method="post" class="form-horizontal" id="frm">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="current_password">Current Password</label>
            <div class="col-sm-10">
                <input type="password" name="current_password" id="current_password" placeholder='Current Password'
                    class="form-control input-sm required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="new_password">New Password</label>
            <div class="col-sm-10">
                <input type="password" name="new_password" id="new_password" placeholder='New Password'
                    class="form-control input-sm required">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="confirm_password">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" name="confirm_password" id="confirm_password" placeholder='Confirm Password'
                    class="form-control input-sm required">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form>
@stop
