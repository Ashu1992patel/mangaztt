<script src="{{ url('assets/js/validation.js') }}"></script>
@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
<form action="" method="post"></form>
{!! Form::open(['url' => 'user_master', 'class' => 'form-horizontal', 'id'=>'user_master']) !!}
<div class="container-fluid">
    <div class="container-fluid">
        <div class="col-sm-6">
            <h3 class="bg-danger text-center">Basic Info</h3>

            <div class='form-group'>
                <label class="col-sm-4 control-label" for="user_no">User No#</label>
                <div class='col-sm-8'>
                    <p></p>
                    <label for="" class="badge">BJINQ-{{$user_no}}</label>
                    <input type="hidden" class="form-control" name="full_user_no" value="BJINQ-{{$user_no}}"
                           id="user_no">
                    <input class="form-control" name="user_no" type="hidden" value="{{$user_no}}">
                </div>
            </div>

            <div class='form-group'>
                <label class="col-sm-4 control-label" for="name">Name</label>
                <div class='col-sm-8'>
                    <input type="text" name="name" id="name" class="form-control input-sm required" placeholder="Name">
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-4 control-label" for="contact">Contact *</label>
                <div class='col-sm-8'>
                    <input type="text" name="contact" id="contact" class="form-control input-sm required contact" placeholder="Contact">
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <h3 class="bg-danger text-center">Login Info</h3>
            <p class="clearfix"></p>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="role">Role</label>
                <div class='col-sm-8'>
                    {!! Form::select('role_master_id', $role_masters, null,['class' => 'form-control requiredDD']) !!}
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-4 control-label" for="username">Username *</label>
                <div class='col-sm-8'>
                    <input type="text" name="username" id="username" class="form-control input-sm required" placeholder="Username">
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-4 control-label" for="password">Password *</label>
                <div class='col-sm-8'>
                    <input type="password" name="password" id="password" class="form-control input-sm required" placeholder="Password">
                </div>
            </div>
            <div class='form-group'>
                <div class='col-sm-offset-4 col-sm-8'>
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
