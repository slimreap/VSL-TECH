{{-- <div class="h-25 subnavbar">
    <div class="row">
        <div class="col text-white fs-3">
            PC Components:
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Chasis Fan</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">CPU cooling </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Graphics Card</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Hard Disk</a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Memory</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Motherboard </a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">PC Case</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="">Power Supply </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Processor</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="">Processor Tray</a>
            </div>
            <div class="row text-white fs-3">
                <a href="" class="text-white fs-3">Solid State Drive </a>
            </div>

        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <p class="fs-3">Find your needs :</p>
                 <input class="rounded-pill" type="text" 
                 style="padding-right: 20px;
                 background-image: url('{{asset('storage/img/magnifying glass.png')}}');
                 background-repeat: no-repeat;
                 background-position: right center;
                 background-size: 30px 30px; " name="" id="">
            </div>


        </div>


    </div>
</div> --}}
<div class="container-shop">
    <h2>COMPUTER SETS:</h2>
  <nav class="navbar1-columns">
    <ul>
      <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'Chassis Fan'])}}">Chassis Fan</a></li>  
      <li><a class="nav-link scrollto" href="{{route('productsindividualpccomponent',['component' => 'CPU-Cooling'])}}">CPU Cooling</a></li>
      <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'Graphics Card'])}}">Graphics Card</a></li>
    </ul>
  </nav>
  <nav class="navbar1-columns">
    <ul>
        <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'Hard Disk'])}}">Hard Disk</a></li>  
        <li><a class="nav-link scrollto" href="{{route('productsindividualpccomponent',['component' => 'Memory'])}}">Memory</a></li>
        <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'Motherboard'])}}">Motherboard</a></li>
    </ul>
  </nav>
  <nav class="navbar1-columns">
    <ul>
        <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'PC Case'])}}">PC Case</a></li>  
        <li><a class="nav-link scrollto" href="{{route('productsindividualpccomponent',['component' => 'Power Supply'])}}">Power Supply</a></li>
        <li><a class="nav-link scrollto " href="#nine">Processor</a></li>
    </ul>
  </nav>
  <nav class="navbar1-columns">
    <ul>
        <li><a class="nav-link scrollto " href="{{route('productsindividualpccomponent',['component' => 'Processor Tray'])}}">Processor Tray</a></li>  
        <li><a class="nav-link scrollto" href="{{route('productsindividualpccomponent',['component' => 'Solid State Drive'])}}">Solid State Drive</a></li>
    </ul>
  </nav>

  <div class="col">
    <div class="row text-white fs-3 w-25">
         <p class="fs-3">Find your needs :</p>
         <input class="rounded-pill" type="text" 
         style="padding-right: 20px;
         background-image: url('{{asset('storage/img/magnifying glass.png')}}');
         background-repeat: no-repeat;
         background-position: right center;
         background-size: 30px 30px; " name="" id="">
    </div>


</div>

</div>
