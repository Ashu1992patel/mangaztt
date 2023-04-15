<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $table = 'error_log';
    public $timestamps = false;

    public static function store_error($err_msg, $controller_name, $function_name)
    {
        $store_error = new ErrorLog();
        $store_error->error_msg = $err_msg;
        $store_error->controller_name = $controller_name;
        $store_error->function_name = $function_name;
        $store_error->created_time = Carbon::now('Asia/Kolkata');
        $store_error->save();
    }
}
