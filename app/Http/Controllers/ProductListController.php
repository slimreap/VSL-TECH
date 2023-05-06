<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\PC_components;
use Ixudra\Curl\Facades\Curl;
use App\Models\DesktopPackage;
use App\Models\CustomerDetails;
use App\Models\LaptopnPheriperals;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        ($brandname) ? $laptops = LaptopnPheriperals::where('name',$brandname)->get() : $laptops = LaptopnPheriperals::all();
        
        foreach ($laptops as $laptop) {

            $laptoparray[] = [
                'id' => $laptop->id,
                'brand_name' => $laptop->name,
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

    //function for desktop packages
    public function desktopPackagesList($setname =""){
        $desktopPackageArray = [];

        ($setname) ? $desktopPackages = DesktopPackage::where('name', $setname)->get():$desktopPackages = DesktopPackage::all();
    foreach($desktopPackages as $desktopPackage){
            $desktopPackageArray[]=[
                'id' => $desktopPackage->id,
                'img_url' => $desktopPackage->getFirstMedia('desktop')->getUrl(),
                'set_name'=>$desktopPackage->name,
                'price'=>$desktopPackage->price,
                'created_at'=>$desktopPackage->created_at,
                'updated_at'=>$desktopPackage->updated_at,
            ];
        } 
        return view('products.desktoppackages',[
            'desktoppackages'=>$desktopPackageArray,
        ]);
    }


    public function laptopcustomerform($category = "", $id  = ""){
        $productarray = [];


        if ($category == 'laptop' || $category == 'pheriperalsandaccessories')
        {
            $product = LaptopnPheriperals::find($id);
            $productarray = [
                'brand_name' => $product->name,
                'description' =>$product->description,
                'price' =>$product->price,
                'img_url' =>$product->getFirstMedia('laptops')->getUrl(),
                'id' =>$product->id,
            ];
        }
        elseif($category == 'desktoppackages')
        {
            $product = DesktopPackage::find($id);
            $productarray = [
                'brand_name' => $product->name,
                'description' =>$product->description,
                'price' =>$product->price,
                'img_url' =>$product->getFirstMedia('desktop')->getUrl(),
                'id' =>$product->id,
            ];
        }

        
        // dd($laptop);


        
        return view('products.productview', [
            'productdetails' => $productarray,
            'category' => $category
        ]);
    }


    public function productcheckout($category = "",$id = ""){
        $productarray = [];


        if ($category == 'laptop' || $category == 'pheriperalsandaccessories')
        {
            $product = LaptopnPheriperals::find($id);
            $productarray = [
                'brand_name' => $product->name,
                'description' =>$product->description,
                'price' =>$product->price,
                'img_url' =>$product->getFirstMedia('laptops')->getUrl(),
                'id' =>$product->id,
            ];
        }
        elseif($category == 'desktoppackages')
        {
            $product = DesktopPackage::find($id);
            $productarray = [
                'brand_name' => $product->name,
                'description' =>$product->description,
                'price' =>$product->price,
                'img_url' =>$product->getFirstMedia('desktop')->getUrl(),
                'id' =>$product->id,
            ];
        }

            // dd($laptoparray);
        return view('buying.shippinginfo',[
            'id' => $id,
            'productdetails' => $productarray
        ]);
    }


    public function confirmcheckout(Request $request){
        // $customername = $request->input('completename');
        // $emailaddress = $request->input('emailaddress');
        // $finalcontactnumber = $request->input('finalcontactnumber');
        // $finaladdress = $request->input('finaladdress');
        // $finalstate = $request->input('finalstate');
        // $productid = $request->input('productid');

        $laptop = LaptopnPheriperals::find(1);

  
            $key = 'sk_test_bKqBeUdFNkBfFV9xLKfBxN97:';
            $key = base64_encode($key);

            $data['data']['attributes']['amount'] = $laptop->price;
            $data['data']['attributes']['description'] = $laptop->description;
            $response = Curl::to('https://api.paymongo.com/v1/links')
                        ->withHeader('Content-Type: application/json')
                        ->withHeader('accept: application/json')
                        ->withHeader('Authorization: Basic '. $key .'')
                        ->withData($data)
                        ->asJson()
                        ->post();

            return redirect($response->data->attributes->checkout_url);
        // DB::transaction(function () use ($customername, $emailaddress, $finalcontactnumber, $finaladdress, $finalstate, $productid) {
        //     $laptop = LaptopnPheriperals::find($productid);
        //     $customerdetails = CustomerDetails::create([
        //         'name' => $customername,
        //         'email' => $emailaddress,
        //         'contact_number' => $finalcontactnumber,
        //         'address' => $finaladdress . ' ' . $finalstate,
        //     ]);
        //     $laptop->transaction()->create(['user_id' => $customerdetails->id]);
        // });


        

    }


    public function searchlaptop(Request $request){
        $laptoparray = [];
        $laptop = $request->input('query');

        $laptoparray = LaptopnPheriperals::where('prod_name', 'like', "%$laptop%")->get();

        foreach ($laptoparray as $laptop) {
            $laptop->img_url = $laptop->getFirstMedia('laptops')->getUrl();
          }
        // return view('search-results', compact('posts'));
        // dd($laptop);
        return response()->json([
            'success' => true,
            'data' => $laptoparray,
            // 'laptopimgurl' => $laptopimgurl
        ]);
    }


    public function listdesktoppackages(){
        $pcarray = [];
        $pc = DesktopPackage::all();

        $pcarray = $pc;

        foreach ($pcarray as $pc)
        {
            $pc->img_url = $pc->getFirstMedia('desktop')->getUrl();
        }

        return view('products.desktoppackages',[
            'listdesktoppackages' => $pcarray
        ]);
    }



}
