<x-productslayout>
    <x-slot name="title">
        Pheriperals and accessories
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
     {{-- product peripherals display --}}
     <div class="container">
        <div class="row">
            @foreach ($laptops as $peripheralsNaccessories)
            <div class="col-md-3 mb-3">
                <div class="card h-100" style="margin-top: 30px;">
                    <a href="{{route('productform',['id' => $peripheralsNaccessories['id']])}}">
                        <img class="card-img-top" src="{{$peripheralsNaccessories['img_url']}}" alt="">
                    </a>
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title mb-0 text-center" style="font-weight: bold;">{{$peripheralsNaccessories['brand_name']}}</h5>
                        <p class="card-title mb-0 text-center" style="font-weight: bold;">{{$peripheralsNaccessories['description']}}<p>
                        <p class="card-text mb-0 text-center" style="font-weight: bold;">{{$peripheralsNaccessories['price']}}<p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>>
    </div>
          {{-- subnavbar --}}

        <div class="col">
            <div class="row text-white fs-3">
                 <p class="fs-3">Find your needs :</p>
                 <input class="rounded-pill" type="text" 
                 style="padding-right: 20px;
                 background-image: url('{{asset('storage/img/magnifying glass.png')}}');
                 background-repeat: no-repeat;
                 background-position: right center;
                 background-size: 30px 30px; " name="" id="">
            </div>

        </div>
    </div>
</div>
</x-productslayout>