<x-productslayout>
    <x-slot name="title">
        Desktop Packages
     </x-slot>
 
       


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