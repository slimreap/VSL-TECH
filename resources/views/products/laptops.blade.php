<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>
 <style>
      .card {
            transition: transform 0.2s ease-in-out;
            height: 100%;
            margin-top: 30px;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%;
        }
</style>

<div class="container">
    <div class="row">
      @foreach ($laptops as $laptop)
      <div class="col-md-3 mb-3">
        <div class="card h-100" style="margin-top: 30px;">
          <a href="{{route('productform',['category' => 'laptop','id' => $laptop['id']])}}">
            <img class="card-img-top" src="{{$laptop['img_url']}}" alt="">
          </a>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title mb-0 text-center" style="font-weight: bold;">{{$laptop['brand_name']}}</h5>
            <p class="card-text mb-0 text-center" style="font-weight: bold;">{{$laptop['product_model']}}</p>
            <p class="card-text text-center"><span style="font-weight: bold;">Price: </span> ₱ {{$laptop['price']}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  




<script>
  

</script>
</x-productslayout>