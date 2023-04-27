<?php

namespace App\Http\Controllers;

use App\Models\DesktopPackage;
use App\Models\LaptopnPheriperals;
use App\Models\PC_components;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function productList(){
        $desktopPackages = DesktopPackage::all();
        $laptopPheriperals = LaptopnPheriperals::all();
        $PcComponents = PC_components::all();
    

        return view('products.productlist',[
            'desktopPackages' => $desktopPackages,
            'laptopPheriperals' => $laptopPheriperals,
            'PcComponents' => $PcComponents
        ]);
    }
}
