<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SettingsModel;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //show
    public function contactShow()
    {
        $dataContact = SettingsModel::where('name', '=', 'contact_us')->first();
        // dd($dataContact);
        $data = json_decode($dataContact->value);
        // dd($data[0]->information);
        return view('cms.setting.contactUs', compact('data'));
    }

    public function contactUpdate(Request $request)
    {
        $request->validate([
            'information' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'fax' => 'required',
        ]);

        // dd($request->information, $request->address, $request->email, $request->phone, $request->fax);
        $dataContact = SettingsModel::where('name', '=', 'contact_us')->first();

        $value = array(
            "information" => $request->information,
            "address" => $request->address,
            "email" => $request->email,
            "phone" => $request->phone,
            "fax" => $request->fax,
        );

        $dataContact->update([
            "value" => json_encode($value)
        ]);

        return redirect()->route('cms.setting.contact')->with('success', 'Update Contact Success');
    }

    public function aboutShow()
    {
        $dataAbout = SettingsModel::where('name', '=', 'about_us')->first();
        $about = json_decode($dataAbout->value);
        // dd($about);

        $dataFeature = SettingsModel::where('name', '=', 'feature')->first();
        $feature = json_decode($dataFeature->value);
        $feature->feature = json_decode($feature->feature);
        // dd($feature);

        return view('cms.setting.aboutUs', compact('about', 'feature'));
    }

    public function AboutFeatureUpdate(Request $request)
    {
        $request->validate([
            'flag' => 'required'
        ]);

        if ($request->flag == 'about') {
            $dataAbout = SettingsModel::where('name', '=', 'about_us')->first();

            $value = array(
                "subtitle" => $request->aboutSubtitle,
                "about" => $request->about,
            );

            $dataAbout->update([
                "value" => json_encode($value)
            ]);
        } elseif ($request->flag == 'feature') {
            $dataFeature = SettingsModel::where('name', '=', 'feature')->first();

            foreach ($request->icon as $key => $icon) {
                $feature[] = array(
                    "icon" => $icon,
                    "title" => $request->featureTitle[$key],
                    "subtitle" => $request->featureExplain[$key]
                );
            }

            $value = array(
                'subtitle' => $request->subtitle,
                'feature' => json_encode($feature)
            );

            $dataFeature->update([
                "value" => json_encode($value)
            ]);
        }

        return redirect()->route('cms.setting.about')->with('success', 'Update Success');
    }

    public function partner()
    {
        $dataPartner = SettingsModel::where('name', '=', 'partner')->first();

        $partners = json_decode($dataPartner->value);
        // dd($partners);
        return view('cms.setting.partner', compact('partners'));
    }

    public function partnerDestroy($id)
    {
        $dataPartner = SettingsModel::where('name', '=', 'partner')->first();

        $partners = json_decode($dataPartner->value);

        if (file_exists($partners[$id]->logo)) {
            @unlink($partners[$id]->logo);
        } else {
            dd($partners[$id]->image);
        }

        unset($partners[$id]);

        // dd($partners);
        $dataPartner->update([
            'value' => $partners
        ]);

        return redirect()->route('cms.setting.partner')->with('success', 'Deleting Partner Success');
    }

    public function partnerStore(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'logo' => 'required'
        ]);

        $dataPartner = SettingsModel::where('name', '=', 'partner')->first();

        $partners = json_decode($dataPartner->value);

        $finalPartner = array();
        foreach ($partners as $value) {
            $finalPartner[] = ([
                'name' => $value->name,
                'logo' => $value->logo,
            ]);
        }

        $logoName = rand() . '.' . $req->logo->extension();
        $req->logo->move('images/partner/', $logoName);
        $finalPartner[] = ([
            'name' => $req->name,
            'logo' => 'images/partner/' . $logoName,
        ]);

        // dd($finalPartner);

        $dataPartner->update([
            'value' => json_encode($finalPartner)
        ]);

        return redirect()->route('cms.setting.partner')->with('success', 'Adding new Partner Success');
    }
}
