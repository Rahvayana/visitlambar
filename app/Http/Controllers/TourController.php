<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DestinationModel;
use App\Models\TourModel;
use App\Models\ImagesModel;

class TourController extends Controller
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
        $tours = TourModel::latest()->simplePaginate(5);

        return view('cms.tour.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = DestinationModel::get();
        return view('cms.tour.add', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // $id_tour = array('1', '2', '3',);
        // $new = 'data baru';
        // if (($key = array_search('1', $id_tour)) !== false) unset($id_tour[$key]);
        // array_push($id_tour, $new);
        // dd($id_tour);

        foreach ($request->interest as $interest) {
            if ($interest != null) {
                $finalInterest[] = $interest;
            }
        }
        for ($i = 0; $i < sizeof($request->start) - 1; $i++) {
            if ($request->start[$i] != null) {
                $finalStart[] = $request->start[$i];
            } else {
                $finalStart[] = 'none';
            }
        }
        for ($i = 0; $i < sizeof($request->end) - 1; $i++) {
            if ($request->end[$i] != null) {
                $finalEnd[] = $request->end[$i];
            } else {
                $finalEnd[] = 'none';
            }
        }
        for ($i = 0; $i < sizeof($request->stay) - 1; $i++) {
            if ($request->stay[$i] != null) {
                $finalStay[] = $request->stay[$i];
            } else {
                $finalStay[] = 'none';
            }
        }
        foreach ($request->titleInclude as $titleInclude) {
            if ($titleInclude != null) {
                $finalTitleInclude[] = $titleInclude;
            } else {
                $finalTitleInclude[] = 'none';
            }
        }
        foreach ($request->titleNotInclude as $titleNotInclude) {
            if ($titleNotInclude != null) {
                $finalTitleNotInclude[] = $titleNotInclude;
            } else {
                $finalTitleNotInclude[] = 'none';
            }
        }
        foreach ($request->descInclude as $descInclude) {
            if ($descInclude != null) {
                $finalDescInclude[] = $descInclude;
            } else {
                $finalDescInclude[] = 'none';
            }
        }
        foreach ($request->descNotInclude as $descNotInclude) {
            if ($descNotInclude != null) {
                $finalDescNotInclude[] = $descNotInclude;
            } else {
                $finalDescNotInclude[] = 'none';
            }
        }

        for ($i = 0; $i < sizeof($finalTitleInclude); $i++) {
            $featureInclude[] = array(
                'include' => $finalTitleInclude[$i],
                'descInclude' => $finalDescInclude[$i],
            );
        }
        for ($i = 0; $i < sizeof($finalTitleNotInclude); $i++) {
            $featureNotInclude[] = array(
                'notInclude' => $finalTitleNotInclude[$i],
                'descNotInclude' => $finalDescNotInclude[$i],
            );
        }
        $feature = array(
            'include' => json_encode($featureInclude),
            'notInclude' => json_encode($featureNotInclude),
        );

        // dd($request->destination);

        foreach ($request->destination as $key => $destination) {
            $dataDestination = DestinationModel::find($destination);
            $destinationPlan[] = array(
                'id' => $dataDestination->id,
                'destination' => $dataDestination->destination,
                'desc' => $dataDestination->description,
                'start' => $finalStart[$key],
                'end' => $finalEnd[$key],
                'stay' => $finalStay[$key],
            );
        }

        $plan = array(
            'descPlan' => $request->plan_desc,
            'destinationPlan' => json_encode($destinationPlan),
        );

        // dd($location);
        $night = 0;
        foreach ($finalStay as $stay) {
            if ($stay != 'none') {
                $night += 1;
            }
        }

        // dd($plan[0]['destination']);
        // dd($request->name, $request->price, $request->min_guest, $request->desc, json_encode($finalInterest), json_encode($location), json_encode($feature), json_encode($plan));

        $imageName1 = rand() . '.' . $request->image1->extension();
        $request->image1->move('images/tour/', $imageName1);


        $store = TourModel::create([
            'name' => $request->name,
            'price' => $request->price,
            'min_guest' => $request->min_guest,
            'desc' => $request->desc,
            'interest' => json_encode($finalInterest),
            'feature' => json_encode($feature),
            'plan' => json_encode($plan),
            'start' => $destinationPlan[0]['destination'],
            'end' => $destinationPlan[sizeof($destinationPlan) - 1]['destination'],
            'time' => sizeof($request->destination) . 'D' . $night . 'N',
            'main_image' => 'images/tour/' . $imageName1,
        ]);

        $foreign = TourModel::latest()->first();
        $foreign->plan = json_decode($foreign->plan);
        $foreign->plan->destinationPlan = json_decode($foreign->plan->destinationPlan);
        foreach ($foreign->plan->destinationPlan as $destinationPlan) {
            $destinationData = DestinationModel::find($destinationPlan->id);
            if ($destinationData->id_tour == null) {
                $dataId = array($foreign->id);
                // dd($dataId);
                $destinationData->update([
                    'id_tour' => json_encode($dataId),
                ]);
            } else {
                $dataId = json_decode($destinationData->id_tour);
                if (($key = array_search($foreign->id, $dataId)) == false) {
                    array_push($dataId, $foreign->id);
                    // dd($dataId);
                    $destinationData->update([
                        'id_tour' => json_encode($dataId),
                    ]);
                }
            }
        }


        // dd($finalInterest);
        $imageName2 = rand() . '.' . $request->image2->extension();
        $request->image2->move('images/tour/', $imageName2);

        $imageName3 = rand() . '.' . $request->image3->extension();
        $request->image3->move('images/tour/', $imageName3);

        ImagesModel::create([
            'id_foreign' => $foreign->id,
            'image' => 'images/tour/' . $imageName2,
            'flag' => 'tour',
            'number' => '2',
        ]);
        ImagesModel::create([
            'id_foreign' => $foreign->id,
            'image' => 'images/tour/' . $imageName3,
            'flag' => 'tour',
            'number' => '3',
        ]);

        if ($store) {
            return redirect()->route('cms.tour.index')->with('success', 'Adding New Tour Success');
        } else {
            return redirect()->route('cms.tour.index')->with('failed', 'Adding New Tour Failed');
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
        $dataTour = TourModel::find($id);
        $destinations = DestinationModel::get();

        $dataTour->interest = json_decode($dataTour->interest);
        $dataTour->location = json_decode($dataTour->location);
        $dataTour->plan = json_decode($dataTour->plan);
        $dataTour->plan->destinationPlan = json_decode($dataTour->plan->destinationPlan);
        $dataTour->feature = json_decode($dataTour->feature);
        $dataTour->feature->include = json_decode($dataTour->feature->include);
        $dataTour->feature->notInclude = json_decode($dataTour->feature->notInclude);

        $images = ImagesModel::where('id_foreign', '=', $id)->where('flag', '=', 'tour')->get();
        // dd($dataTour);

        return view('cms.tour.edit', compact('dataTour', 'destinations', 'images'));
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
        foreach ($request->interest as $interest) {
            if ($interest != null) {
                $finalInterest[] = $interest;
            }
        }
        for ($i = 0; $i < sizeof($request->start) - 1; $i++) {
            if ($request->start[$i] != null) {
                $finalStart[] = $request->start[$i];
            } else {
                $finalStart[] = 'none';
            }
        }
        for ($i = 0; $i < sizeof($request->end) - 1; $i++) {
            if ($request->end[$i] != null) {
                $finalEnd[] = $request->end[$i];
            } else {
                $finalEnd[] = 'none';
            }
        }
        for ($i = 0; $i < sizeof($request->stay) - 1; $i++) {
            if ($request->stay[$i] != null) {
                $finalStay[] = $request->stay[$i];
            } else {
                $finalStay[] = 'none';
            }
        }
        foreach ($request->titleInclude as $titleInclude) {
            if ($titleInclude != null) {
                $finalTitleInclude[] = $titleInclude;
            } else {
                $finalTitleInclude[] = 'none';
            }
        }
        foreach ($request->titleNotInclude as $titleNotInclude) {
            if ($titleNotInclude != null) {
                $finalTitleNotInclude[] = $titleNotInclude;
            } else {
                $finalTitleNotInclude[] = 'none';
            }
        }
        foreach ($request->descInclude as $descInclude) {
            if ($descInclude != null) {
                $finalDescInclude[] = $descInclude;
            } else {
                $finalDescInclude[] = 'none';
            }
        }
        foreach ($request->descNotInclude as $descNotInclude) {
            if ($descNotInclude != null) {
                $finalDescNotInclude[] = $descNotInclude;
            } else {
                $finalDescNotInclude[] = 'none';
            }
        }

        for ($i = 0; $i < sizeof($finalTitleInclude); $i++) {
            $featureInclude[] = array(
                'include' => $finalTitleInclude[$i],
                'descInclude' => $finalDescInclude[$i],
            );
        }
        for ($i = 0; $i < sizeof($finalTitleNotInclude); $i++) {
            $featureNotInclude[] = array(
                'notInclude' => $finalTitleNotInclude[$i],
                'descNotInclude' => $finalDescNotInclude[$i],
            );
        }
        $feature = array(
            'include' => json_encode($featureInclude),
            'notInclude' => json_encode($featureNotInclude),
        );

        // dd($request->destination);

        foreach ($request->destination as $key => $destination) {
            $dataDestination = DestinationModel::find($destination);
            $destinationPlan[] = array(
                'id' => $dataDestination->id,
                'destination' => $dataDestination->destination,
                'desc' => $dataDestination->description,
                'start' => $finalStart[$key],
                'end' => $finalEnd[$key],
                'stay' => $finalStay[$key],
            );
            $location[] = json_decode($dataDestination->location);
        }

        $plan = array(
            'descPlan' => $request->plan_desc,
            'destinationPlan' => json_encode($destinationPlan),
        );

        // dd($location);
        $night = 0;
        foreach ($finalStay as $stay) {
            if ($stay != 'none') {
                $night += 1;
            }
        }

        // dd($request);
        $dataTour = TourModel::find($id);

        $dataTour->plan = json_decode($dataTour->plan);
        $dataTour->plan->destinationPlan = json_decode($dataTour->plan->destinationPlan);
        $del_id = array();
        // dd($request->destination, $dataTour->plan->destinationPlan);
        if (count($dataTour->plan->destinationPlan) - 1 > count($request->destination) - 1) {
            $array = $dataTour->plan->destinationPlan;
            for ($i = count($request->destination); $i == count($array) - 1; $i++) {
                $del_id[] = $array[$i]->id;
            }

            foreach ($del_id as $del) {
                $destinationData = DestinationModel::find($del);
                // dd($id_data);
                if ($destinationData->id_tour != null) {
                    $id_tour = json_decode($destinationData->id_tour);
                    if (($key = array_search($dataTour->id, $id_tour)) !== false) unset($id_tour[$key]);
                    // dd($id_tour);
                    $destinationData->update([
                        'id_tour' => json_encode($id_tour),
                    ]);
                }
            }
            // dd(count($request->destination), count($array) - 1, $array, $del_id);
        }

        foreach ($request->destination as $key => $destination) {
            if (array_key_exists($key, $dataTour->plan->destinationPlan)) {
                $destinationData = DestinationModel::find($destination);
                if ($destinationData->id_tour != null) {
                    if ($destination == $dataTour->plan->destinationPlan[$key]->id) {
                        $destinationData = DestinationModel::find($destination);
                        $id_tour = json_decode($destinationData->id_tour);

                        if (($key = array_search($dataTour->id, $id_tour)) == false) {
                            array_push($id_tour, $dataTour->id);
                            // dd($id_tour, $id);
                            $destinationData->update([
                                'id_tour' => json_encode($id_tour),
                            ]);
                        }
                    } else {
                        $destinationNew = DestinationModel::find($destination);
                        $destinationOld = DestinationModel::find($dataTour->plan->destinationPlan[$key]->id);
                        $id_tourNew = json_decode($destinationNew->id_tour);
                        $id_tourOld = json_decode($destinationOld->id_tour);
                        // dd($id_tourOld);
                        if (($index = array_search($dataTour->id, $id_tourOld)) !== false) {
                            unset($id_tourOld[$index]);
                            $destinationOld->update([
                                'id_tour' => json_encode($id_tourOld),
                            ]);
                        }

                        if (($index = array_search($dataTour->id, $id_tourNew)) == false) {
                            array_push($id_tourNew, $dataTour->id);
                            $destinationNew->update([
                                'id_tour' => json_encode($id_tourNew),
                            ]);
                        }
                    }
                } else {
                    $id_tour = array();
                    array_push($id_tour, $dataTour->id);
                    $destinationData->update([
                        'id_tour' => json_encode($id_tour),
                    ]);
                }
                // dd($dataTour->plan->destinationPlan[$key]->id);
            } else {
                $destinationData = DestinationModel::find($destination);
                if ($destinationData->id_tour != null) {
                    $id_tour = json_decode($destinationData->id_tour);
                    if (($index = array_search($dataTour->id, $id_tour)) == false) {
                        array_push($id_tour, $dataTour->id);
                        $destinationData->update([
                            'id_tour' => json_encode($id_tour),
                        ]);
                    }
                } else {
                    $id_tour = array();
                    array_push($id_tour, $dataTour->id);
                    $destinationData->update([
                        'id_tour' => json_encode($id_tour),
                    ]);
                }
            }
        }

        if ($request->file('image1') == "") {

            $dataTour->update([
                'name' => $request->name,
                'price' => $request->price,
                'min_guest' => $request->min_guest,
                'desc' => $request->desc,
                'interest' => json_encode($finalInterest),
                'location' => json_encode($location),
                'feature' => json_encode($feature),
                'plan' => json_encode($plan),
                'start' => $destinationPlan[0]['destination'],
                'end' => $destinationPlan[sizeof($destinationPlan) - 1]['destination'],
                'time' => sizeof($request->destination) . 'D' . $night . 'N',
            ]);
        } else {

            //hapus old image
            @unlink($dataTour->main_image);

            //upload new image
            $imageName1 = time() . '.' . $request->image1->extension();
            $request->image1->move('images/tour/', $imageName1);

            $dataTour->update([
                'name' => $request->name,
                'price' => $request->price,
                'min_guest' => $request->min_guest,
                'desc' => $request->desc,
                'interest' => json_encode($finalInterest),
                'location' => json_encode($location),
                'feature' => json_encode($feature),
                'plan' => json_encode($plan),
                'start' => $destinationPlan[0]['destination'],
                'end' => $destinationPlan[sizeof($destinationPlan) - 1]['destination'],
                'time' => sizeof($request->destination) . 'D' . $night . 'N',
                'main_image' => 'images/tour/' . $imageName1,
            ]);
        }

        if ($request->file('image2') != "") {
            $image = ImagesModel::where('id_foreign', '=', $id)->Where('number', '=', '2')->Where('flag', '=', 'tour')->first();

            $imageName2 = time() . '.' . $request->image2->extension();
            $request->image2->move('images/tour/', $imageName2);

            if (file_exists($image->image)) {
                @unlink($image->image);
            } else {
                echo ($image->image);
            }

            $image->update([
                'image' => 'images/tour/' . $imageName2
            ]);
        }

        if ($request->file('image3') != "") {
            $image = ImagesModel::where('id_foreign', '=', $id)->Where('number', '=', '3')->Where('flag', '=', 'tour')->first();

            $imageName3 = time() . '.' . $request->image3->extension();
            $request->image3->move('images/tour/', $imageName3);

            if (file_exists($image->image)) {
                @unlink($image->image);
            } else {
                echo ($image->image);
            }

            $image->update([
                'image' => 'images/tour/' . $imageName3
            ]);
        }

        return redirect()->route('cms.tour.index')->with('success', 'Updating Tour Package Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TourModel::find($id);
        $dataImage = ImagesModel::where('id_foreign', '=', $id)->Where('flag', '=', 'tour')->get();
        $data->plan = json_decode($data->plan);
        $data->plan->destinationPlan = json_decode($data->plan->destinationPlan);
        foreach ($data->plan->destinationPlan as $destination) {
            // dd($destination->id);
            $destinationData = DestinationModel::find($destination->id);
            if ($destinationData->id_tour != null) {
                $id_tour = json_decode($destinationData->id_tour);
                if (($key = array_search($data->id, $id_tour)) !== false) {
                    unset($id_tour[$key]);
                    // dd(json_encode($id_tour));
                    $destinationData->update([
                        'id_tour' => json_encode($id_tour),
                    ]);
                }
            }
        }

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

        return redirect()->route('cms.tour.index')->with('success', 'Deleting Tour Package Success');
    }
}
