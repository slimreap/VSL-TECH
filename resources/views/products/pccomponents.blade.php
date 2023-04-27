<x-productslayout>
    <x-slot name="title">
        PC Components
    </x-slot>


    <x-products.pccomponentnavbar/>

    <div class="row">
    @foreach ($pccomponents as $components)
      


        <div class="col">

            <a href="">
                <img class="w-100" src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" alt="">
            </a>
            <div class="">
                {{$components->brand_name}}
            </div>
            <div class="">
                {{$components->product_model}}
            </div>
            <div class="">
                {{$components->description}}
            </div>
            <div class="">
                {{$components->price}}
            </div>
        </div>

    @endforeach
    
</div>
    
</x-productslayout>