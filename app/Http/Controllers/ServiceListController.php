<?php

namespace App\Http\Controllers;

use services;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CustomerDetails;

class ServiceListController extends Controller
{

    public function availableservice()
    {
        $services = Service::all();
        $servicearray = [];

        foreach($services as $service){
            $servicearray[]=[
                'id' => $service->id,
                'service_name'=>$service->service_name,
                'service_description'=>$service->service_description,
                'price'=>$service->price,
                'create_at'=>$service->create_at,
                'updated_at'=>$service->updated_at,
                'img_url' => $service->getFirstMedia('services')->getUrl(),
            ];
        }

        return view('services.services',[
            'data' => $servicearray
        ]);


    }

    public function serviceList($servicename = ""){
        $servicearray = [];

        ($servicename) ? $service = Service::where('name', $servicename)->get():$services = Service::all();

        foreach($services as $service){
            $servicearray[]=[
                'id' => $service->id,
                'service_name'=>$service->service_name,
                'service_description'=>$service->service_description,
                'price'=>$service->price,
                'create_at'=>$service->create_at,
                'updated_at'=>$service->updated_at,
                'img_url' => $service->getFirstMedia('services')->getUrl(),
            ];
        }
    }


    public function checkoutservice($servicename = "") {



        return view('services.availserviceform',[

        ]);
    }


    public function confirmservice(Request $request) {
        $name = $request->input('firstname') . " " . $request->input('middleinitial') . " " . $request->input('lastname') ;
        $email = $request->input('email');
        $contact_number = $request->input('contactnumber');
        $address = $request->input('address');
        $servicerequesttype = $request->input('servicerequesttype');
        $city = $request->input('city');
        $postalcode = $request->input('postalcode');

        $customerdetails = CustomerDetails::create([
            'name' => $name,
            'email' => $email,
            'contact_number' => $contact_number,
            'address' => $address,
            'city' => $city,
            'postalcode' => $postalcode,
            'servicerequesttype' => $servicerequesttype
        ]);

        $customerdetails->customertransaction;

        return redirect()->back()->with('success', 'We have already recieved your request, we will contact you as we process the request');


    }
}
