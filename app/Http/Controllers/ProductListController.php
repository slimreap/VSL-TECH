<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Reciept;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PC_components;
use Ixudra\Curl\Facades\Curl;
use App\Models\DesktopPackage;
use App\Models\CustomerDetails;
use App\Models\LaptopnPheriperals;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerTransaction;
use Illuminate\Support\Facades\Hash;
use App\Notifications\SendTrackingNo;
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
                'product_model' => $laptop->product_model,
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
                'product_model'=>$desktopPackage->product_model,
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


    // CHECKOUT FOR SINGLE PRODUCT

    public function confirmcheckout(Request $request){
        $name = $request->input('completename');
        $email = $request->input('emailaddress');
        $contactnum = $request->input('finalcontactnumber');
        $address = $request->input('finaladdress');
        $state = $request->input('finalstate');
        $category = $request->input('category');
        $id = $request->input('productid');
        $quantity = $request->input('quantity');
        $postal = $request->input('finalpostal');
        $city = $request->input('finalcity');
        $shippingfee = 50;

        if ($category == 'laptop' || $category == 'pheriperalsandaccessories')
        {
            $product = LaptopnPheriperals::find($id);

        }
        elseif($category == 'desktoppackages')
        {
            $product = DesktopPackage::find($id);
 
        }

        // check if customer has record
       if (CustomerDetails::where('email', $email)->exists()) 
       {
            $customer = CustomerDetails::where('email',$email)->first();
       }
       else
       {
            $customer = CustomerDetails::create([
                'name' =>  $name,
                'email' => $email,
                'contact_number' => $contactnum,
                'address' =>  $address,
                'state' => $state,
                'city' => $city,
                'postal_code' => $postal
            ]);
       }

       $totalamount = intval($product->price) + intval($shippingfee);

  
            $key = 'sk_test_646DMYvwqigghxvnzfJpJXVh:';
            $key = base64_encode($key);

            $data['data']['attributes']['amount'] = $totalamount * 100;
            $data['data']['attributes']['description'] = $product->name;
            $response = Curl::to('https://api.paymongo.com/v1/links')
                        ->withHeader('Content-Type: application/json')
                        ->withHeader('accept: application/json')
                        ->withHeader('Authorization: Basic '. $key .'')
                        ->withData($data)
                        ->asJson()
                        ->post();

            
        // generate tracking number
        $trackingNumber = Str::random(10); // Generate a random string of length 10

        // Ensure the generated tracking number is unique
        while (CustomerTransaction::where('tracking_number', $trackingNumber)->exists()) {
            $trackingNumber = Str::random(10);
        }

        $customer->notify(new SendTrackingNo($trackingNumber));
        $product->transaction()->create([
            'quantity' => $quantity,
            'user_id' => $customer->id,
            'total_amount' => $totalamount,
            'tracking_number' => $trackingNumber,
            'payment_link' => $response->data->id
        ]);


            return redirect($response->data->attributes->checkout_url);
            // return response()->json(['success' => 'yyeah']);
 

    }


    public function search(Request $request){
        $productarray = [];
        $product = $request->input('search');
        // dd($product);
        if(LaptopnPheriperals::where('product_model', 'like', "%$product%")->orWhere('name', 'like', "%$product%")->exists()){
            $productCollection = LaptopnPheriperals::where('product_model', 'like', "%$product%")->get();
   
            foreach ($productCollection as $product) {
                $productarray[] = [
                    'name' => $product->name,
                    'product_model' => $product->product_model,
                    'price' => $product->price,
                    'img_url' => $product->getFirstMedia('laptops')->getUrl()
                ];
            }
            
        }
        if(DesktopPackage::where('product_model', 'like', "%$product%")->orWhere('name', 'like', "%$product%")->exists()){
            $productCollection = DesktopPackage::where('product_model', 'like', "%$product%")->get();

             foreach ($productCollection as $product) {
                $productarray[] = [
                    'name' => $product->name,
                    'product_model' => $product->product_model,
                    'price' => $product->price,
                    'img_url' => $product->getFirstMedia('desktop')->getUrl()
                ];
            }
        }
        if(PC_components::where('product_model', 'like', "%$product%")->orWhere('name', 'like', "%$product%")->exists()){
            $productCollection = PC_components::where('product_model', 'like', "%$product%")->get();
            foreach ($productCollection as $product) {
                $productarray[] = [
                    'name' => $product->name,
                    'product_model' => $product->product_model,
                    'price' => $product->price,
                    'img_url' => $product->getFirstMedia('PC_Components')->getUrl()
                ];
            }
        }

        return response()->json([
            'success' => true,
            'data' => $productarray,
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


    // ADD TO CART FUNCTION
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
$newData = [    'id' => $id,    'product' => $category, 'price' => $product->price, 'name' => $product->name];
session()->push('options', $newData);

// $request->session()->flush();
    $data = session()->all();
    


    return response()->json([
        'data' => $data
    ]);
}


// DISPLAYING CART FUNCTION
public function viewcart(Request $request){

$productarray = [];

$options = collect(session('options'));

$products = $options->map(function ($value, $key) {
    if ($value['product'] == 'laptop' || $value['product'] == 'pheriperalsandaccessories') {
        $product = LaptopnPheriperals::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'price' => $product->price,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('laptops')->getUrl(),
        ];
    } elseif ($value['product'] == 'desktoppackages') {
        $product = DesktopPackage::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'price' => $product->price,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('desktop')->getUrl(),
        ];
    } elseif ($value['product'] == 'pccomponents') {
        $product = PC_components::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'price' => $product->price,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('PC_Components')->getUrl(),
        ];
    }
    
    return $productarray;
});


return view('products.itemviewsummary',[
    'products' => $products
]);

}



// MULTIPLE PRODUCTS CHECKOUT FUNCTION
protected $laptop_quantity;
protected $desktop_quantity;
protected $component_quantity;
protected $totalamount;

protected $product_name;
protected $response;
protected $trackingNumber;
protected $customer;
public function bulkcheckout(Request $request) {
        $name = $request->input('firstname') . " " . $request->input('middleinitial') . " " . $request->input('lastname') ;
        $email = $request->input('email');
        $contact_number = $request->input('contactnumber');
        $address = $request->input('address');
        $state = $request->input('state');
        $city = $request->input('city');
        $postalcode = $request->input('postalcode');




        $this->laptop_quantity = 0;
        $this->desktop_quantity = 0;
        $this->component_quantity = 0;
        $this->totalamount = 0;
        $this->product_name = '';
        $this->response;

       
        // generate tracking number
        $this->trackingNumber = Str::random(10); // Generate a random string of length 10

        // Ensure the generated tracking number is unique
        while (CustomerTransaction::where('tracking_number', $this->trackingNumber)->exists()) {
            $trackingNumber = Str::random(10);
        };


           // check if customer has record
           if (CustomerDetails::where('email', $email)->exists()) 
           {
                $this->customer = CustomerDetails::where('email',$email)->first();
           }
           else
           {
            $this->customer = CustomerDetails::create([
                    'name' =>  $name,
                    'email' => $email,
                    'contact_number' => $contact_number,
                    'address' =>  $address,
                    'state' => $state,
                    'city' => $city,
                    'postal_code' => $postalcode
                ]);
           }


$options = collect(session('options'));


$products = $options->map(function ($value, $key) {

        $this->totalamount += $value['price'];
        $this->product_name .= $value['name'] . '-';
    
});
// dd($this->product_name);
// payment link
$key = 'sk_test_646DMYvwqigghxvnzfJpJXVh:';
$key = base64_encode($key);

$data['data']['attributes']['amount'] = $this->totalamount * 100;
$data['data']['attributes']['description'] = $this->product_name;
$this->response = Curl::to('https://api.paymongo.com/v1/links')
            ->withHeader('Content-Type: application/json')
            ->withHeader('accept: application/json')
            ->withHeader('Authorization: Basic '. $key .'')
            ->withData($data)
            ->asJson()
            ->post();

$this->customer->notify(new SendTrackingNo($this->trackingNumber));

$products = $options->map(function ($value, $key) {
    if ($value['product'] == 'laptop' || $value['product'] == 'pheriperalsandaccessories') {
        $product = LaptopnPheriperals::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'price' => $product->price,
            'category' => $value['product'],
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('laptops')->getUrl(),
        ];
        $this->laptop_quantity++;
        $product->transaction()->create([
            'quantity' => $this->laptop_quantity,
            'payment_link' => $this->response->data->id,
            'user_id' => $this->customer->id,
            'total_amount' => $this->totalamount,
            'tracking_number' => $this->trackingNumber,
        ]);

    } elseif ($value['product'] == 'desktoppackages') {
        $product = DesktopPackage::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'category' => $value['product'],
            'price' => $product->price,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('desktop')->getUrl(),
        ];
        $this->desktop_quantity++;
        $product->transaction()->create([
            'quantity' => $this->desktop_quantity,
            'payment_link' => $this->response->data->id,
            'user_id' => $this->customer->id,
            'total_amount' => $this->totalamount,
            'tracking_number' => $this->trackingNumber,
        ]);
    } elseif ($value['product'] == 'pccomponents') {
        $product = PC_components::find($value['id']);
        $productarray = [
            'brand_name' => $product->name,
            'category' => $value['product'],
            'price' => $product->price,
            'model_name' => $product->product_model,
            'img_url' => $product->getFirstMedia('PC_Components')->getUrl(),
        ];
        $product->transaction()->create([
            'quantity' => $this->laptop_quantity,
            'payment_link' => $this->response->data->id,
            'user_id' => $this->customer->id,
            'total_amount' => $this->totalamount,
            'tracking_number' => $this->trackingNumber,
        ]);
    }
    
    return $productarray;
});


    return redirect($this->response->data->attributes->checkout_url);
 

}


public function paymentstatus() {
    $key = 'sk_test_646DMYvwqigghxvnzfJpJXVh:';
    $key = base64_encode($key);
    $response = Curl::to('https://api.paymongo.com/v1/payments?limit=10')
                ->withHeader('Content-Type: application/json')
                ->withHeader('accept: application/json')
                ->withHeader('Authorization: Basic '. $key .'')
                ->asJson()
                ->get();

    session()->flush();
    
        return response()->json([
            'response' => $response->data
        ]);
    // foreach($response->data as $data){
    //     Reciept::where('email', $data->attributes->billing->email)->update([
    //         'totalamount' => $data->attributes->amount,

    //     ]);    
    }
   
    // foreach($response->data as $data){
    //     dd($data->attributes->billing);
    // }


}


