<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelMaster extends Model
{
    protected $table = 'hotel_master';
    public $timestamps = false;

    public function scopeGetActiveHotelMaster($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'asc')->get();
    }

    public function scopegetHotelDropdown()
    {
        $hotels = HotelMaster::where(['is_active' => '1'])->get(['id', 'hotel_name', 'address']);
        $arr[0] = "SELECT";
        foreach ($hotels as $hotel) {
            $arr[$hotel->id] = $hotel->hotel_name . " " . $hotel->address;
        }
        return $arr;
    }

    public function place_master()
    {
        return $this->belongsTo('App\PlaceMaster');
    }
}
