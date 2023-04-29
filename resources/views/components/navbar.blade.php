{{-- <header id="header" class="">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo" ><a href="{{route('home')}}"><img src="{{asset('storage/img/VSL-LOGO.png')}}" class="logo"></a></h1> 
      
      <nav id="navbar" class="navbar">
        <div x-data="{ isActive: false }" x-init="$el.addEventListener('click', () => { isActive = true; $nextTick(() => $el.classList.add('active')); })">
          <ul>
          <li><a class="nav-link scrollto" @click="init($data)" :class="$store.isActive && 'active'" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto" :class="{ 'active': isActive }" href="{{route('products')}}">Products</a></li>  <!-- ======= shop another html ======= -->
          <li><a class="nav-link scrollto" href="{{route('services')}}">Services</a></li>
        </ul>
      </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <script>
    function init(data) {
      window.onload = function() {
        // Set isActive to true after 3 seconds
        setTimeout(function() {
          data.isActive = true;
        }, 3000);
      };
    };

    function init(el) {
      window.onload = function() {
        // Add 'active' class to the element
        el.classList.add('active');
      };
    }
  </script> --}}

  {{-- <header id="header" class="fixed-top navbar">
    <h1 class="logo" ><a href="index.html"><img src="{{asset('storage/img/VSL-LOGO.png')}}" class="logo"></a></h1> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container d-flex align-items-center justify-content-between">
      
      <nav id="navbar" class="collapse navbar" id="navbarNav">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto " href="{{route('products')}}">Products</a></li>  <!-- ======= shop another html ======= -->
          <li><a class="nav-link scrollto" href="{{route('services')}}">Service</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header> --}}

  <nav id="header" class="navbar navbar-expand-lg bg-blue">
    <div class="container-fluid">
      <h1 class="logo" ><a href="index.html"><img src="{{asset('storage/img/VSL-LOGO.png')}}" class="logo"></a></h1> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link scrollto active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrollto " href="{{route('products')}}">Products</a>  <!-- ======= shop another html ======= -->
          </li>
          <li class="nav-item">
            <a class="nav-link scrollto" href="{{route('services')}}">Service</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>