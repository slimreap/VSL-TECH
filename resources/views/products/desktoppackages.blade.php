<x-productslayout>
    <x-slot name="title">
        Desktop Packages
     </x-slot>
 
       


    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($desktoppackages as $desktopPackage)
                <div class="col-md-3">
                    <a href="{{route('productform', ['id' => $desktopPackage['id']])}}">
                        <img class="w-100" src="{{$desktopPackage['img_url']}}" alt="">
                    </a>
                    <div class="">
                        {{$desktopPackage['set_name']}}
                    </div>
                    <div class="">
                        {{$desktopPackage['price']}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



</x-productslayout>