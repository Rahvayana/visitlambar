<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DestinationModel;
use App\Models\ImagesModel;

class DestinationController extends Controller
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
        $destinations = DestinationModel::latest()->simplePaginate(5);

        return view('cms.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.destination.add');
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
            'destination' => 'required',
            'price' => 'required',
            'min_guest' => 'required',
            'description' => 'required',
            'interest' => 'required',
            'longitute' => 'required',
            'latitude' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
        ]);

        foreach ($request->interest as $interest) {
            if ($interest != null) {
                $finalInterest[] = $interest;
            }
        }

        $imageName1 = rand() . '.' . $request->image1->extension();
        $request->image1->move('images/destination/', $imageName1);

        $location = array(
            'lon' => $request->longitute,
            'lat' => $request->latitude,
            'title' => $request->destination,
            'html' => '<h3>' . $request->destination . '</h3>',
            'icon' => 'http://maps.google.com/mapfiles/marker.png'
        );

        $store = DestinationModel::create([
            'destination' => $request->destination,
            'price' => $request->price,
            'min_guest' => $request->min_guest,
            'description' => $request->description,
            'interest' => json_encode($finalInterest),
            'location' => json_encode($location),
            'main_image' => 'images/destination/' . $imageName1,
        ]);

        $foreign = DestinationModel::latest()->first();

        // dd($finalInterest);
        $imageName2 = rand() . '.' . $request->image2->extension();
        $request->image2->move('images/destination/', $imageName2);

        $imageName3 = rand() . '.' . $request->image3->extension();
        $request->image3->move('images/destination/', $imageName3);

        ImagesModel::create([
            'id_foreign' => $foreign->id,
            'image' => 'images/destination/' . $imageName2,
            'flag' => 'destination',
            'number' => '2',
        ]);
        ImagesModel::create([
            'id_foreign' => $foreign->id,
            'image' => 'images/destination/' . $imageName3,
            'flag' => 'destination',
            'number' => '3',
        ]);

        if ($store) {
            return redirect()->route('cms.destination.index')->with('success', 'Adding New Destination Success');
        } else {
            return redirect()->route('cms.destination.index')->with('failed', 'Adding New Destination Failed');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DestinationModel::find($id);
        $data->interest = json_decode($data->interest);
        $data->location = json_decode($data->location);

        $dataImage = ImagesModel::where('id_foreign', '=', $id)->get();
        return view('cms.destination.edit', compact('data', 'dataImage'));
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
            'destination' => 'required',
            'price' => 'required',
            'min_guest' => 'required',
            'description' => 'required',
            'interest' => 'required',
            'longitute' => 'required',
            'latitude' => 'required',
        ]);

        foreach ($request->interest as $interest) {
            if ($interest != null) {
                $finalInterest[] = $interest;
            }
        }

        $location = array(
            'lon' => $request->longitute,
            'lat' => $request->latitude,
            'title' => $request->destination,
            'html' => '<h3>' . $request->destination . '</h3>',
            'icon' => 'http://maps.google.com/mapfiles/marker.png'
        );

        $destination = DestinationModel::find($id);

        if ($request->file('image1') == "") {

            $destination->update([
                'destination' => $request->destination,
                'price' => $request->price,
                'min_guest' => $request->min_guest,
                'description' => $request->description,
                'interest' => json_encode($finalInterest),
                'location' => json_encode($location),
            ]);
        } else {

            //hapus old image
            @unlink($destination->main_image);

            //upload new image
            $imageName1 = time() . '.' . $request->image1->extension();
            $request->image1->move('images/destination/', $imageName1);

            $destination->update([
                'destination' => $request->destination,
                'price' => $request->price,
                'min_guest' => $request->min_guest,
                'description' => $request->description,
                'interest' => json_encode($finalInterest),
                'location' => json_encode($location),
                'main_image' => 'images/destination/' . $imageName1,
            ]);
        }



        if ($request->file('image2') != "") {
            $image = ImagesModel::where('id_foreign', '=', $id)->Where('number', '=', '2')->Where('flag', '=', 'destination')->first();

            $imageName2 = time() . '.' . $request->image2->extension();
            $request->image2->move('images/destination/', $imageName2);

            if (file_exists($image->image)) {
                @unlink($image->image);
            } else {
                echo ($image->image);
            }

            $image->update([
                'image' => 'images/destination/' . $imageName2
            ]);
        }

        if ($request->file('image3') != "") {
            $image = ImagesModel::where('id_foreign', '=', $id)->Where('number', '=', '3')->Where('flag', '=', 'destination')->first();

            $imageName3 = time() . '.' . $request->image3->extension();
            $request->image3->move('images/destination/', $imageName3);

            if (file_exists($image->image)) {
                @unlink($image->image);
            } else {
                echo ($image->image);
            }

            $image->update([
                'image' => 'images/destination/' . $imageName3
            ]);
        }

        return redirect()->route('cms.destination.index')->with('success', 'Updating Destination Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DestinationModel::find($id);
        $dataImage = ImagesModel::where('id_foreign', '=', $id)->Where('flag', '=', 'destination')->get();

        // dd($data, $dataImage);

        foreach ($dataImage as $image) {
            if (file_exists($image->image)) {
                @unlink($image->image);
                $image->delete();
            } else {
                echo ($image->image);
            }
        }

        if (file_exists($data->main_image)) {
            @unlink($data->main_image);
        } else {
            echo ($data->main_image);
        }

        $data->delete();

        return redirect()->route('cms.destination.index')->with('success', 'Deleting Destinations Success');
    }
}
