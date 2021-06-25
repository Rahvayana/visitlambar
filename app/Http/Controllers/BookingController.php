<?php

namespace App\Http\Controllers;

use App\Models\AvailableModel;
use App\Models\TourModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function validationBooking(Request $request)
    {
        // dd($request);
        $availableData = AvailableModel::find($request->id_available);
        $tourData = TourModel::find($availableData->id_tour);

        if ($request->guest < $tourData->min_guest || $request->guest > $availableData->max_seat) {
            return redirect()->route('frn.tourdetail', $tourData->id)->with('failed', 'too many or too few guest');
        } else {
            // dd();
            // dd($request, $availableData, $tourData); 
            $guest = $request->guest;
            return view('frontend.layout.tourpayment', compact('guest', 'availableData', 'tourData'));
        }
    }

    public function return()
    {
        return redirect()->route('frn.tourpack');
    }
}
