@if ($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{ $errors->first() }}</div>
@endif

<form method="POST" action="{{ route('privacy_update') }}" class="form-horizontal" id="privacy_update">

    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Name:</label>
                    <div class='col-sm-8'>
                        <label for="mm" class="control-label">
                            {{ isset($user->name) ? ucfirst($user->name) : '' }}
                        </label>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Email:</label>
                    <div class='col-sm-8'>
                        <label for="mm" class="control-label">
                            {{ isset($user->email) ? $user->email : '' }}
                        </label>
                    </div>
                </div>
                {{-- <div class='form-group'> --}}
                {{-- {!! Form::label('contact', 'Profile', ['class' => 'col-sm-3 control-label']) !!} --}}
                {{-- <div class='col-sm-9'> --}}
                {{-- <img src="{{url('').'/'.$image->pic1}}" alt="" style="height: auto; width: 220px;"> --}}
                {{-- </div> --}}
                {{-- </div> --}}

                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Primary Contact:</label>
                    <div class='col-sm-8'>
                        <label for="" class="control-label">
                            {{ isset($user->contact) ? $user->contact : 'Not Mentioned' }}
                        </label>

                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Alternate Contact:</label>
                    <div class='col-sm-8'>
                        {{--                    {!! Form::label('mm', , ['class' => 'control-label']) !!} --}}

                        <label for=""
                            class="control-label">{{ isset($user->mob2) ? $user->mob2 : 'Not Mentioned' }}</label>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Landline No:</label>
                    <div class='col-sm-8'>
                        <label for="" class="control-label">
                            {{ isset($user->landline) ? $user->landline : 'Not Mentioned' }}
                        </label>
                    </div>
                </div>

                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Address:</label>
                    <div class='col-sm-8'>
                        <label for="" class="control-label">
                            {{ isset($user->address) ? $user->address : 'Not Mentioned' }}
                        </label>

                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
