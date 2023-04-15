<?php

namespace App\Http\Controllers;

use App\HotelMaster;
use App\PlaceMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HotelMasterController extends Controller
{
    public function index()
    {
        return view('hotel.view_hotel')->with('hotels', HotelMaster::getActiveHotelMaster());
    }

    public function create()
    {
        $places = PlaceMaster::getPlaceDropdown();
        return view('hotel.create_hotel')->with(['places' => $places]);
    }

    public function store(Request $request)
    {
        $hotel = new HotelMaster();
        $hotel->place_master_id = request('place_master_id');
        $hotel->hotel_name = request('hotel_name');
        $hotel->contact = request('contact');
        $hotel->address = request('address');
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been added...!');
    }

    public function edit($id)
    {
        $hotel = HotelMaster::find($id);
        $places = PlaceMaster::getPlaceDropdown();
        return view('hotel.edit_hotel')->with(['hotel' => $hotel, 'places' => $places]);
    }

    public function update($id, Request $request)
    {
        $hotel = HotelMaster::find($id);
        $hotel->place_master_id = request('place_master_id');
        $hotel->hotel_name = request('hotel_name');
        $hotel->contact = request('contact');
        $hotel->address = request('address');
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been updated...!');
    }

    public
    function destroy($id)
    {
        $hotel = HotelMaster::find($id);
        $hotel->is_active = 0;
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been deleted...!');
    }

//
    public function booked($id)
    {
        $hotel = HotelMaster::find($id);
        $hotel->is_booked = 1;
        $hotel->save();
        return redirect('hotel');
    }

    public function available($id)
    {
        $hotel = HotelMaster::find($id);
        $hotel->is_booked = 0;
        $hotel->save();
        return redirect('hotel');
    }
}
