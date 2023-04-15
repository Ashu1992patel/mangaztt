@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{$errors->first()}}</div>
@endif
{!! Form::open(['url' => 'upload_pic', 'class' => 'form-horizontal', 'files'=>true, 'id'=>'privacy_update']) !!}
<div class="container-fluid">
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="contact">Profile Pic</label>
                <div class='col-sm-9'>
                        <input type="file" id="profile_id" name="pp1">
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="pp2">Other Pic</label>
                <div class='col-sm-9'>
                        <input type="file" id="profile_id" name="pp2">
                </div>
            </div>
            <div class='form-group'>
                <label class="col-sm-2 control-label" for="pp3">Other Pic</label>
                <div class='col-sm-9'>
                        <input type="file" id="profile_id" name="pp3">
                </div>
            </div>

        </div>
        <p class="clearfix"></p>
        <div class="col-sm-12">
            <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-9'>
                    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

