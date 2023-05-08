
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