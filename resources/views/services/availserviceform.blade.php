<x-serviceslayout>

    <x-slot name="title">
        Service Customer Info
    </x-slot>

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
        <p class="fs-3 p-auto" style = "font-weight: bold;">Customer Information Form</p>
    </div>
    
    <div class="row" id="shippingaddresscontainer">
        <div class="col">
            <div class="row g-3">
                <input type="text" class="form-control" name="firstname" id="inputfn" placeholder="First name" id="">
            </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" id="">
                </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="address" id="inputaddress" placeholder="Adress" id="">
            </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="barangay" id="inputbrngy" placeholder="Baranggay" id="">
    
            </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="state" id="inputstate" placeholder="State" id="">
            </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="postalcode" id="inputpostalcode" placeholder="Postal Code" id="">
            </div>
            <div class="row g-3">
                <input type="text" class="form-control" name="email" id="inputemail" placeholder="Email" id="">
            </div>

        </div>


        <div class="col">

            <div class="row g-3">
            <input type="text" class="form-control" name="contactnumber" id="inputcontactnumber" placeholder="Contact number" id="">
            </div>
            <div class="row g-3">
            <input type="text" class="form-control" name="city" id="inputcity" placeholder="City" id="">
            </div>

        </div>
    </div>


    <div class="row">
        <div class="row">
           
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill" id="confirmshippingaddress" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Confirm
  </button>
            
        </div>
    </form>
        <div class="row">
            <button class="btn-light rounded-pill">Cancel</button>
        </div>
    </div>


    {{-- MODALS --}}
    
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style = "background: navy; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Customer Details summary</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <div class="row"><p class="fs-4">First Name</p></div>
                    <div class="row"><p class="fs-4">Lasyt Name</p></div>
                    <div class="row"><p class="fs-4">Email Address</p></div>
                    <div class="row"><p class="fs-4">Contact Number</p></div>
                    <div class="row"><p class="fs-4">Address</p></div>
                    <div class="row"><p class="fs-4">Barangay</p></div>
                    <div class="row"><p class="fs-4">State</p></div>
                    <div class="row"><p class="fs-4">City</p></div>
                    <div class="row"><p class="fs-4">Postal Code</p></div>
                </div>
                <div class="col" id="confirmshippingcontainer">
                    {{-- <div class="row"><p class="fs-4" id="customername"></p></div>
                    <div class="row"><p class="fs-4" id="emailaddress"></p></div>
                    <div class="row"><p class="fs-4" id="contactnumber"></p></div>
                    <div class="row"><p class="fs-4" id="address"></p></div>
                    <div class="row"><p class="fs-4" id="barangay"></p></div>
                    <div class="row"><p class="fs-4" id="city"></p></div>
                    <div class="row"><p class="fs-4" id="postalcode"></p></div> --}}
                    <div class="row mb-2">
                        <input type="text" class="form-control" name="firstname" id="confirmfn" placeholder="First name" id="" readonly>
                    </div>
                    <div class="row mb-2">
                        <input type="text" class="form-control" name="lastname" id="confirmln" placeholder="last name" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="address" id="confirmaddress" placeholder="Adress" id="" readonly>
                    </div>
                    <div class="row g-3 mb-2">
                        <input type="text" class="form-control" name="barangay" id="confirmbrngy" placeholder="Baranggay" id="" readonly>
            
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="confirmdetails" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  {{-- MODAL FOR CHECKOUT --}}

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style = "background: navy; color: white;">
          <h1 class="modal-title fs-5" id="exampleModalLabel2">Customer Details SHOY</h1>
        </div>
        <div class="modal-body">
            <img src = "{{asset('storage/E-commrce/company_logo.png')}}">
            <div class="row">
               <p>Availed Summary</p>
               <div class="row">
                    <div class="col">
                        <div class="row">
                            Service Availed:
                        </div>
                        <div class="row">
                           Price:
                        </div>
                        <div class="row">
                            Discount:
                        </div>
                        <div class="row">
                            Total: 
                        </div>
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
            </div>
            <div class="row">
               <div class="col"></div>
               <div class="col">
                <!-- <form action="{{route('productcheckout')}}" method="post">
                    @csrf -->
                    <input type="text" name="serviceid" value="">
                    <input type="text" id="checkoutfullname" name="completename">
                    <input type="text" id="checkoutemailaddress" name="emailaddress">
                    <input type="text" id="checkoutfinalcontactnumber" name="finalcontactnumber">
                    <input type="text" id="checkoutfinaladdress" name="finaladdress">
                    <input type="text" id="checkoutfinalstate" name="finalstate">
                    <button type="submit" class="btn-primary rounded-pill">
                        Avail
                    </button>
                <!-- </form> -->
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
</x-serviceslayout>
