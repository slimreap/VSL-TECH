<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PC_components;
use App\Models\DesktopPackage;
use App\Models\CustomerDetails;
use App\Models\LaptopnPheriperals;
use Illuminate\Support\Facades\DB;

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

    // public function individualPcComponent($component = ""){
    //     $currentcomponent = $component;
    //     $component = PC_components::where('component',$component)->get();

    //     return view('products.individualpccomponents',[
    //         'components' => $component,
    //         'currentcomponent' => $currentcomponent
    //     ]);
    // }


    public function laptopList($brandname = "") {
        
        $laptoparray = [];

        ($brandname) ? $laptops = LaptopnPheriperals::where('brand_name',$brandname)->get() : $laptops = LaptopnPheriperals::all();
        
        foreach ($laptops as $laptop) {

            $laptoparray[] = [
                'id' => $laptop->id,
                'brand_name' => $laptop->brand_name,
                'prod_name' => $laptop->prod_name,
                'description' => $laptop->description,
                'price' => $laptop->price,
                'img_url' => $laptop->getFirstMedia('laptops')->getUrl(),
            ];
        }
        
       
        // dd($laptoparray);
        return view('products.laptops',[
            'laptops' => $laptoparray,

        ]);
    }


    public function laptopcustomerform($id  = ""){
        $laptoparray = [];
        $laptop = LaptopnPheriperals::find($id);
        // dd($laptop);

            $laptoparray = [
                'brand_name' => $laptop->brand_name,
                'description' =>$laptop->description,
                'price' =>$laptop->price,
                'img_url' =>$laptop->getFirstMedia('laptops')->getUrl(),
                'id' =>$laptop->id,
            ];
        
        return view('products.productview', [
            'laptopdetails' => $laptoparray
        ]);
    }


    public function productcheckout($id = ""){
        $laptoparray = [];
        $laptop = LaptopnPheriperals::find($id);
        // dd($laptop);

            $laptoparray = [
                'brand_name' => $laptop->brand_name,
                'description' =>$laptop->description,
                'price' =>$laptop->price,
                'img_url' =>$laptop->getFirstMedia('laptops')->getUrl(),
                'id' =>$laptop->id,
            ];

            // dd($laptoparray);
        return view('buying.shippinginfo',[
            'id' => $id,
            'laptopdetails' => $laptoparray
        ]);
    }


    public function confirmcheckout(Request $request){
        $customername = $request->input('completename');
        $emailaddress = $request->input('emailaddress');
        $finalcontactnumber = $request->input('finalcontactnumber');
        $finaladdress = $request->input('finaladdress');
        $finalstate = $request->input('finalstate');
        $productid = $request->input('productid');

        DB::transaction(function () use ($customername, $emailaddress, $finalcontactnumber, $finaladdress, $finalstate, $productid) {
            $laptop = LaptopnPheriperals::find($productid);
            $customerdetails = CustomerDetails::create([
                'name' => $customername,
                'email' => $emailaddress,
                'contact_number' => $finalcontactnumber,
                'address' => $finaladdress . ' ' . $finalstate,
            ]);
            $laptop->transaction()->create(['user_id' => $customerdetails->id]);
        });
        

    }


    public function searchlaptop(Request $request){
        $laptop = $request->input('query');

        $laptop = LaptopnPheriperals::where('prod_name', 'like', "%$laptop%")->get();
        // return view('search-results', compact('posts'));
        // dd($laptop);
        return response()->json([
            'success' => true,
            'data' => $laptop
        ]);
    }

    
}
