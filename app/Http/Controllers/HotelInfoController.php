<?php

namespace App\Http\Controllers;

use App\HotelInfo;
use App\HotelMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HotelInfoController extends Controller
{
    public function index($id)
    {
        $hotel_info = HotelInfo::where(['hotel_master_id' => $id, 'is_active' => 1])->get();
        $hotel = HotelMaster::find($id);
        return view('hotel.info.view_hotel_info')->with(['hotel_info' => $hotel_info, 'hotel' => $hotel]);
    }

    public function create($id)
    {
//        $hotels = HotelMaster::getHotelDropdown();
        $hotel = HotelMaster::find($id);
        return view('hotel.info.create_hotel_info')->with(['hotel' => $hotel]);
    }

    public function store(Request $request)
    {
        $hotel = new HotelInfo();
        $hotel->hotel_master_id = request('hotel_master_id');
        $hotel->room_type = request('room_type');
        $hotel->rate = request('rate');
        $hotel->save();
        return redirect('hotel_info/' . $hotel->hotel_master_id . '/info')->with('message', 'Room has been added...!');
    }

    public function edit($id)
    {
        $hotel_info = HotelInfo::find($id);
        $hotels = HotelMaster::getHotelDropdown();
        return view('hotel.info.edit_hotel_info')->with(['hotel_info' => $hotel_info, 'hotels' => $hotels]);
    }

    public function update($id, Request $request)
    {
        $hotel = HotelInfo::find($id);
        $hotel->hotel_master_id = request('hotel_master_id');
        $hotel->room_type = request('room_type');
        $hotel->rate = request('rate');
        $hotel->save();
        return redirect('hotel_info/' . $hotel->hotel_master_id . '/info')->with('message', 'Room has been updated...!');
    }

    public
    function destroy($id)
    {
        $hotel = HotelInfo::find($id);
        $hotel->is_active = 0;
        $hotel->save();
        return redirect('hotel_info/' . $hotel->hotel_master_id . '/info')->with('message', 'Room has been deleted...!');
    }
}
