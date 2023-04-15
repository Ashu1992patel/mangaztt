<?php

namespace App\Http\Controllers;

use App\ActivateProfile;
use App\Plan;
use App\Profiles;
use App\RoleMaster;
use App\UserMaster;
use App\ViewContacts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

session_start();

class UserMasterController extends Controller
{
    public function getdetails()
    {
        return view('user.user_details')->with('user_masters', UserMaster::getUserMaster());
    }

    public function index()
    {
        return view('user.view_user_master')->with('user_masters', UserMaster::getUserMaster());
    }

    public function destroy($id)
    {
        $user_master = Profiles::find($id);
        $user_master->is_active = 0;
        $user_master->save();
        return redirect('user_master')->with('message', 'User has been inactivated user can not login now');
    }

//
    public function activate($id)
    {
        $user_master = Profiles::find($id);
        $user_master->is_active = 1;
        $user_master->save();
        return redirect('user_master')->with('message', 'User has been activated user can login now');
    }

    public function mark_as_paid($user_id)
    {
        $user = Profiles::find($user_id);
        $activate = ActivateProfile::find($user->id);
        $plan_id = 1;
        $plan = Plan::find($plan_id);
        $activate->active = 'yes';
        $activate->plan = 'Gold';
        $activate->plan_id = $plan_id;
        $activate->activated_at = Carbon::now('Asia/Kolkata');
        $activate->deactivated_at = Carbon::now('Asia/Kolkata')->addMonth($plan->valid)->format('Y-m-d');
        $activate->save();

        $contact = ViewContacts::where(['user_id' => $user->id])->first();
        if (isset($contact)) {
            $contact->contact_left += $plan->contact_view;
            $contact->save();
        } else {
            $new_c = new ViewContacts();
            $new_c->user_id = $user->id;
            $new_c->contact_left = $plan->contact_view;
            $new_c->save();
        }
        return redirect('user_master')->with('message', 'Congratulation...this user is now paid member');
//        $user_master = UserMaster::find($id);
//        $user_master->is_active = 1;
//        $user_master->save();
//        return redirect('user_master');
    }

    public function mark_as_unpaid($user_id)
    {
        $user = Profiles::find($user_id);
        $activate = ActivateProfile::find($user->id);
        $plan_id = 1;
        $activate->active = 'no';
        $activate->plan = null;
        $activate->plan_id = null;
        $activate->activated_at = null;
        $activate->deactivated_at = null;
        $activate->save();

        $contact = ViewContacts::where(['user_id' => $user->id])->first();
        if (isset($contact)) {
            $contact->contact_left = 0;
            $contact->save();
        }
        return redirect('user_master')->with('message', 'This user is now unpaid member');
//        $user_master = UserMaster::find($id);
//        $user_master->is_active = 1;
//        $user_master->save();
//        return redirect('user_master');
    }

    public
    function checkUsername($username)
    {
        $user = UserMaster::where(['is_active' => 1, 'username' => $username])->first();
        if (is_null($user)) return true;
        else return false;
    }
}
