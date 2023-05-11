<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary" style="background: #141559;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('storage/E-commerce/company_logo.png')}}" style="height: 30%; width:30%;" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('products')}}">Products</a>
        <a class="nav-link" href="{{route('services')}}">Services</a>
      </div>
      <div class="navbar-nav">
        <a href="{{route('trackItem')}}" class="nav-link"><i class="bi bi-geo-alt-fill" style="font-size: 30px;"></i>Track Item</a>
        <a href="{{route('itemviewsummary')}}" class="nav-link">
          <i id="cart-icon" class="bi bi-bag-fill" style="font-size: 30px;"></i>
          <span class="badge bg-danger text-white">{{$count = collect(session('options'))->count()}}</span>
        </a>
      </div>
    </div>
  </div>
</nav>


