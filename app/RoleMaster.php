<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleMaster extends Model
{
    protected $table = 'role_master';
    public $timestamps = false;

    public
    function scopegetRoleDropdown()
    {
        $roles = RoleMaster::where(['is_active' => '1'])->where('id', '!=', 1)->get(['id', 'role']);
        $arr[0] = "SELECT";
        foreach ($roles as $role) {
            $arr[$role->id] = $role->role;
        }
        return $arr;
    }
}
