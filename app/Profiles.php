<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Profiles extends Model
{
    protected $table = 'profiles';
    public $timestamps = false;


    public function scopeGetUserMaster($query)
    {
        return $query->get();
    }

    public function scopeGetInactiveUserMaster($query)
    {
        return $query->where(['is_active' => 0])->get();
    }

    public function scopeGetactiveUserMaster($query)
    {
        return $query->where(['is_active' => 1])->get();
    }

    public static function checkcontact($c)
    {
        $user = Profiles::where(['contact' => $c])->first();
        if (is_null($user)) return true;
        else return false;
    }

    public static function checkemail($c)
    {
        $user = Profiles::where(['email' => $c])->first();
        return (is_null($user)) ? true : false;
    }


    public
    function scopegetUserDropdown()
    {
        $users = UserMaster::where('is_active', '1')->get(['id', 'name']);
        $arr[0] = "SELECT";
        foreach ($users as $user) {
            $arr[$user->id] = $user->name;
        }
        return $arr;
    }

//    public
//    function scopegetExecutiveDropdown()
//    {
//        $users = UserMaster::where(['is_active' => 1, 'role_master_id' => 3])->get(['id', 'name']);
//        $arr[0] = "SELECT";
//        foreach ($users as $user) {
//            $arr[$user->id] = $user->name;
//        }
//        return $arr;
//    }

    public static function checkUsername($username)
    {
        $user = UserMaster::where(['is_active' => 1, 'username' => $username])->first();
        if (is_null($user)) return true;
        else return false;
    }

    public function scopeGetCounsellorDropdown()
    {
        $users = UserMaster::where(['is_active' => 1, 'role_master_id' => 3])->get(['id', 'name']);
        $arr[0] = "Select";
        foreach ($users as $user) {
            $arr[$user->id] = $user->name;
        }
        return $arr;
    }
//    public
//    static function checkUsernameUpdate($username, $id)
//    {
//        if ($id != null) $user = UserMaster::find($id);
//        $users = UserMaster::where('is_active', 1)->where('username', 'LIKE', '%' . $username .
//            '%')->first();
//        if ($user->username == $username)
//            return false; // true for store, false for error
//        else if ($users != null)
//            return true;
//        else
//            return false;
//    }
//
//    public
//    function scopeGetCounsellorDropdown()
//    {
//        $users = UserMaster::where(['is_active' => 1, 'role_master_id' => 3])->orWhere(['is_active' => 1, 'role_master_id' => 4])->get(['id', 'name']);
//        $arr[0] = "Select";
//        foreach ($users as $user) {
//            $arr[$user->id] = $user->name;
//        }
//        return $arr;
//    }

    public
    function role_master()
    {
        return $this->belongsTo('App\RoleMaster');
    }

    public static function GenerateUserNumber()
    {
        $user_no = DB::table('user_master')->max('user_no');
        if (is_null($user_no)) $user_no = 1;
        else $user_no++;
        return $user_no;
    }
    
    // Added on 20210525
    public function getAgeAttribute(){
       return Carbon::parse($this->dob)->age;
    }
}
