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
use Illuminate\Support\Facades\Session;

class ProductListController extends Controller
{
    public function productList(){
        $desktopPackages = DesktopPackage::all();
        $laptopPheriperals = LaptopnPheriperals::all();
        $PcComponents = PC_components::all();
    
        $data = session()->all();
        return view('products.productlist',[
            'desktopPackages' => $desktopPackages,
            'laptopPheriperals' => $laptopPheriperals,
            'PcComponents' => $PcComponents,
            
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
        $data = session()->all();

        
        return view('products.productview', [
            'productdetails' => $productarray,
            'category' => $category,
            'data' => $data
        ]);
    }


    public function productcheckout(Request $request,$category = "",$id = ""){
        $productarray = [];

        Session::put('cart', 'laptop-1');

        $value = Session::all();
  
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

        $data = session()->all();
        return view('buying.shippinginfo',[
            'id' => $id,
            'productdetails' => $productarray,
            'data' => $data
        ]);
    }


    public function confirmcheckout(Request $request){
        $name = $request->input('completename');
        $email = $request->input('emailaddress');
        $contactnum = $request->input('finalcontactnumber');
        $address = $request->input('finaladdress');
        $state = $request->input('finalstate');
        $category = $request->input('category');
        $id = $request->input('productid');
        $quantity = $request->input('quantity');
   
        if ($category == 'laptop' || $category == 'pheriperalsandaccessories')
        {
            $product = LaptopnPheriperals::find($id);

        }
        elseif($category == 'desktoppackages')
        {
            $product = DesktopPackage::find($id);
 
        }

  
            $key = 'sk_test_bKqBeUdFNkBfFV9xLKfBxN97:';
            $key = base64_encode($key);

            $data['data']['attributes']['amount'] = $product->price;
            $data['data']['attributes']['description'] = $product->description;
            $response = Curl::to('https://api.paymongo.com/v1/links')
                        ->withHeader('Content-Type: application/json')
                        ->withHeader('accept: application/json')
                        ->withHeader('Authorization: Basic '. $key .'')
                        ->withData($data)
                        ->asJson()
                        ->post();

            return redirect($response->data->attributes->checkout_url);
    
 

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


public function addtocart(Request $request){
    $id = $request->input('productid');
    $category = $request->input('cartitemcategory');

    if ($category == 'laptop' || $category == 'pheriperalsandaccessories')
    {
        $product = LaptopnPheriperals::find($id);

    }
    elseif($category == 'desktoppackages')
    {
        $product = DesktopPackage::find($id);

    }

    
// Initialize the session array if it doesn't exist
if(!session()->has('options')) {
    session()->put('options', []);
}

// Add new data to the existing session array
$newData = [    'id' => $id,    'product' => $category,];
session()->push('options', $newData);

// $request->session()->flush();
    $data = session()->all();
    


    return response()->json([
        'data' => $data
    ]);
}


public function viewcart(Request $request){

//     @if(session('options'))
//     @foreach(session('options') as $key => $value)
//         @if(is_array($value))
//             <p>id: {{$value['id']}}</p>
//             <p>product: {{$value['product']}}</p>
//         @else
//             <p>{{$key}}: {{$value}}</p>
//         @endif
//     @endforeach
// @endif
$productarray = [];

$options = collect(session('options'));

$products = $options->map(function ($value, $key) {
    if ($value['product'] == 'laptop' || $value['product'] == 'pheriperalsandaccessories') {
        $product = LaptopnPheriperals::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('laptops')->getUrl(),
        ];
    } elseif ($value['product'] == 'desktoppackages') {
        $product = DesktopPackage::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('desktop')->getUrl(),
        ];
    } elseif ($value['product'] == 'pccomponents') {
        $product = PC_components::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('PC_Components')->getUrl(),
        ];
    }
    
    return $productarray;
});

// Output the transformed collection
dd($products);


return view('products.itemviewsummary',[

]);

}

}
