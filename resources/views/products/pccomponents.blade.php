<x-productslayout>
    <x-slot name="title">
        PC Components
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
          @foreach ($pccomponents as $components)
          <div class="col-md-3 mb-3">
            <div class="card">
              <a href="">
                <img class="card-img-top" src="{{$components['img_url']}}" alt="">
              </a>
              <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">{{$components['brand_name']}}</h5>
                <p class="card-text" style="font-weight: bold;">{{$components['product_model']}}</p>
                <p class="card-text"><span style = "font-weight: bold;">Price: </span> ₱ {{$components['price']}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    
</x-productslayout>