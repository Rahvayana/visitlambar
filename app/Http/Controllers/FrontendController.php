<?php

namespace App\Http\Controllers;

use App\Models\AvailableModel;
use App\Models\ServiceModel;
use Illuminate\Http\Request;
use App\Models\SettingsModel;
use App\Models\TeamModel;
use App\Models\DestinationModel;
use App\Models\TourModel;
use App\Models\ImagesModel;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class FrontendController extends Controller
{
    public function home()
    {
        $topDestination = DestinationModel::limit(5)->get();
        $topTour = TourModel::limit(6)->get();

        return view('frontend.layout.home', compact('topDestination', 'topTour'));
    }

    public function destination()
    {
        $destinations = DestinationModel::latest()->simplePaginate(15);
        // dd($destinations);
        return view('frontend.layout.destination', compact('destinations'));
    }

    public function tourpack()
    {
        $tours = TourModel::latest()->simplePaginate(9);
        return view('frontend.layout.tourpack', compact('tours'));
    }

    public function news()
    {
        return view('frontend.layout.news');
    }

    public function contact()
    {
        $dataContact = SettingsModel::where('name', '=', 'contact_us')->first();

        $data = json_decode($dataContact->value);

        return view('frontend.layout.contact', compact('data'));
    }

    public function tourdetail($id)
    {
        $dataTour = TourModel::find($id);

        $dataTour->interest = json_decode($dataTour->interest);
        $dataTour->plan = json_decode($dataTour->plan);
        $dataTour->plan->destinationPlan = json_decode($dataTour->plan->destinationPlan);
        $dataTour->feature = json_decode($dataTour->feature);
        $dataTour->feature->include = json_decode($dataTour->feature->include);
        $dataTour->feature->notInclude = json_decode($dataTour->feature->notInclude);

        foreach ($dataTour->plan->destinationPlan as $plan) {
            $loc = DestinationModel::find($plan->id);
            $locations[] = json_decode($loc->location);
        }

        //change price format
        if ($dataTour->price > 1000000000000) {
            $dataTour->price = round(($dataTour->price / 1000000000000), 1) . ' T';
        } else if ($dataTour->price > 1000000000) {
            $dataTour->price = round(($dataTour->price / 1000000000), 1) . ' B';
        } else if ($dataTour->price > 1000000) {
            $dataTour->price = round(($dataTour->price / 1000000), 1) . ' M';
        } else if ($dataTour->price > 1000) {
            $dataTour->price = round(($dataTour->price / 1000), 1) . ' K';
        }

        // dd($dataTour->price);

        $date = Carbon::now();
        $availabilities = AvailableModel::whereMonth('date_start', $date->format('m'))->where('id_tour', '=', $id)->orderBy('date_start', 'desc')->get();
        // dd($availabilites);

        $similarTour = TourModel::where('plan', 'like', '%' . $dataTour->plan->destinationPlan[0]->destination . '%')->get();

        foreach ($dataTour->plan->destinationPlan as $plan) {
            $images = ImagesModel::where('id_foreign', '=', $plan->id)->where('flag', '=', 'destination')->get();
            foreach ($images as $image) {
                if ($image != null) {
                    $dataImage[] = $image->image;
                }
            }
        }

        $images = ImagesModel::where('id_foreign', '=', $dataTour->id)->where('flag', '=', 'tour')->get()->take(2);
        foreach ($images as $image) {
            $dataImage[] = $image->image;
        }

        return view('frontend.layout.tourdetail', compact('dataImage', 'dataTour', 'availabilities', 'similarTour', 'locations'));
    }

    public function dateMonth(Request $request)
    {
        $availabilities = AvailableModel::whereMonth('date_start', date("m", strtotime($request->date)))->where('id_tour', '=', $request->id)->orderBy('date_start', 'desc')->get();
        // echo date("Y-m-d", strtotime($request->date));
        // dd($availabilities);
        // return date("m", strtotime($request->date));
        return response()->json(['data' => $availabilities]);
    }

    public function about()
    {
        $dataAbout = SettingsModel::where('name', '=', 'about_us')->first();
        $about = json_decode($dataAbout->value);
        // dd($about);

        $dataFeature = SettingsModel::where('name', '=', 'feature')->first();
        $feature = json_decode($dataFeature->value);
        $feature->feature = json_decode($feature->feature);

        $teamMember = TeamModel::get();

        if ($teamMember->count() < 4) {
            $teamMember = null;
        }

        $dataPartner = SettingsModel::where('name', '=', 'partner')->first();
        $partners = json_decode($dataPartner->value);
        // $feature->feature = json_decode($feature->feature);
        // dd($partners);
        return view('frontend.layout.about', compact('about', 'feature', 'teamMember', 'partners'));
    }

    public function service()
    {
        $services = ServiceModel::get();

        $dataFeature = SettingsModel::where('name', '=', 'feature')->first();
        $features = json_decode($dataFeature->value);
        $features->feature = json_decode($features->feature);

        $dataPartner = SettingsModel::where('name', '=', 'partner')->first();
        $partners = json_decode($dataPartner->value);

        return view('frontend.layout.service', compact('services', 'features', 'partners'));
    }
}
