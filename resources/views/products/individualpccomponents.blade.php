<x-productslayout>
    <x-slot name="title">
        PC Components
    </x-slot>


    <x-products.pccomponentnavbar/>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="full">
                <div class="main_heading text_align_center">
                <h2>{{$currentcomponent}}</h2>
                </div>
            </div>
            </div>
        </div>
        <div class="row">

            @foreach ($components as $componentvariable)
                
          
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
            <div class="product_list">
                <div class="product_img"> <img class="img-responsive" src="assets/img/1.jpg" alt=""> </div>
                <div class="product_detail_btm">
                <div class="center">
                    <h4><a href="it_shop_detail.html">{{$componentvariable->component}}</a></h4>
                </div>
                <div class="starratin ">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                </div>
                <div class="product_price">
                    <p><span class="old_price">$15.00</span> – <span class="new_price">{{$componentvariable->price}}</span></p>
                </div>
                </div>
            </div>
            </div>
            @endforeach

        </div>
    </div>

</x-productslayout>