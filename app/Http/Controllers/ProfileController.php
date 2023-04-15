<?php

namespace App\Http\Controllers;

use App\ActivateProfile;
use App\Friend;
use App\ErrorLog;
use App\Images;
use App\Profiles;
use App\RoleMaster;
use App\UserMaster;
use App\ViewContacts;
use App\ViewedContact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProfileController extends Controller
{

    public function get_error_log()
    {
        $errors = ErrorLog::orderBy('id', 'desc')->paginate(20);
        $i = count($errors);
        if (count($errors) > 0) {

            foreach ($errors as $error) {
                echo $i . "<b>.  Error Msg: </b>" . $error->error_msg . "</br>" . "<b>Controller: </b>" . $error->controller_name . "</br>" . "<b>Function: </b>" . $error->function_name . "</br>" . "<b>Created Time: </b>" . $error->created_time . "</br></br>";
                $i--;
            }
        } else {
            return "No More Error Logs Available...";
        }
    }

    public function viewcontact()
    {
        if (isset($_SESSION['user_master'])) {
//            $user = $_SESSION['user_master'];
            $view_user_id = request('search_user_id');
            $user = Profiles::find($_SESSION['user_master']->id);
            $active = ActivateProfile::find($user->id);
            $today = Carbon::now()->format('Y-m-d');
            $view_profile = Profiles::find($view_user_id);
            if ($active->active != 'no' && $active->active != '' && $active->deactivated_at >= $today) {
                $queryResult = DB::select("call GetFriendType($view_user_id,$user->id)");
                $result = collect($queryResult);
                if ($view_profile->is_show_contact == 1 || $view_profile->is_show_contact == 2) {
                    if ($view_profile->is_show_contact == '2' && $result[0]->status_ == 'FRIENDS') {
                        $viewed_contact = ViewedContact::where(['user_id' => $user->id, 'viewed_id' => $view_user_id])->first();
                        if (!isset($viewed_contact)) {
                            $viewed_contact_add = new ViewedContact();
                            $viewed_contact_add->user_id = $user->id;
                            $viewed_contact_add->viewed_id = $view_user_id;
                            $viewed_contact_add->save();

                            $contact = ViewContacts::where(['user_id' => $user->id])->first();
                            $contact->contact_left -= 1;
                            $contact->save();
                        }
                    } else {
                        $viewed_contact = ViewedContact::where(['user_id' => $user->id, 'viewed_id' => $view_user_id])->first();
                        if (!isset($viewed_contact)) {
                            $viewed_contact_add = new ViewedContact();
                            $viewed_contact_add->user_id = $user->id;
                            $viewed_contact_add->viewed_id = $view_user_id;
                            $viewed_contact_add->save();

                            $contact = ViewContacts::where(['user_id' => $user->id])->first();
                            $contact->contact_left -= 1;
                            $contact->save();
                        }
                    }
                }
                echo 'success';
            } else {
                echo 'unpaid';
            }
        } else {
            echo 'Please login first';
        }
    }


    public
    function show_contact()
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find(request('user_id'));
            $image = Images::find(request('user_id'));
            return view('web.profile.show_contact')->with(['user' => $user, 'image' => $image]);
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }

    public
    function show_contact_admin()
    {
        $user = Profiles::find(request('user_id'));
        $image = Images::find(request('user_id'));
        return view('web.profile.show_contact_admin')->with(['user' => $user, 'image' => $image]);
    }


    public
    function sendrequest()
    {
        if (isset($_SESSION['user_master'])) {
            $user = $_SESSION['user_master'];
            DB::table('friends')->where(['user_id' => $user->id, 'friend_id' => request('search_user_id')])->where(['user_id' => request('search_user_id'), 'friend_id' => $user->id])->delete();
            $friend = new Friend();
            $friend->user_id = $user->id;
            $friend->friend_id = request('search_user_id');
            $friend->status = 'pending';
            $friend->save();
            echo 'success';
        } else {
            echo 'Please login first';
        }
    }

    public
    function cancelrequest() ////by user send/cancel button
    {
        if (isset($_SESSION['user_master'])) {
            $user = $_SESSION['user_master'];
            $friend = Friend::where(['user_id' => $user->id, 'friend_id' => request('search_user_id'), 'status' => 'pending'])->delete();
            echo 'success';
        } else {
            echo 'Please login first';
        }
    }

    public
    function acceptfrequest()
    {
        $user = $_SESSION['user_master'];
        $friend = Friend::where(['user_id' => request('search_user_id'), 'friend_id' => $user->id])->first();
        $friend->status = 'friends';
        $friend->save();
        echo "Friends";
    }


    public
    function unfriend() ////by user send/cancel button
    {
        $user_id = $_SESSION['user_master']->id;
        $friend_id = request('friend_id');
        $friend = DB::select("select f.id, f.status as status from friends f where (f.user_id = $user_id and f.friend_id = $friend_id or f.user_id = $friend_id and f.friend_id = $user_id)");
        if ($friend != null) {
            $f = Friend::find($friend[0]->id);
            $f->delete();
            echo 'unfriend';
        } else {
            echo 'No record available';
        }
    }

    public
    function myprofile()
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            return view('web.my_profile_new')->with(['user' => $user]);
        } else {
            return Redirect::back()->withInput()->withErrors(array('message' => 'Please login first'));
        }
    }

    public
    function profile_photo()
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            return view('web.profile_photo')->with(['user' => $user]);
        } else {
            return Redirect::back()->withInput()->withErrors(array('message' => 'Please login first'));
        }
    }

    public
    function edit_profile()
    {
        if (isset($_SESSION['user_master'])) {
            $user = Profiles::find($_SESSION['user_master']->id);
            return view('web.edit_profile')->with(['user' => $user]);
        } else {
            return Redirect::back()->withInput()->withErrors(array('message' => 'Please login first'));
        }
    }

    public
    function edit_profile_admin($id)
    {
        $user = Profiles::find($id);
        return view('web.edit_profile_admin')->with(['user' => $user]);
    }

    public
    function change_password()
    {
        $curr_pass = $_SESSION['user_master']->password;
        if (request('oldpassword') == $curr_pass) {
//            if (request('newpassword') == request('confirmpassword')) {
            $user = Profiles::find($_SESSION['user_master']->id);
            $user->password = request('newpassword');
            $user->save();
            $_SESSION['user_master'] = $user;
            echo 'ok';
        } else
            echo 'Incorrect';
    }

    public
    function create()
    {
        $role_masters = RoleMaster::getRoleDropdown();
        $user_no = Profiles::GenerateUserNumber();
        return view('user.create_user_master')->with(['role_masters' => $role_masters, 'user_no' => $user_no]);
    }

    public
    function index()
    {
        $role_masters = RoleMaster::getRoleDropdown();
        $user_no = Profiles::GenerateUserNumber();
//        $user_masters = Profiles::get();
        $users = DB::table('profiles')->orderBy('id', 'desc')->paginate(100);
        return view('user.admin_candidate_list')->with(['users' => $users, 'user_no' => $user_no]);
    }

    public
    function admin_s_user()
    {
        $user_id = request('user_id');
//        $users = DB::select("select * from profiles where id = $user_id"); //Profiles::find(request('user_id'));
//        $users = DB::table('profiles')->orderBy('id', 'desc')->paginate(5);
        // $users = DB::table('profiles')
        $users = Profiles::where('id', $user_id)
                ->orWhere('name', 'like', "$user_id%")
                ->orWhere('email', 'like', "$user_id%")
                ->orWhere('contact', 'like', "$user_id%")
                ->orWhere('mob2', "$user_id")
                ->orWhere('landline', "$user_id")
                ->orWhere('city', "$user_id")
                ->orWhere('state', "$user_id")
                ->orWhere('age', "$user_id")
                ->orderBy('id', 'desc')
                ->paginate(50);
//        $users = Profiles::where('id', $user_id)->orWhere('name', $user_id)->paginate(5);
        if (count($users) > 0) {
            return view('user.admin_candidate_list')->with(['users' => $users]);
        } else {
            return Redirect::back()->withInput()->withErrors(array('message' => 'No record round for search'));
        }
    }

    public
    function user_list()
    {
        if (request('type') == 'active') {
            $users = DB::table('profiles')->where(['is_active' => 1])->orderBy('id', 'desc')->paginate(100);
            return view('user.admin_candidate_list')->with(['users' => $users]);
        } else if (request('type') == 'inactive') {
            $users = DB::table('profiles')->where(['is_active' => 0])->orderBy('id', 'desc')->paginate(100);
            return view('user.admin_candidate_list')->with(['users' => $users]);
//            return view('user.view_user_master')->with('user_masters', Profiles::getinactiveUserMaster());
        }
//        else {
//            return view('user.view_user_master')->with('user_masters', Profiles::getUserMaster());
//        }
    }

    public
    function all_user()
    {
        if (request('type') == 'paid') {
            $u = DB::select("SELECT id FROM activate WHERE active = 'yes'");
            foreach ($u as $a) {
                $ab[] = $a->id;
            }
            $users = DB::table('profiles')->whereIn('id', $ab)->orderBy('id', 'desc')->paginate(100);
            return view('user.admin_candidate_list')->with(['users' => $users]);
        } else if (request('type') == 'unpaid') {
            $u = DB::select("SELECT id FROM activate WHERE active = 'no'");
            foreach ($u as $a) {
                $ab[] = $a->id;
            }
            $users = DB::table('profiles')->whereIn('id', $ab)->orderBy('id', 'desc')->paginate(100);
            return view('user.admin_candidate_list')->with(['users' => $users]);
        }
//        else {
//            return view('user.view_user_master')->with('user_masters', Profiles::getUserMaster());
//        }
    }

    public
    function store(Request $request)
    {
//        if (request('id_proof') != null)
//            echo "No";
        $user_master = new Profiles();
        if (!$user_master->checkUsername(request('username'))) {
            return Redirect::back()->withInput()->withErrors('Username already exists in the system. Please type a different username.');
        }
        if (strlen(request('username')) < 5 || strlen(request('password')) < 5) {
            return Redirect::back()->withInput()->withErrors('Username or password must be at least 5 character long');
        }

        $user = new Profiles();
        $user->name = request('name');
        $user->contact = request('contact');
        $user->username = request('username');
        $user->password = md5(request('password'));
        $user->role_master_id = request('role_master_id');
        $user->full_user_no = request('full_user_no');
        $user->user_no = request('user_no');
        $user->save();
        return redirect('user_master');
    }

    public
    function edit($id)
    {
        $role_masters = RoleMaster::getRoleDropdown();
        $user_master = Profiles::find($id);
        return view('user.edit_user_master')->with(['user_master' => $user_master, 'role_masters' => $role_masters]);
    }

    public
    function update($id, Request $request)
    {

        $user_master = Profiles::find($id);
        $user_master->name = request('name');
        $user_master->contact = request('contact');
        $user_master->role_master_id = request('role_master_id');
        $user_master->save();
        return Redirect::back();
    }

    public
    function destroy($id)
    {
        $user_master = Profiles::find($id);
        $user_master->is_active = 0;
        $user_master->save();
        return redirect('user_list')->with(['message' => "User Id: $id has been activated "]);
    }

//
    public
    function activate($id)
    {
        $user_master = Profiles::find($id);
        $user_master->is_active = 1;
        $user_master->save();
        return redirect('user_list')->with(['message' => "User Id: $id has been activated "]);
    }

    public
    function checkUsername($username)
    {
        $user = Profiles::where(['is_active' => 1, 'username' => $username])->first();
        if (is_null($user)) return true;
        else return false;
    }
}
