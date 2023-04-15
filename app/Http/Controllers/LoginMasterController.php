<?php

namespace App\Http\Controllers;

use App\Model\LeadMaster;
use App\UserMaster;
use Carbon\Carbon;
use Illuminate\Http\Request;

session_start();

class LoginMasterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store()
    {
        $username = request('username');
        $password = request('password');
        $user = UserMaster::where(['is_active' => 1, 'username' => $username, 'password' => $password])->first();
        if ($user != null) {
            $_SESSION['admin_master'] = $user;
            $temp_user = UserMaster::find($user->id);
            $temp_user->last_login = Carbon::now();
            $temp_user->save();
//            echo "hi";
            return redirect('dashboard');
//            return view('dashboard.admin')->with('user_master', $user);
        } else
            return redirect('access')->withInput()->withErrors(array('message' => 'UserName or password Invalid'));

    }

    public function login_user()
    {
//        echo "cd";
        if (isset($_SESSION['admin_master'])) {
            $user = $_SESSION['admin_master'];
            if ($user->role_master_id == 1) {
                return view('dashboard.admin')->with('user_master', $user);
            } else if ($user->role_master_id === 2) {
                return view('dashboard.tally_caller')->with('user_master', $user);
            } else if ($user->role_master_id === 3) {
                return view('dashboard.executive')->with('user_master', $user);
            }
        }
        return redirect('/');
    }

    public function change_password()
    {
        $curr_pass = $_SESSION['admin_master']->password;
        if (md5(request('current_password')) == $curr_pass) {
            if (request('new_password') == request('confirm_password')) {
                $user = UserMaster::find($_SESSION['admin_master']->id);
                $user->password = md5(request('new_password'));
                $user->save();
                $_SESSION['admin_master'] = $user;
                return redirect('change_password')->withErrors(array('message' => 'Password changed successfully.'));
            } else
                return redirect('change_password')->withInput()->withErrors(array('message' => 'Passwords mismatch'));
        } else
            return redirect('change_password')->withInput()->withErrors(array('message' => 'Incorrect current password'));
    }

    public function marketingHome()
    {
        $marketing_id = $_SESSION['admin_master']->id;
        $lead = LeadMaster::where(['is_active' => 1, 'user_master_id' => $marketing_id])->orderBy('created_date', 'desc')->get();
        return view('marketing_executive.home_marketing_exe')->with('lead', $lead);
    }

    public function reset($id)
    {
        return view('user.reset_password')->with(['user_master_id' => $id]);
    }

    public function reset_password()
    {
        if (request('new_password') == request('confirm_password')) {
            $user = UserMaster::find(request('user_id'));
            $user->password = md5(request('new_password'));
            $user->save();
//            $_SESSION['user_master'] = $user;
            return redirect()->back()->with('message', 'Password has been reset successfully...!');
        } else
            return redirect('user_master')->withInput()->withErrors(array('message' => 'Passwords mismatch'));
    }
}
