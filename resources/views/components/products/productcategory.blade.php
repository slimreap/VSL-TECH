<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="{{route('productspccomponents')}}">PC Components</a>
      <!-- dropdown for laptop -->
      <div class="dropdown"> 
        <a class="nav-link dropdown-toggle" href="#" role="button" id="laptopDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laptops
        </a>
        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarScrollingDropdown">
          <li><a class="a txt-dark dropdown-item font-reg" style="font-size: 18px;" href="">Apple</a></li>
        </ul>
      </div>

      <a class="nav-link" href="{{route('productsdesktoppackages')}}">Desktop Packages</a>
      <a class="nav-link" href="{{route('productspheriperals')}}">Peripherals and Accessories</a>
    </div>
  </div>
</div>
</nav>
