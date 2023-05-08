<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceListController extends Controller
{

    public function availableservices(){
        $servicearray=[];
       $data = Service::all();

       foreach($data as $service){
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
        
        ($servicename) ? $services = Service::where('id', $servicename)->get():$services = Service::all();

       
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
        return view('services.viewservice', [
            'services'=>$servicearray,
        ]);
    }

    public function serviceCustomerForm($id =""){
        $servicearray = [];

        $service=Service::find($id);
        $servicearray=[
            'id' => $service->id,
            'service_name'=>$service->service_name,
            'service_description'=>$service->service_description,
            'price'=>$service->price,
            'create_at'=>$service->create_at,
            'updated_at'=>$service->updated_at,
            'img_url' => $service->getFirstMedia('services')->getUrl(),
        ];
    return view('services.availserviceform', [
        'serviceview'=>$servicearray,
    ]);
}
}