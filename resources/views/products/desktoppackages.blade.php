<x-productslayout>
    <x-slot name="title">
        Desktop Packages
     </x-slot>
     {{-- subnavbar --}}
 <div class="h-25 subnavbar">
    <div class="row">
        <div class="col text-white fs-3">
            Desktop Packages:
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Starter Pack</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Gaming Pack </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Streamer Pack</a>
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


@foreach ($listdesktoppackages as $pc)
<div class="row">
    <div class="col">
        <a href="">
            <img class="w-100" src="{{$pc->img_url}}" alt="">
        </a>
        <p>{{$pc->set_name}}</p>
        <p>{{$pc->price}}</p>
    </div>
    
</div>
@endforeach

</x-productslayout>