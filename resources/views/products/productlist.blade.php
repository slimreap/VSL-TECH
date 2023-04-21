<x-productslayout>

    <x-slot name="title">
        Products
    </x-slot>

    {{-- productlist image --}}
    <img src="{{asset('storage/img/1920-x-700-Intel-13th-gen-D21T.png')}}" class="w-100" alt="">
    {{-- <div class="mh-100 h-25" style="background-image: url('{{asset('storage/img/1920-x-700-Intel-13th-gen-D21T.png')}}')">
        
    </div> --}}

    {{-- products by category --}}
    <div class="container">
        <div class="row">
            
            <div class="col">

            </div>
            <div class="col fs-1">
                DESKTOP PACK
            </div>
            <div class="col">

            </div>

        </div>

        <div class="row">
            <div class="col">
                <a href="">
                    <img src="{{asset('storage/E-commerce/pc options/OPTION 1.png')}}" class="w-100" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="{{asset('storage/E-commerce/pc options/OPTION 2.png')}}" class="w-100" alt="">
                </a>            </div>
            <div class="col">
                <a href="">
                    <img src="{{asset('storage/E-commerce/pc options/OPTION 3.png')}}" class="w-100" alt="">
                </a>            </div>
            
        </div>

    </div>

</x-productslayout>