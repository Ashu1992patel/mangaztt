@if ($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('aadhar_upload') }}" class="form-horizontal" id="privacy_update"
    enctype="multipart/form-data">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="col-sm-12">
                @if (!isset($user->aadhar))
                    <div class='form-group'>
                        <label class="col-sm-2 control-label" for="contact">Upload Aadhar Front</label>
                        <div class='col-sm-9'>
                            <input type="file" id="aadhar_id" name="aadhar">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class="col-sm-2 control-label" for="contact">Upload Aadhar Back</label>
                        <div class='col-sm-9'>
                            <input type="file" id="aadhar_id" name="aadhar_back">
                        </div>
                    </div>
                @else
                    <div class='form-group'>
                        <div class='col-sm-6'>
                            <img src="{{ url('') . '/' . $user->aadhar }}" height="auto" width="80%" alt="">
                        </div>
                        <div class='col-sm-6'>
                            <img src="{{ url('') . '/' . $user->aadhar_back }}" height="auto" width="80%"
                                alt="">

                        </div>

                    </div>
                @endif
            </div>
            <p class="clearfix"></p>
            <div class="col-sm-12">
                <div class='form-group'>
                    <div class='col-sm-12'>
                        @if (!isset($user->aadhar))
                            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                        @else
                            <button type="button" id="{{ $user->id }}" class="btn btn-sm btn-primary"
                                onclick="delete_aadhar(this);">Delete</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function delete_aadhar(dis) {
        var id = $(dis).attr('id');
        $('#myModal').modal('show');
        $('#modal_body').html('<img height="50px" class="center-block" src="{{ url('images/loading.gif') }}"/>');
        $('#modal_title').html('Confirm Deletion');
        $('#modal_body').html('<h5>Are you sure want to delete this aadhar<h5/>');
        $('#modalBtn').html('<a class="btn btn-sm btn-danger" href="{{ url('aadhar') . '/' }}' + id +
            '/delete"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirm</a>'
        );
    }
</script>
