<x-productslayout>

    <x-slot name="title">
        Products
    </x-slot>
    {{-- productlist image --}}
    {{-- <img src="{{asset('storage/img/1920-x-700-Intel-13th-gen-D21T.png')}}" class="w-100" alt="">
    <div class="banner-ad"> --}}
        <a href="#">
          <img src="{{asset('storage/img/1920-x-700-Intel-13th-gen-D21T.png')}}" class="w-100" alt="Banner Ad">
        </a>
   
    {{-- <div class="mh-100 h-25" style="background-image: url('{{asset('storage/img/1920-x-700-Intel-13th-gen-D21T.png')}}')">
        
    </div> --}}

    {{-- products by category --}}
    {{-- <div class="container">
        <div class="row">
            
            <div class="col">

            </div>
            <div class="col fs-1">
                DESKTOP PACK
            </div>
            <div class="col">

            </div>

        </div> --}}

        @if (!$desktopPackages->isEmpty())
            
      
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                        <h2>Desktop packages {{$desktopPackages}}</h2>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($desktopPackages as $desktoppackage)
                        
                  
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> <img class="img-responsive" src="" alt=""> </div>
                        <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="it_shop_detail.html">{{$desktoppackages->set_name}}</a></h4>
                        </div>
                        <div class="starratin ">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$15.00</span> – <span class="new_price">{{$desktoppackages->price}}</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div>
            </div>
    @endif
    
            {{-- LAPTOP PHERIPERALS SECTION --}}

        
    @if (!$laptopPheriperals->isEmpty())
            <div class="row">
                <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                    <h2>Laptop pheriperals</h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">

                @foreach ($laptopPheriperals as $laptopPheriperal)
                    
              
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                    <div class="product_img"> <img class="img-responsive" src="" alt=""> </div>
                    <div class="product_detail_btm">
                    <div class="center">
                        <h4><a href="it_shop_detail.html">{{$laptopPheriperal->prod_name}}</a></h4>
                    </div>
                    <div class="starratin ">
                        <div class="center"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                    </div>
                    <div class="product_price">
                        <p><span class="old_price">$15.00</span> – <span class="new_price">{{$laptopPheriperal->price}}</span></p>
                    </div>
                    </div>
                </div>
                </div>
                @endforeach

            </div>
        </div>
@endif

        {{-- PC COMPONENTS SECTION --}}

        @if (!$PcComponents->isEmpty())
           {{-- LAPTOP PHERIPERALS SECTION --}}
           <div class="row">
            <div class="col-md-12">
            <div class="full">
                <div class="main_heading text_align_center">
                <h2>PC Components</h2>
                </div>
            </div>
            </div>
        </div>
        <div class="row">

            @foreach ($PcComponents as $PcComponent)
                
          
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
                <div class="product_detail_btm">
                <div class="center">
                    <h4><a href="it_shop_detail.html">{{$PcComponent->component}}</a></h4>
                </div>
                <div class="starratin ">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                    <p><span class="old_price">$15.00</span> – <span class="new_price">{{$PcComponent->price}}</span></p>
                </div>
                </div>
            </div>
            </div>
            @endforeach

        </div>
    </div>

@endif
</x-productslayout>