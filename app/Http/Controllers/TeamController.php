<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeamModel;

class TeamController extends Controller
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
        $members = TeamModel::latest()->simplePaginate(5);
        // dd($members);
        return view('cms.setting.team.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.setting.team.add');
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);

        $imageName = rand() . '.' . $request->image->extension();
        $request->image->move('images/member/', $imageName);

        if ($request->facebook != null) {
            $facebook = $request->facebook;
        } else {
            $facebook = '';
        }
        if ($request->twitter != null) {
            $twitter = $request->twitter;
        } else {
            $twitter = '';
        }
        if ($request->instagram != null) {
            $instagram = $request->instagram;
        } else {
            $instagram = '';
        }

        $media = array(
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram
        );

        $store = TeamModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'media' => json_encode($media),
            'address' => $request->address,
            'image' => 'images/member/' . $imageName,
        ]);

        if ($store) {
            return redirect()->route('cms.setting.team')->with('success', 'Adding New Member Success');
        } else {
            return redirect()->route('cms.setting.team')->with('failed', 'Adding New Member Failed');
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
        $member = TeamModel::find($id);
        $member->media = json_decode($member->media);
        // dd($members);
        return view('cms.setting.team.edit', compact('member'));
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'address' => 'required',
        ]);

        if ($request->facebook != null) {
            $facebook = $request->facebook;
        } else {
            $facebook = '';
        }
        if ($request->twitter != null) {
            $twitter = $request->twitter;
        } else {
            $twitter = '';
        }
        if ($request->instagram != null) {
            $instagram = $request->instagram;
        } else {
            $instagram = '';
        }

        $media = array(
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram
        );

        // dd($request, $id);
        $data = TeamModel::find($id);

        if ($request->file('image') == "") {

            $store = $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'media' => json_encode($media),
                'address' => $request->address,
            ]);
        } else {

            //hapus old image
            @unlink($data->image);

            //upload new image
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move('images/member/', $imageName);


            $store = $data->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'role' => $request->role,
                'media' => json_encode($media),
                'address' => $request->address,
                'image' => 'images/member/' . $imageName,
            ]);
        }

        if ($store) {
            return redirect()->route('cms.setting.team')->with('success', 'Updating Member Success');
        } else {
            return redirect()->route('cms.setting.team')->with('failed', 'Updating Member Failed');
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
        $data = TeamModel::find($id);
        // dd($data);
        if (file_exists($data->image)) {
            @unlink($data->image);
        } else {
            $data->delete();
        }

        $data->delete();

        return redirect()->route('cms.setting.team')->with('success', 'Deleting Member Success');
    }
}
