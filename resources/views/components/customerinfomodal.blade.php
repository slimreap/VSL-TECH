
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill btn-lg" style="width: 300px; margin-left: 30%; background: #4F0354; color: white;" data-bs-toggle="modal" data-bs-target="#buynowmodal">
    Buy Now!
  </button>
  <!-- Modal -->
  <div class="modal fade" id="buynowmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-75" style="max-width: none!important">
      <div class="modal-content w-auto">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Shipping info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <style>
                .btn-primary.rounded-pill:hover {
                    background-color: #4F0354;
                    color: white;
                    transition: all 0.2s ease-in-out;
                    transform: scale(1.1);
                }
            </style>
        

            
            {{-- shipping info modal --}}

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
                
                <div class="card" id="shippingaddresscontainer">
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
                            {{-- <div class="row">
                                <div class="row">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn rounded-pill text-white" style = "background: #4F0354;" id="confirmshippingaddress" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Confirm
                                    </button>
                                </div>
                                <div class="row">
                                    <button class="btn-light rounded-pill">Cancel</button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmshippingmodal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="confirmshippingmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- confirm shipping modal --}}
          <div class="row">
            <div class="col">
                <div class="row"><p class="fs-4">First Name</p></div>
                <div class="row"><p class="fs-4">Last Name</p></div>
                <div class="row"><p class="fs-4">Middle Initial</p></div>
                <div class="row"><p class="fs-4">Email Address</p></div>
                <div class="row"><p class="fs-4">Contact Number</p></div>
                <div class="row"><p class="fs-4">Address</p></div>
                <div class="row"><p class="fs-4">State</p></div>
                <div class="row"><p class="fs-4">City</p></div>
                <div class="row"><p class="fs-4">Postal Code</p></div>
            </div>
            <div class="col" id="confirmshippingcontainer">
                <div class="row mb-2">
                    <input type="text" class="form-control" name="firstname" id="confirmfn" placeholder="First name">
                </div>
                <div class="row mb-2">
                    <input type="text" class="form-control" name="lastname" id="confirmln" placeholder="Last name" id="" readonly>
                </div>
                <div class="row mb-2">
                    <input type="text" class="form-control" name="middileinitial" id="confirmmi" placeholder="Middle initial" readonly>
                </div>
                <div class="row g-3 mb-2">
                    <input type="text" class="form-control" name="email" id="confirmemail" placeholder="Email" readonly>
                </div>
                <div class="row g-3 mb-2 mt-1">
                    <input type="text" class="form-control" name="contactnumber" id="confirmcontactnumber" placeholder="Contact number" readonly>
                </div>
                <div class="row g-3 mb-2">
                    <input type="text" class="form-control" name="address" id="confirmaddress" placeholder="Adress"  readonly>
                </div>
                <div class="row g-2 mb-2 mt-1">
                    <input type="text" class="form-control" name="state" id="confirmstate" placeholder="State"  readonly>
                </div>
                <div class="row g-3 mb-2">
                    <input type="text" class="form-control" name="city" id="confirmcity" placeholder="City" readonly>
                </div>        
                <div class="row g-3 mb-2 mt-1">
                    <input type="text" class="form-control" name="postalcode" id="confirmpostalcode" placeholder="Postal Code" readonly>
                </div>
                
       
            </div>
        </div>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- modal for checkout --}}
          <div class="row">
            <h3 style="font-weight: bold; margin-bottom: 10px;">Order Summary</h3>
            <div class="row">
                 <div class="col">
                     <img src="{{$productdetails['img_url']}}" class="img-thumbnail h-100 w-100" alt="">
                 </div>
                 <div class="col">
                     <div class="row">
                         name of prod: {{$productdetails['brand_name']}}
                     </div>
                     <div class="row">
                         Quantity:
                     </div>
                     <div class="row">
                         Price: {{$productdetails['price']}}
                     </div>
                     <div class="row">
                         Discount:
                     </div>
                     <div class="row">
                         Total: {{$productdetails['price']}}
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-6">Price:</div>
                     <div class="col-6">{{$productdetails['price']}}</div>
                 </div>
                 <div class="row">
                     <div class="col-6">Discount:</div>
                     <div class="col-6"><!--Discount value goes here--></div>
                 </div>
                 <div class="row">
                     <div class="col-6">Total:</div>
                     <div class="col-6">{{$productdetails['price']}}</div>
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
             <form action="{{route('confirmcheckout')}}" id="checkoutform" method="get">
                 @csrf 
                 <input type="text" id="category" name="category" hidden>
                 <input type="text" id="quantity-form" name="quantity" hidden>
                 <input type="text" name="productid" hidden value="{{$productdetails['id']}}">
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
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        

          
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputElementsforshippingform = document.querySelectorAll("#shippingaddresscontainer input[type='text']");
            var inputElementsforconfirmshipping = document.querySelectorAll("#confirmshippingcontainer input[type='text']");
            var confirmbtn = document.getElementById('confirmshippingaddress');
            var checkoutform = document.getElementById('checkoutform');
            var inputcategory = document.getElementById('category');
            var quantity = document.getElementById('quantity');
            var quantityonform = document.getElementById('quantity-form');
            var confirmshippingarray = [];
        
        
            const url = window.location.href;
            const slugs = url.split("/"); // split the URL string into an array of slugs
        
            const category = slugs[slugs.length - 2]; // get the second to the last slug
        
            // console.log(quantity.value); // outputs "page"
            
        // adding quantity
        quantity.addEventListener('change', (e) => {
            quantity = e.target.value;
            quantityonform.value = quantity;
        })
        
        
        // Modal shipping customer info form
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
            var firstname = document.getElementById('inputfn');
            var lastname = document.getElementById('lastname');
            var middleinitial = document.getElementById('middileinitial');
            var email = document.getElementById('inputemail');
            var contactnumber = document.getElementById('inputcontactnumber');
            var address = document.getElementById('inputaddress');
            var state = document.getElementById('inputstate');
            var city = document.getElementById('inputcity');
            var postalcode = document.getElementById('inputpostalcode');
        
            var confirmfn = document.getElementById('confirmfn');
            var confirmln = document.getElementById('confirmln');
            var confirmmi = document.getElementById('confirmmi');
            var confirmemail = document.getElementById('confirmemail');
            var confirmcontactnumber = document.getElementById('confirmcontactnumber');
            var confirmaddress = document.getElementById('confirmaddress');
            var confirmstate = document.getElementById('confirmstate');
            var confirmcity = document.getElementById('confirmcity');
            var confirmpostal = document.getElementById('confirmpostalcode');
        
        
            var checkoutfullname = document.getElementById('checkoutfullname');
            var checkoutemailaddress = document.getElementById('checkoutemailaddress');
            var checkoutfinalcontactnumber = document.getElementById('checkoutfinalcontactnumber');
            var checkoutfinaladdress = document.getElementById('checkoutfinaladdress');
            var checkoutfinalstate = document.getElementById('checkoutfinalstate');
        
        
            checkoutfullname.value = confirmfn.value + " " + confirmln.value + confirmmi.value ;
            checkoutemailaddress.value = confirmemail.value;
            checkoutfinalcontactnumber.value = confirmcontactnumber.value;
            checkoutfinaladdress.value = confirmaddress.value;
            checkoutfinalstate.value = confirmstate.value;
        
        });
        
                            // loop through the input elements and do something with them
        
        
        
            
        
        });
        </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



  
