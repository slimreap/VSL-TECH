<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  {{-- css and fonts --}}
  <x-resources.css/>
  <x-resources.js/>

</head>

<body>
    <x-navbar/>
    <x-products.productcategory/>

    {{$slot}}
    
<x-footer/>
</body>

</html>