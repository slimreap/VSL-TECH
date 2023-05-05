<x-productslayout>

    <x-slot name="title">
        Shipping info
    </x-slot>
    <style>
        .btn-primary.rounded-pill:hover {
            background-color: #4F0354;
            color: white;
            transition: all 0.2s ease-in-out;
            transform: scale(1.1);
        }
    </style>

<div class="container w-50 text-center position-relative">
    <div class="row">
        <div class="col">
            
        </div>
        <div class="col">
            <img src="" alt="">
        </div>
        <div class="col">
  
        </div>
    </div>


    <div class="row text-center">
        <h1 class="fs-3 p-auto" style = "font-weight: bold; margin-bottom: 30px;">Shipping Address</h1>
    </div>
    
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-sm-4 mb-3">
                        <input type="text" class="form-control" name="firstname" id="inputfn" placeholder="First name">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <input type="text" class="form-control" name="middleinitial" id="middileinitial" placeholder="M.I">
                    </div>
                </div>
    
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="email" id="inputemail" placeholder="Email" id="">
                </div>
    
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="contactnumber" id="inputcontactnumber" placeholder="Contact number" id="">
                </div>
    
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="address" id="inputaddress" placeholder="Address">
                </div>
    
                <div class="form-inline">
                    <div class="form-group mb-3 mr-3">
                        <input type="text" class="form-control" name="state" id="inputstate" placeholder="State">
                    </div>
                    <div class="form-group mb-3 mr-3">
                        <input type="text" class="form-control" name="city" id="inputcity" placeholder="City">
                    </div>
                    <div class=" col-sm-4" style="margin-bottom: 10px;">
                        <input type="text" class="form-control" name="postalcode" id="inputpostalcode" placeholder="Postal Code">
                    </div>
                </div>
    
                <!--Buttons-->
                <div class="row">
                    <div class="row">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn rounded-pill text-white" style = "background: #4F0354;" id="confirmshippingaddress" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Confirm
                        </button>
                    </div>
                    <div class="row">
                        <button class="btn-light rounded-pill">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    


    {{-- MODALS --}}
    
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: #4F0354; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Customer Details summary</h1>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <div class="row"><p class="fs-4">First Name</p></div>
                    <div class="row"><p class="fs-4">Last Name</p></div>
                    <div class="row"><p class="fs-4">Middle Initial</p></div>
                    <div class="row"><p class="fs-4">Email Address</p></div>
                    <div class="row"><p class="fs-4">Contact Number</p></div>
                    <div class="row"><p class="fs-4">Address</p></div>
                    <div class="row"><p class="fs-4">Barangay</p></div>
                    <div class="row"><p class="fs-4">State</p></div>
                    <div class="row"><p class="fs-4">City</p></div>
                    <div class="row"><p class="fs-4">Postal Code</p></div>
                </div>
                <div class="col" id="confirmshippingcontainer">
                    <div class="row mb-2">
                        <input type="text" class="form-control" name="firstname" id="confirmfn" placeholder="First name" id="" readonly>
                    </div>
                    <div class="row mb-2">
                        <input type="text" class="form-control" name="lastname" id="confirmln" placeholder="Last name" id="" readonly>
                    </div>
                    <div class="row mb-2">
                        <input type="text" class="form-control" name="middileinitial" id="confirmln" placeholder="Middle initial" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="address" id="confirmaddress" placeholder="Adress" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="barangay" id="confirmbrngy" placeholder="Barangay" id="" readonly>
            
                    </div>
                    <div class="row g-2 mb-2 mt-1">
                        <input type="text" class="form-control" name="state" id="confirmstate" placeholder="State" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2 mt-1">
                        <input type="text" class="form-control" name="postalcode" id="confirmpostalcode" placeholder="Postal Code" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="email" id="confirmemail" placeholder="Email" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2 mt-1">
                        <input type="text" class="form-control" name="contactnumber" id="confirmcontactnumber" placeholder="Contact number" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="city" id="confirmcity" placeholder="City" id="" readonly>
                    </div>        
                    
           
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button id="confirmdetails" type="button" class="btn btn-primary" style="background: #4F0354;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  {{-- MODAL FOR CHECKOUT --}}

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style = "background: #4F0354; color: white; font-weight: bold;">
          <h1 class="modal-title fs-5" id="exampleModalLabel2">Customer Details</h1>
        </div>
        <div class="modal-body">
            <div class="row">
               <h3 style="font-weight: bold; margin-bottom: 10px;">Order Summary</h3>
               <div class="row">
                <div class="col-md-6">
                    <img src="{{$laptopdetails['img_url']}}" class="img-thumbnail h-100 w-100" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">Name of Product:</div>
                        <div class="col-6">{{$laptopdetails['brand_name']}}</div>
                    </div>
                    <div class="row">
                        <div class="col-6">Quantity:</div>
                        <div class="col-6"><!--Quantity value goes here--></div>
                    </div>
                    <div class="row">
                        <div class="col-6">Price:</div>
                        <div class="col-6">{{$laptopdetails['price']}}</div>
                    </div>
                    <div class="row">
                        <div class="col-6">Discount:</div>
                        <div class="col-6"><!--Discount value goes here--></div>
                    </div>
                    <div class="row">
                        <div class="col-6">Total:</div>
                        <div class="col-6">{{$laptopdetails['price']}}</div>
                    </div>
                </div>
            </div>
            


            <div class="row">
                <div class="row text-start">
                    <p id="name">sasuke</p>
                    <p id="email">sar@gsad</p>
                    <p id="contactnumber">31245213213124</p>
                    <p id="address">konoha</p>
                    <p id="state">ph</p>

                </div>

                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col">
                        <div class="row">
                            <img src="" alt="">
                        </div>
                        <div class="row">
                            <p style="font-weight: bold;">Payment Method: <span style="color: #4F0354">Cash on Delivery</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-botom: 10px;">
               <div class="col"></div>
               <div class="col hidden">
                <form action="{{route('confirmcheckout')}}" method="get">
                    @csrf 
                    <input type="text" name="productid" hidden value="{{$laptopdetails['id']}}">
                    <input type="text" id="checkoutfullname" hidden name="completename">
                    <input type="text" id="checkoutemailaddress" hidden name="emailaddress">
                    <input type="text" id="checkoutfinalcontactnumber" hidden name="finalcontactnumber">
                    <input type="text" id="checkoutfinaladdress" hidden name="finaladdress">
                    <input type="text" id="checkoutfinalstate"hidden  name="finalstate">
                    <button type="submit" class="btn-primary rounded-pill">
                        Checkout
                    </button>
                </form>
               </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" style="background: #4F0354;">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
<script>
document.addEventListener("DOMContentLoaded", function() {
    var inputElementsforshippingform = document.querySelectorAll("#shippingaddresscontainer input[type='text']");
    var inputElementsforconfirmshipping = document.querySelectorAll("#confirmshippingcontainer input[type='text']");
    var confirmbtn = document.getElementById('confirmshippingaddress');
    var confirmshippingarray = [];


    confirmbtn.addEventListener('click',function(){

for (var i = 0; i < inputElementsforshippingform.length; i++) {
    var input = inputElementsforshippingform[i];
    // do something with the input element, e.g., get its value

    confirmshippingarray.push(input.value);

}

for (var i = 0; i < inputElementsforconfirmshipping.length; i++) {
    inputElementsforconfirmshipping[i].value = confirmshippingarray[i];
}

});


confirmdetails.addEventListener('click',function(){
    var firstname = document.getElementById('confirmfn');
    var lastname = document.getElementById('confirmln');
    var email = document.getElementById('confirmemail');
    var contactnumber = document.getElementById('confirmcontactnumber');
    var address = document.getElementById('confirmaddress');
    var barangay = document.getElementById('confirmbrngy');
    var city = document.getElementById('confirmcity');
    var state = document.getElementById('confirmstate');

    var completename = document.getElementById('name');
    var emailaddress = document.getElementById('email');
    var finalcontactnumber = document.getElementById('contactnumber');
    var finaladdress = document.getElementById('address');
    var finalstate = document.getElementById('state');


    var checkoutfullname = document.getElementById('checkoutfullname');
    var checkoutemailaddress = document.getElementById('checkoutemailaddress');
    var checkoutfinalcontactnumber = document.getElementById('checkoutfinalcontactnumber');
    var checkoutfinaladdress = document.getElementById('checkoutfinaladdress');
    var checkoutfinalstate = document.getElementById('checkoutfinalstate');

 


    completename.innerHTML = firstname.value + " " + lastname.value;
    emailaddress.innerHTML = email.value;
    finalcontactnumber.innerHTML = contactnumber.value;
    finaladdress.innerHTML = address.value + ", " + barangay.value + ", " + city.value;
    finalstate.innerHTML = state.value;

    checkoutfullname.value = completename.innerHTML;
    checkoutemailaddress.value = mailaddress.innerHTML;
    checkoutfinalcontactnumber.value = finalcontactnumber.innerHTML;
    checkoutfinaladdress.value = finaladdress.innerHTML;
    checkoutfinalstate.value =     finalstate.innerHTML;

});

                    // loop through the input elements and do something with them



    

});
</script>
</x-productslayout>
{{-- 
<form>





    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> --}}