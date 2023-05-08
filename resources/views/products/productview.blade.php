<x-productslayout>
    <x-slot name="title">
        Product View
    </x-slot>
  
    <style>
      .btn:hover {
        animation-name: color-change;
        animation-duration: 0.5s;
        animation-fill-mode: forwards;
      }
    
      @keyframes color-change {
        from { background-color: #4F0354; }
        to { background-color: lightgray; }
      }
    </style>
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
                  <img src="{{$productdetails['img_url']}}" alt="#" class="img-fluid">
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
                    <h2>{{$productdetails['brand_name']}}</h2>
                    <div class="product-detail-side"> <span><del>15</del></span><span class="new-price">{{$productdetails['price']}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content for right side of grid goes here -->
          <div class="row">
                <div class="detail-content">
                <p>{{$productdetails['description']}}<br>
                  <span class="stock">2 in stock</span> </p>

                  <div class="col-md-10 text-left">
                    <form action="{{route('addtocart')}}" id="addtocartform" method="post">
                      @csrf
                      <input type="text" value="{{$productdetails['id']}}" hidden name="productid" id="">
                      <input type="text" hidden name="cartitemcategory" value="2" id="cartitemcategory">
                  <button class="border-0" type="submit">
                      <i class="bi bi-cart-plus-fill float-start bi-lg" style="font-size: 25px; color:#4F0354 "></i>
                  </button>
                  </form>
                  </div>
                  
                  <a class="nav-link scrollto" href="{{route('productcheckout',['category' => $category,'id'=> $productdetails['id'],])}}">
                    <button class="btn btn-primary rounded-pill btn-lg" style="width: 300px; margin-left: 30%; background: #4F0354; color: white;">Buy Now!</button>
                  </a>

                </div>

            </div>
        </div>
      </div>
    </div>

    <script>
      window.onload = function() {

        
    const url = window.location.href;
    const slugs = url.split("/"); // split the URL string into an array of slugs
    var inputcategory = document.getElementById('cartitemcategory');

    const category = slugs[slugs.length - 2]; // get the second to the last slug

    console.log(category); // outputs "page"
    
    inputcategory.value = category;
    $('#addtocartform').submit(function(event) {
      event.preventDefault(); // Prevent form submission
      var formData = new FormData(this); // Create an instance of FormData from the form element
      var url = $(this).attr('action'); // Get the form action attribute
      var method = $(this).attr('method'); // Get the form method attribute

      // Send the form data to the server via an AJAX request
      $.ajax({
        url: url,
        type: method,
        data: formData,
        processData: false, // Prevent jQuery from automatically processing the form data
        contentType: false, // Prevent jQuery from automatically setting the content type
        success: function(response) {
          console.log(response);
        },
        error: function(error) {
          console.log(error.responseText);
        }
      });
    });


      }
    </script>
    <!-- FOOTER -->
</x-productslayout>