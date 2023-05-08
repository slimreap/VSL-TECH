<x-productslayout>
    <x-slot name="title">
        Bag Item
    </x-slot>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- Left Grid -->
            <div class="container-fluid p-3">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            @if(session('options'))
                                @foreach(session('options') as $key => $value)
                                    @if(is_array($value))
                                        <p>id: {{$value['id']}}</p>
                                        <p>product: {{$value['product']}}</p>
                                    @else
                                        <p>{{$key}}: {{$value}}</p>
                                    @endif
                                @endforeach
                            @endif
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://via.placeholder.com/150" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Item Name</h5>
                                        <p class="card-text">Price: $<span id="item-price">10</span></p>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Quantity:</span>
                                            <input id="item-quantity" type="number" class="form-control" aria-label="Quantity" value="1" min="1">
                                            <button id="increase-quantity-btn" class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
          <div class="col-md-6">
            <!-- Right Grid -->
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
        </div>
      </div>
      

      
</x-productslayout>