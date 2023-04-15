@if($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{ $errors->first() }}</div>
@endif
{{--{!! Form::open(['url' => 'view_profile', 'class' => 'form-horizontal', 'id'=>'privacy_update']) !!}--}}
<div class="row">
    <label class="col-sm-3 control-label" for="contact">Search By Profile Id:</label>
    <div class='col-sm-9'>
        <div class='col-sm-1'>
            <label class="control-label" for="mm">MM-</label>
        </div>
        <div class='col-sm-10'>
            <input type="number" min="0" class="form-control input-sm numberOnly" id="profile_id"
                   placeholder="Enter Profile Id">
        </div>
    </div>
    <div class='col-sm-offset-4 col-sm-9'>
            <button type="button" onclick="search_by_profileid();" class="btn btn-sm btn-primary" style="margin-top: 10px;">Search</button>
    </div>
</div>
{{--<p class="clearfix"></p>--}}
{{--<div class="col-sm-12">--}}
    {{--<div class='form-group'>--}}

    {{--</div>--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}
<script type="text/javascript">
    function search_by_profileid() {
        var profile_id = $('#profile_id').val();
        if (profile_id == '') {
            swal("Warning", "Please enter profile id", "info");
        } else {
            window.location.href = "{{url('view_profile').'/'}}" + profile_id;
        }
    }
</script>
