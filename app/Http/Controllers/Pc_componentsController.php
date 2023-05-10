<?php

namespace App\Http\Controllers;

use App\Models\PC_components;
use Illuminate\Http\Request;

class Pc_componentsController extends Controller
{
    public function listpccomponents($component = ""){
        $componentarray = [];

        ($component) ? $pccomponents = PC_components::where('component',$component)->get() : $pccomponents = PC_components::all();
         
        foreach($pccomponents as $components){
            //collect($componentarray['component'])->push($components->component);
            $componentarray[]  = [
                'component' => $components->component,
                'brand_name' => $components->brand_name,
                'product_model' => $components->product_model,
                'description' => $components->description,
                'price' => $components->price,
                'img_url' => $components->getFirstMedia('PC_Components')->getUrl(),
            ];
        }
        return view( 'products.pccomponents',[
            'pccomponents' => $componentarray
        ]);
    }
}
