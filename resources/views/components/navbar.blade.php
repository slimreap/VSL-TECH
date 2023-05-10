<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #141559;">
    <h1 class="logo"><img src="{{asset('storage/E-commerce/company_logo.png')}}" style="margin-left: 20%; height: 30%; width:30%;" class="logo"></h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-col justify-content" id="navbarNavAltMarkup" style="margin-right: 4%;">
      <div class="navbar-nav col" style="height:26px;width:26px;">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}" style="color: white; "><span style="display: flex; align-items: center;">
          <i class="bi bi-house-fill" style="font-size: 30px; margin-right: 10px;"></i>
          <span style="margin-right: 10px;">Home</span>
        </span>
        
        </a>
        <a class="nav-link" href="{{route('products')}}" style="color: white;">
          <span style="display: flex; align-items: center;">
            <i class="bi bi-bag-fill" style="font-size: 30px; margin-right: 10px;"></i>
            <span style="margin-right: 10px;">Product</span>
          </span>
        </a>
        <a class="nav-link" href="{{route('services')}}" style="color: white;">
          <span style="display: flex; align-items: center;">
            <img src="{{asset('storage/E-commerce/repair-tools.gif')}}" style="height: 30px; width: 30px; margin-right: 10px;border-radius: 30px;"/>
            <span style="margin-right: 10px;">Services</span>
          </span>
        </a>
      </div>
      <div class="collapse navbar-collapse col justify-content-end">
        <!-- For tracking item -->
        <a href="{{route('trackItem')}}">
          <i class="bi bi-geo-alt-fill" style="font-size: 30px; color: white;">Track Item</i>
        </a>
        <!-- Item bag -->
        <a id="cart-btn" class="nav-link" href="{{route('itemviewsummary')}}" style="color: white;">
          <span style="display: flex; align-items: center;">
            <i id="cart-icon" class="bi bi-bag-fill" style="font-size: 30px; color: white;"></i>

           <!-- <span id="cart-count" class="bg-danger text-white rounded-pill" style="font-size: 12px; padding: 2px 5px; margin-left: -10px;">0</span> -->
          </span>
        </a>
      </div>
    </div>
  </div>
</nav>

<script src="{{asset('js/addCart.js')}}"></script>

