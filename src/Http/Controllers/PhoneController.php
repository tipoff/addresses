<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tipoff\Addresses\Models\CountryCallingcode;
use Tipoff\Addresses\Models\Phone;

class PhoneController extends Controller
{
    public function getPhone()
    {
        return view('addresses.get-phone-js');
    }

    public function store(Request $request)
    {
        $country_callingcode_id = CountryCallingcode::firstOrFail()->where('root', $request->country_code)->id;

        Phone::create([
            'full_number' => $request->phone_number,
            'country_callingcode_id' => $country_callingcode_id,
        ]);
    }
}
