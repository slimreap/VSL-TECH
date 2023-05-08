<?php

namespace App\Http\Controllers;

use services;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceListController extends Controller
{
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
}
