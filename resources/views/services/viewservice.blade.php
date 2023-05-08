<x-serviceslayout>

    <x-slot name="title">
        Avail service
    </x-slot>
@foreach ($services as $service)
    

    <div class="container">
  <div class="row">
    <div class="col-md-12"> <!-- Full width column -->
      <div class="row"> <!-- New row for the content -->
        <div class="col-md-6 text-center">
          <img src="{{ $service['img_url'] }}" style="max-width:300%; max-height:300px;">
        </div>
        
        <div class="col-md-6">
          <!-- content for the right side -->
          <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                <div class="product-heading">
                  <h2 style="font-weight: bold;">{{$service['service_name']}}</h2>
                </div>
                <div class="price-subheading">
                    <p>₱{{$service['price']}}<p>
                </div>
                <br>
                <div class="detail-content container-fluid">
                    <p>{{$service['service_description']}}</p>
                </div>  
           </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- button -->
  <div class="d-flex justify-content-center mt-4">
    <a href="{{route('')}}">
     <button class="btn btn-primary rounded-pill btn-lg" style="max-width: 300px; background: #4F0354; color: white;">Avail service</button>
    </a>
    </div>



</x-serviceslayout>