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
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{route('confirmservice')}}" method="post">
    @csrf
    <div class="row text-center">
        <p class="fs-3 p-auto" style = "font-weight: bold;">Customer Information Form</p>
    </div>
    
    <div class="row" id="shippingaddresscontainer">
        <div class="col">
            <div class="row g-3">
                <input type="text" class="form-control" name="firstname" id="inputfn" placeholder="First name" id="">
            </div>
            <div class="row g-3">
                <input type="text" value="" class="form-control" hidden name="servicerequesttype" id="servicetype" placeholder="First name" id="">
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
<button type="submit" class="btn btn-primary rounded-pill" style="background: #4F0354;" id="confirmshippingaddress" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Confirm
  </button>
            
        </div>
    </form>
        <div class="row">
        <button class="btn-secondary rounded-pill">Cancel</button>
        </div>
    </div>

<script>
    // Get the last segment of the current URL
var segments = window.location.pathname.split('/');
var lastSegment = segments[segments.length - 1];

// Output the last segment to the console
var service = document.getElementById('servicetype');

service.value = lastSegment;

</script>
   
</x-serviceslayout>
