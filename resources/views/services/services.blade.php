<x-serviceslayout>

<x-slot name="title">
    Services
</x-slot>
{{-- 
<h3 class="fs-2">Services</h3>

<div class="row">
    <div class="col">
        <div class="col">
            <div class="row">
                <img class="w-25" src="{{asset('storage/E-commerce/data recovery.jpg')}}" alt="">
            </div>
            <div class="row">
                Data Recovery
            </div>
            <div class="row">
                <button class="btn-primary">
                    View Service
                </button>
            </div>
        </div>
    </div>
</div> --}}

<div class="section-title">
       
  
<h3 class="fs-2">IT Services</h3>

@foreach ($data as $service)
    
@endforeach
<div class="card mb-3" style="max-width: 540px;">
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-sm-4">
                <img src="{{$service['img_url']}}" class="card-img" alt="">
            </div>
            <div class="col-sm-8">
                <h5 class="card-title">{{$service['service_name']}}</h5>
                <p class="card-text">{{$service['price']}}</p>
                <a class="btn btn-primary" href="{{route('checkoutservice', ['servicename' => $service['service_name']])}}" style="background-color: purple;">
                    View Service
                </a>
            </div>
        </div>
    </div>
</div>


</div>


</x-serviceslayout>