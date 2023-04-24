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

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo" ><a href="index.html"><img src="{{asset('storage/img/VSL-LOGO.png')}}" class="logo"></a></h1> 
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
          <li><a class="nav-link scrollto " href="{{route('products')}}">Products</a></li>  <!-- ======= shop another html ======= -->
          <li><a class="nav-link scrollto" href="{{route('services')}}">Service</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>