@if ($errors->any())
    <div role='alert' id='alert' class='alert alert-danger'>{{ $errors->first() }}</div>
@endif
@php
    $session_user1 = $_SESSION['user_master']->id;
    $queryResult = \Illuminate\Support\Facades\DB::select("call GetFriendType($session_user1,$user->id)");
    $result = collect($queryResult);
@endphp

<form method="POST" action="{{ route('privacy_update') }}" class="form-horizontal" id="privacy_update">
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

    <div class="container-fluid">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Name:</label>
                    <div class='col-sm-8'>
                        <label class="control-label" for="mm">
                            {{ isset($user->name) ? ucfirst($user->name) : '' }}
                        </label>
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Email:</label>
                    <div class='col-sm-8'>
                        <label class="control-label" for="mm">
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
                        @if ($user->is_show_contact == '1' || $user->is_show_contact == '2')
                            @if ($user->is_show_contact == '2' && $result[0]->status_ == 'FRIENDS')
                                <label for=""
                                    class="control-label">{{ isset($user->contact) ? $user->contact : 'Not Mentioned' }}</label>
                            @elseif($user->is_show_contact == '1')
                                <label for=""
                                    class="control-label">{{ isset($user->contact) ? $user->contact : 'Not Mentioned' }}</label>
                            @else
                                <label for="" class="control-label">This User has choosen to hide phone
                                    number</br> But You can Send Interest & Accept by Member After then You Can See
                                    Contact Number</label>
                            @endif
                        @else
                            <label for="" class="control-label">This User has choosen to hide phone number But
                                You can Send Interest & Accept by Member After then You Can See Contact Number</label>
                        @endif
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Alternate Contact:</label>
                    <div class='col-sm-8'>
                        {{--                    {!! Form::label('mm', , ['class' => 'control-label']) !!} --}}
                        @if ($user->is_show_contact == '1' || $user->is_show_contact == '2')
                            @if ($user->is_show_contact == '2' && $result[0]->status_ == 'FRIENDS')
                                <label for=""
                                    class="control-label">{{ isset($user->mob2) ? $user->mob2 : 'Not Mentioned' }}</label>
                            @elseif($user->is_show_contact == '1')
                                <label for=""
                                    class="control-label">{{ isset($user->mob2) ? $user->mob2 : 'Not Mentioned' }}</label>
                            @else
                                <label for="" class="control-label">Hide by User</label>
                            @endif
                        @else
                            <label for="" class="control-label">Hide by User</label>
                        @endif
                    </div>
                </div>
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Landline No:</label>
                    <div class='col-sm-8'>
                        {{--                    {!! Form::label('mm', , ['class' => 'control-label']) !!} --}}
                        @if ($user->is_show_contact == '1' || $user->is_show_contact == '2')
                            @if ($user->is_show_contact == '2' && $result[0]->status_ == 'FRIENDS')
                                <label for=""
                                    class="control-label">{{ isset($user->landline) ? $user->landline : 'Not Mentioned' }}</label>
                            @elseif($user->is_show_contact == '1')
                                <label for=""
                                    class="control-label">{{ isset($user->landline) ? $user->landline : 'Not Mentioned' }}</label>
                            @else
                                <label for="" class="control-label">Hide by User</label>
                            @endif
                        @else
                            <label for="" class="control-label">Hide by User</label>
                        @endif
                    </div>
                </div>

                <div class='form-group'>
                    <label class="col-sm-4 control-label" for="contact">Address</label>
                    <div class='col-sm-8'>
                        @if ($user->is_show_contact == '1' || $user->is_show_contact == '2')
                            @if ($user->is_show_contact == '2' && $result[0]->status_ == 'FRIENDS')
                                <label for=""
                                    class="control-label">{{ isset($user->address) ? $user->address : 'Not Mentioned' }}</label>
                            @elseif($user->is_show_contact == '1')
                                <label for=""
                                    class="control-label">{{ isset($user->address) ? $user->address : 'Not Mentioned' }}</label>
                            @else
                                <label for="" class="control-label">Hide by User</label>
                            @endif
                        @else
                            <label for="" class="control-label">Hide by User</label>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
