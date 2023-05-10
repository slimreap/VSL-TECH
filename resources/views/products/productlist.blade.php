<x-productslayout>

    <x-slot name="title">
        Products
    </x-slot>

    <!-- image flex -->
    <style>
        .slideshow-container {
        position: relative;
        height: 500px; /* Change to your desired height */
        }

        .slideshow-container img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
        display: none;
        }

        .slideshow-container img:first-child {
        display: block;
        }
    </style>
    <div class="slideshow-container">
        <img src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/header-banner-960.jpg')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/asus_amd_mystery_gift_motherboards.jpg')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/Promotion.jpg')}}" class="w-100" alt="Banner Ad">
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("slideshow-container")[0].getElementsByTagName("img");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          setTimeout(showSlides, 2000); /* Change 5000 to your desired interval in milliseconds */
        }
        </script>

    {{--<!-- products display -->
        @if (!$desktopPackages->isEmpty())
            
      
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="full">
                        <div class="main_heading text_align_center">
                        <h2>Desktop Packages</h2>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($desktopPackages as $desktoppackage)
                        
                  
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                        <div class="product_img"> <img class="img-responsive" src="{{$desktoppackage->img_url}}" alt=""> </div>
                        <div class="product_detail_btm">
                        <div class="center">
                            <h4><a href="it_shop_detail.html">{{$desktoppackage->set_name}}</a></h4>
                        </div>
                        <div class="starratin ">
                            <div class="center"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                        </div>
                        <div class="product_price">
                            <p><span class="old_price">$15.00</span> – <span class="new_price">{{$desktoppackage->price}}</span></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div>
            </div>
    @endif
    --}}
            {{-- LAPTOP PHERIPERALS SECTION --}}

        
    {{--@if (!$laptopPheriperals->isEmpty())
            <div class="row">
                <div class="col-md-12">
                <div class="full">
                    <div class="main_heading text_align_center">
                    <h2 style="margin-left: 20px;">Laptop Pheriperals</h2>
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
--}}
        {{-- PC COMPONENTS SECTION --}}

       {{-- @if (!$PcComponents->isEmpty())--}}
           {{-- LAPTOP PHERIPERALS SECTION --}}
           {{--<div class="row">
            <div class="col-md-12">
            <div class="full">
                <div class="main_heading text_align_center">
                <h2 style="margin-left: 20px;">PC Components</h2>
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
--}}
</x-productslayout>