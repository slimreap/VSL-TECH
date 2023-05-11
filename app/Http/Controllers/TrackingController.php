<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CustomerDetails;
use App\Models\CustomerTransaction;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function trackproduct(Request $request) {
        $trackingnum = $request->input('tracknumber');
        $email = $request->input('emailaddress');


        if (CustomerDetails::where('email',$email)->exists())
        {
            $customer = CustomerTransaction::where('tracking_number',$trackingnum)->get();

                return view('products.tracking_item_details',[
                    'trackingproduct' => $customer

                ]);
            
        }
    }
}
