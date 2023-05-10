<x-productslayout >
    <x-slot name="title">
        Desktop Packages
     </x-slot>
      <style>
        .card {
            transition: transform 0.2s ease-in-out;
            height: 100%;
            margin-top: 30px;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%;
        }
</style>
     <div class="container">
        <div class="row">
            @foreach ($desktoppackages as $desktopPackage)
            <div class="col-md-3 mb-3" style="margin-top: 30px;">
                <div class="card h-100" >
                    <a href="{{route('productform', ['category' => 'desktoppackages', 'id' => $desktopPackage['id']])}}">
                        <img class="card-img-top" src="{{$desktopPackage['img_url']}}" alt="">
                    </a>

                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title mb-0 text-center" style="font-weight: bold;">{{$desktopPackage['set_name']}}</h5>
                        <p class="card-title mb-0 text-center" style="font-weight: bold;">{{$desktopPackage['product_model']}}<p>
                        <p class="card-text mb-0 text-center" style="font-weight: bold;">{{$desktopPackage['price']}}<p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
     </div>
</x-productslayout>