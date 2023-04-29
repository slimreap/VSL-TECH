<x-productslayout>
    <x-slot name="title">
        Product View
    </x-slot>
    <div class="container">
        <div class="row">
          <div class="col-md-9">
            <a href="#" style="text-align: left; font-size: 20px;" class="previous">&laquo; Go back!</a>
            <div class="row">
              <div class="col-xl-6 col-lg-12 col-md-12">
              <div class="product_view-img">
                <div class='product_view-img1'> <img src="{{$laptopdetails['img_url']}}" alt="#" style="height: 500px;"/> </div>
              </div>
              </div>
              <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                <div class="product-heading">
                  <h2>{{$laptopdetails['brand_name']}}</h2>
                </div>
                <div class="product-detail-side"> <span><del>15</del></span><span class="new-price">{{$laptopdetails['price']}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                <br>
                <div class="detail-contant">
                  <p>{{$laptopdetails['description']}}<br>
                    <span class="stock">2 in stock</span> </p>
                  <form class="cart" method="post" action="">
                    <div class="quantity">
                      <h4>Quantity</h4>
                      <input step="1" min="1" max="10" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                    </div>
                    <span><a class="nav-link scrollto " href="{{route('productcheckout',['id'=> $laptopdetails['id']])}}" >Buy now!!</a></span>
                  </form>
                </div>
                <div class="share-post" style="font-size: 25px; padding-top: 10px;"> <a href="#" class="share-text">Share</a>
                  <div class="social-links">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="full">
                  <div class="tab_bar_section">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="">Description</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div id="description" class="tab-pane active">
                        <div class="product_desc">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                            Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                            id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br>
                            <br>
                            Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                            Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                            Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                            pharetra a finibus vitae, lobortis et mi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="side_bar">
              <div class="side_bar_blog">
                <h4>SEARCH</h4>
                <div class="side_bar_search">
                  <div class="input-group stylish-input-group">
                    <input class="form-control" placeholder="Search" type="text">
                    <span class="input-group-addon">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span> </div>
                </div>
              </div>
              <br>
              <div class="side_bar_blog">
                <h4>GET A QUOTE</h4>
                <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
                
              <div class="side_bar_blog">
                <h4>OUR SERVICE</h4>
                <div class="categary">
                  <ul>
                    <li><a href="service.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                    <li><a href="service.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                    <li><a href="service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                    <li><a href="service.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                    <li><a href="service.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                  </ul>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
              
</x-productslayout>