<x-productslayout>
    <x-slot name="title">
        Product View
    </x-slot>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="product_view_img">
            <div class='row'>
              <div class='col-12'>
                <!-- content for top row goes here -->
              </div>
            </div> 
            <div class='row'>
              <div class='col-12'>
                <div class='product_view-img1'>
                  <img src="{{$laptopdetails['img_url']}}" alt="#" class="img-fluid">
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-12'>
                <div class="quantity-content text-right" style="margin-left: 33%; width: 50%; height: 200px;">
                              <div class="col-md-10">
                                <br>
                                <form class="cart" method="post" action="">
                                  <div class="card card-sm">
                                    <div class="card-header" style="font-size: 14px; background: #4F0354; color: white;">
                                      <p>Available: In Stock</p>
                                    </div>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-5">
                                          <h5 style="font-size: 14px;">Price</h5>
                                          <p style="font-size: 14px;">$49.99</p>
                                        </div>
                                        <div class="col-sm-7">
                                          <h5 style="font-size: 14px;">Quantity</h5>
                                          <div class="quantity">
                                            <input step="1" min="1" max="10" name="quantity" value="1" title="Qty" class="input-text qty text" style="font-size: 14px;" size="4" type="number">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
        <div class='row'>
              <div class='col-12'>
                <!-- content for top row goes here -->
                <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
                  <div class="product-heading">
                    <h2>{{$laptopdetails['brand_name']}}</h2>

                    <div class="product-detail-side"> <span><del>15</del></span><span class="new-price">{{$laptopdetails['price']}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content for right side of grid goes here -->
          <div class="detail-content">
                  <p>{{$laptopdetails['description']}}<br>
                    <span class="stock">2 in stock</span> </p>
                    <a class="nav-link scrollto" href="{{route('productcheckout',['id'=> $laptopdetails['id']])}}">
                      <button class="btn btn-primary rounded-pill btn-lg" style="width: 300px; margin-left: 30%; background: #4F0354; color: white;">Buy Now!</button>
                    </a>


            </div>
        </div>
      </div>
    </div>
    <!-- FOOTER -->
</x-productslayout>