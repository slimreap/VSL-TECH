<x-productslayout>
    <x-slot name="title">
        Pheriperals and accessories
     </x-slot>


     {{-- product peripherals display --}}
     <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($laptops as $peripheralsNaccessories)
                    <div class="col-md-3">
                        <a href="{{route('productform',['id' => $peripheralsNaccessories['id']])}}">
                            <img class="w-100" src="{{$peripheralsNaccessories['img_url']}}" alt="">
                        </a>
                        <div class="">
                            {{$peripheralsNaccessories['brand_name']}}
                        </div>
                        <div class="">
                            {{$peripheralsNaccessories['description']}}
                        </div>
                        <div class="">
                            {{$peripheralsNaccessories['price']}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
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