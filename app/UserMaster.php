<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserMaster extends Model
{
    protected $table = 'user_master';
    public $timestamps = false;

    public function scopeGetActiveUserMaster($query)
    {
        return $query->where('role_master_id', '!=', 1)->get();
    }

    public function scopeGetUserMaster($query)
    {
        return $query->get();
    }

    public function scopeGetActiveDistrMaster($query)
    {
        return $query->where(['is_active' => 1, 'role_master_id' => 2])->get();
    }

    public function scopeGetActiveAdmin($query)
    {
        return $query->where(['is_active' => 1, 'role_master_id' => 1])->get();
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
}
