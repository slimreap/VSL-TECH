<x-productslayout>
    <x-slot name="title">
        Pheriperals and accessories
     </x-slot>

          {{-- subnavbar --}}
 <div class="h-25 subnavbar">
    <div class="row">
        <div class="col text-white fs-3">
            Pheriperals and Accessories:
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Cables</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Earphones </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Mouse Pad</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Power Bank</a>
                
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



<h3 class="fs-2">Cables</h3>

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