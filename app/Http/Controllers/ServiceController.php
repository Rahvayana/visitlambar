<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;

class ServiceController extends Controller
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
        $services = ServiceModel::latest()->simplePaginate(5);
        return view('cms.setting.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.setting.service.add');
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
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
            'icon' => 'required',
        ]);

        $imageName = rand() . '.' . $request->image->extension();
        $request->image->move('images/service/', $imageName);

        $store = ServiceModel::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => 'images/service/' . $imageName,
            'icon' => $request->icon,
        ]);

        if ($store) {
            return redirect()->route('cms.setting.service')->with('success', 'Adding New Service Success');
        } else {
            return redirect()->route('cms.setting.service')->with('failed', 'Adding New Service Failed');
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
        $service = ServiceModel::find($id);

        return view('cms.setting.service.edit', compact('service'));
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
            'title' => 'required',
            'subtitle' => 'required',
            'icon' => 'required',
        ]);

        $data = ServiceModel::find($id);

        if ($request->file('image') == "") {

            $store = $data->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'icon' => $request->icon,
            ]);
        } else {

            //hapus old image
            @unlink($data->image);

            //upload new image
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move('images/service/', $imageName);


            $store = $data->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'image' => 'images/service/' . $imageName,
                'icon' => $request->icon,
            ]);
        }

        if ($store) {
            return redirect()->route('cms.setting.service')->with('success', 'Updating Service Success');
        } else {
            return redirect()->route('cms.setting.service')->with('failed', 'Updating Service Failed');
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
        $data = ServiceModel::find($id);
        // dd($data);
        if (file_exists($data->image)) {
            @unlink($data->image);
        } else {
            $data->delete();
        }

        $data->delete();

        return redirect()->route('cms.setting.service')->with('success', 'Deleting Service Success');
    }
}
