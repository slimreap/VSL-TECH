<style>
  .dropdown-menu.hide {
  display: none;
}

</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #4F0354;">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="PcComponentssDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PC Components
        </a>
        <ul class="dropdown-menu hide" aria-labelledby="laptopDropdown">
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Chassis Fan'])}}">Chassis Fan</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'CPU-Cooling'])}}">CPU Cooling</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Graphics Card'])}}">Graphics card</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Hard Disk'])}}">Hard Disk</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Memory'])}}">Memory</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Motherboard'])}}">Motherboard</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'PC Case'])}}">PC Case</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Power Supply'])}}">Power Supply</a></li>
          <li><a class="dropdown-item" href="{{route('productspccomponents',['component' => 'Solid State Drive'])}}">SSD</a></li>
        </ul>
      </div>
        <!-- dropdown for laptop -->
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="" role="button" id="laptopDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laptops
        </a>

        <ul class="dropdown-menu hide" aria-labelledby="laptopDropdown">
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Apple'])}}">Apple</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Dell'])}}">Dell</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Hp'])}}">HP</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Lenovo'])}}">Lenovo</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Acer'])}}">Acer</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Asus'])}}">Asus</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Razer'])}}">Razer</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'LG'])}}">LG</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Samsung'])}}">Samsung</a></li>
        </ul>
      </div>

      <!-- dropdown for desktop Packages -->
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="DeskstopPackagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Desktop Packages
        </a>

        <ul class="dropdown-menu hide" aria-labelledby="DeskstopPackagesDropdown">
          <li><a class="dropdown-item" href="{{route('desktoppackages', ['setname'=>'Starter Pack'])}}">Starter Pack</a></li>
          <li><a class="dropdown-item" href="{{route('desktoppackages', ['setname'=>'Gaming Pack'])}}">Gaming Pack</a></li>
          <li><a class="dropdown-item" href="{{route('desktoppackages', ['setname'=>'Streamer Pack'])}}">Streamer Pack</a></li>
        </ul>
      </div>

      <!-- dropdown for peripherals and accessories -->
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="DeskstopPackagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Peripherals and Accessories
        </a>

        <ul class="dropdown-menu hide" aria-labelledby="DeskstopPackagesDropdown">
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Cables'])}}">Cables</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Earphone'])}}">Earphone</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Mouse Pad'])}}">Mouse Pad</a></li>
          <li><a class="dropdown-item" href="{{route('productslaptops',['brandname' => 'Power Bank'])}}">Power Bank</a></li>
        </ul>
      </div>

      <!-- search bar-->
    </div>
  </div>
  <div class="container-fluid d-flex justify-content-end">
    <form class="d-flex" id="formsearch" action="{{route('search')}}" method="post">
      @csrf
      <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</nav>

<script>
function handleDropdown() {
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
  let activeMenu = null;
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();
      const dropdownMenu = this.nextElementSibling;
      if (activeMenu !== dropdownMenu) {
        if (activeMenu) {
          activeMenu.classList.remove('show');
          activeMenu.classList.add('hide');
        }
        dropdownMenu.classList.remove('hide');
        dropdownMenu.classList.add('show');
        activeMenu = dropdownMenu;
      } else {
        dropdownMenu.classList.remove('show');
        dropdownMenu.classList.add('hide');
        activeMenu = null;
      }
    });
  });
}
// Call the function to initialize the dropdowns
handleDropdown();




</script>