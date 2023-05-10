<x-productslayout>
  <x-slot name="title">
      Product View
  </x-slot>

  <style>
    .popup-container {
display: none;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0,0,0,0.5);
z-index: 9999;
}

.popup {
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 20px;
border-radius: 10px;
box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}

.checkmark {
width: 80px;
height: 80px;
border-radius: 50%;
display: flex;
justify-content: center;
align-items: center;
border: 3px solid #4F0354;
position: relative;
margin-bottom: 20px;
box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
}



.popup p {
font-size: 18px;
color: #4F0354;
text-align: center;
margin: 0;
}

.show-popup {
display: flex;
}

  </style>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- content for left side of grid goes here -->
        <div class='product_view-img1'>
          <img style="margin-top: 30px;" src="{{$productdetails['img_url']}}" alt="#" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6">
        <!-- content for right side of grid goes here -->
        <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
          <div class="product-heading" style = "margin-top: 30px;">
            <h2>{{$productdetails['brand_name']}}</h2>
            <div class="product-detail-side">
              <span style = "font-weight: bold;">Price:<span>
              <span class="new-price">₱{{$productdetails['price']}}</span>
          </div>

          <!-- Product Detail -->
          <div class="detail-content" style="width: 220%; text-align: justify;">
            <p style = "align-text: justify;">{{$productdetails['description']}}<p>
              <div style="display: flex; align-items: center;">
                <span class="stock" style="margin-right: 10px;" >
                  2 in stock <!-- Make this stock dynamic-->
                </span>

              <!-- Button for adding item to cart -->
                <button class="border-0" id="btnaddtocart" type="submit" onclick="addToBag()">
                  <i class="bi bi-cart-plus-fill float-start bi-lg" style="font-size: 18px; color:#4F0354 "></i>
                </button>
              </div>

              <div class="popup-container">
                <div class="popup">
                  <div class="checkmark">
                    <i class="bi bi-check-circle" style="font-size: 32px;"></i>
                  </div>
                  <p>Item added to the bag</p>
                </div>
              </div>
        
              <div class="col-md-10 text-left" style="margin-bottom: 30px;">
                <form action="{{route('addtocart')}}" id="addtocartform" method="post">
                  @csrf
                  <input type="text" value="{{$productdetails['id']}}" hidden name="productid" id="">
                  <input type="text" hidden name="cartitemcategory" value="2" id="cartitemcategory">
                </form>
              </div>
              
              <!-- Button for action -->
              <a class="nav-link scrollto" href="{{route('productcheckout',['category' => $category,'id'=> $productdetails['id'],])}}">
                <button class="btn  rounded-pill btn-lg" style="width: 300px; margin-left: 30%; background: #4F0354; color: white;">Buy Now!</button>
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

  $('#btnaddtocart').click(function(){
    $('#addtocartform').submit();
  });
  
  $('#addtocartform').on('submit',function(event) {
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

  
    // add to bag js function
    function addToBag() {
      // Code to add item to bag goes here
      
      // Show popup message
      var popupContainer = document.querySelector('.popup-container');
      popupContainer.classList.add('show-popup');
      
      // Hide popup message after 2 seconds
      setTimeout(function() {
        popupContainer.classList.remove('show-popup');
      }, 1000);
    }

</script>
  <!-- FOOTER -->
</x-productslayout>