
function updateCartCount() {
    // Get all the quantity inputs
    var quantityInputs = document.querySelectorAll('input[name^="quantity["]');
    
    // Loop through the quantity inputs and add up the values
    let totalCount = quantityInputs;
    quantityInputs.forEach(input => {
      totalCount += parseInt(input.value);
    });
    
    // Update the cart count span tag with the total count
    const cartCountSpan = document.getElementById('cart-count');
    cartCountSpan.textContent = totalCount;
  }
  document.addEventListener('DOMContentLoaded', function() {
    
    updateCartCount();
  });



  window.onload = function() {
    var search = document.getElementById('search');
      var searchform = document.getElementById('formsearch');
      var results = document.querySelectorAll('.result');
      
  
      search.addEventListener('input', function(event) {
        
              event.preventDefault();
              var formData = new FormData(searchform);
              $.ajax({
                  url: $(searchform).attr('action'),
                  method: $(searchform).attr('method'),
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function(response) {
                    
                      var productdata = response.data;
                      console.log(productdata);
                           
                      productdata.forEach(function(item) {
                          console.log(item.brand_name); 
                          var products = document.querySelectorAll('.products');
                          for (var i = 0; i < products.length; i++) {
                            products[i].style.display = 'none';
                          }
                          
                          ``
                          var searchcontainer = `
                          <div class="products">
                          <div class="row">
                   
                              <div class="col-md-3 mb-3" style="margin-top: 30px;">
                                  <div class="card h-100" >
                                      <a href="">
                                          <img class="card-img-top" src="${item.img_url}" alt="">
                                      </a>
                  
                                      <div class="card-body d-flex flex-column justify-content-center">
                                          <h5 class="card-title mb-0 text-center" style="font-weight: bold;">${item.name}</h5>
                                          <p class="card-title mb-0 text-center" style="font-weight: bold;">${item.product_model}<p>
                                          <p class="card-text mb-0 text-center" style="font-weight: bold;">${item.price}<p>
                                      </div>
                                  </div>
                              </div>
                 
                          </div>
                       </div>
                          `;
  
                      $('#searchresult').append(searchcontainer);
  
  
  
                      });       
                  },
                  error: function(xhr, status, error) {
                    console.log(xhr);
  
                  }
              });
  });
  
  
  
  
  };