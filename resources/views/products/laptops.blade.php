<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>

 {{-- subnavbar --}}
 <div class="h-25 subnavbar">
    <div class="row">
        <div class="col text-white fs-3">
            Laptops:
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Apple</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">HP </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Lenovo</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Dell</a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Acer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Asus </a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Razer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">LG </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Samsung</a>
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



<h3 class="fs-2">Apple</h3>

<div class="row">
    <div class="col">
        <a href="">
            <img class="w-100" src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" alt="">
        </a>
    </div>
    <div class="col">
        <a href="">
            <img class="w-100" src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" alt="">
        </a>
    </div>
    <div class="col">
        <a href="">
            <img class="w-100" src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" alt="">
        </a>
    </div>
    <div class="col">
        <a href="">
            <img class="w-100" src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" alt="">
        </a>
    </div>
</div>
</x-productslayout>