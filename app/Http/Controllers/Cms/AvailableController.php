<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\AvailableModel;
use App\Models\TourModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AvailableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataAvailable = AvailableModel::latest()->simplePaginate(10);
        return view('cms.available.index', compact('dataAvailable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = TourModel::get();
        return view('cms.available.add', compact('tours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_tour' => 'required',
            'date_start' => 'required',
            'max_seat' => 'required',
            'discount' => 'required',
        ]);

        $dataTour = TourModel::find($request->id_tour);
        $day = substr($dataTour->time, 0, 1);

        $start = new Carbon($request->date_start);
        // dd($start, $request->date_start);
        $end = $start->addDays($day);
        // dd($end->toDateString('Y-m-d'), $request->date_start);

        if ($request->discount == '0') {
            $discount = ($dataTour->price * $request->discount) / 100;
            $price = $dataTour->price - $discount;
        } else {
            $price = $dataTour->price;
        }

        // dd($day);
        $store = AvailableModel::create([
            'id_tour' => $request->id_tour,
            'tour_name' => $dataTour->name,
            'date_start' => $request->date_start,
            'date_end' => $end->toDateString('Y-m-d'),
            'day' => $day,
            'max_seat' => $request->max_seat,
            'discount' => $request->discount,
            'price' => $price,
            'booking_fee' => $request->booking_fee,
            'other_fee' => $request->other_fee,
        ]);

        if ($store) {
            return redirect()->route('cms.available.index')->with('success', 'Adding Success');
        } else {
            return redirect()->route('cms.available.index')->with('failed', 'Adding Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours = TourModel::get();
        $available = AvailableModel::find($id);

        return view('cms.available.edit', compact('tours', 'available'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_tour' => 'required',
            'max_seat' => 'required',
            'discount' => 'required',
        ]);

        $dataTour = TourModel::find($request->id_tour);
        $day = substr($dataTour->time, 0, 1);

        $start = new Carbon($request->date_start);
        // dd($start, $request->date_start);
        $end = $start->addDays($day);
        // dd($end->toDateString('Y-m-d'), $request->date_start);

        if ($request->discount == '0') {
            $discount = ($dataTour->price * $request->discount) / 100;
            $price = $dataTour->price - $discount;
        } else {
            $price = $dataTour->price;
        }

        $store = AvailableModel::find($id);

        if ($request->date_start != null) {
            // dd('not null');
            $store->update([
                'id_tour' => $request->id_tour,
                'tour_name' => $dataTour->name,
                'date_start' => $request->date_start,
                'date_end' => $end->toDateString('Y-m-d'),
                'day' => $day,
                'max_seat' => $request->max_seat,
                'discount' => $request->discount,
                'price' => $price,
                'booking_fee' => $request->booking_fee,
                'other_fee' => $request->other_fee,
            ]);
        } else {
            $store->update([
                'id_tour' => $request->id_tour,
                'tour_name' => $dataTour->name,
                'day' => $day,
                'max_seat' => $request->max_seat,
                'discount' => $request->discount,
                'price' => $price,
                'booking_fee' => $request->booking_fee,
                'other_fee' => $request->other_fee,
            ]);
        }
        // dd($day);


        if ($store) {
            return redirect()->route('cms.available.index')->with('success', 'Updating Success');
        } else {
            return redirect()->route('cms.available.index')->with('failed', 'Updating Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataAvailable = AvailableModel::find($id);
        $dataAvailable->delete();

        return redirect()->route('cms.available.index')->with('success', 'Deleting success');
    }
}
