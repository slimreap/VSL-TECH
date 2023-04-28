<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>

 {{-- subnavbar --}}
 <div class="h-25 subnavbar">
    <div class="row">

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Apple'])}}">Apple</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Hp'])}}">HP </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Lenovo'])}}">Lenovo</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Dell'])}}">Dell</a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Acer'])}}">Acer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Asus'])}}">Asus </a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Razer'])}}">Razer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'LG'])}}">LG </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Samsung'])}}">Samsung</a>
            </div>
        </div>


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


@foreach ($laptops as $laptop)
    

<div class="row">
    <div class="col">
        <a href="">
            <img class="w-100" src="{{$laptop['img_url']}}" alt="">
        </a>
        <div class="">
            {{$laptop['brand_name']}}
        </div>
        <div class="">
            {{$laptop['description']}}
        </div>
        <div class="">
            {{$laptop['price']}}
        </div>
    </div>
</div>

@endforeach
</x-productslayout>