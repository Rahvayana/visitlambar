<?php

namespace App\Http\Controllers;

use App\Models\CustomersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'agreement' => 'required'
        ]);

        $name = explode(" ", $request->full_name);


        if (sizeof($name) >= 2) {
            // dd('+2', $name);
            CustomersModel::create([
                'first_name' => $name[0],
                'last_name' => $name[1],
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        } else {
            // dd('-2', $name);
            CustomersModel::create([
                'first_name' => $name[0],
                'last_name' => '',
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }

        $customer = CustomersModel::latest()->first();
        return redirect()->route("frn.customer.dashboard", $customer->id);
        // return view('frontend.layout.profile.myprofile', compact($customer));
    }

    public function dashboard($id)
    {
        $customer = CustomersModel::find($id);
        // dd($customer);
        return view('frontend.layout.profile.myprofile', compact('customer'));
    }
}
