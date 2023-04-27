<?php

namespace App\Http\Controllers;

use App\Models\PC_components;
use Illuminate\Http\Request;

class Pc_componentsController extends Controller
{
    public function listpccomponents(){
        // $componentarray = [
        //     'component' => [],
        //     'brand_name' => [],
        //     'product_model' => [],
        //     'description' => [],
        //     'price' => [],
        // ];
        
        $pccomponents = PC_components::all();
        // foreach($pccomponents as $components){
        //     collect($componentarray['component'])->push($components->component);

        // }

        return view( 'products.pccomponents',[
            'pccomponents' => $pccomponents
        ]);
    }
}
