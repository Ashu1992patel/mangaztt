<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelInfo extends Model
{
    protected $table = 'hotel_info';
    public $timestamps = false;

    public function scopeGetActiveHotelInfo($query)
    {
        return $query->get();
    }

    public function hotel_master()
    {
        return $this->belongsTo('App\HotelMaster');
    }
}
