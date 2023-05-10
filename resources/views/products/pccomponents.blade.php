<x-productslayout>
    <x-slot name="title">
        PC Components
    </x-slot>

    <div class="row">
    @foreach ($pccomponents as $components)
        <div class="col">

            <a href="">
                <img class="w-100" src="{{$components['img_url']}}" alt="">
            </a>
            <div class="">
                {{$components['brand_name']}}
            </div>
            <div class="">
                {{$components['product_model']}}
            </div>
            <div class="">
                {{$components['price']}}
            </div>
        </div>

    @endforeach
    
</div>
    
</x-productslayout>