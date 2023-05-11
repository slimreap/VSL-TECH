<x-productslayout>

    <x-slot name="title">
        Products
    </x-slot>

    <!-- image flex -->
    <style>
        .slideshow-container {
        position: relative;
        height: 500px; /* Change to your desired height */
        }

        .slideshow-container img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
        display: none;
        }

        .slideshow-container img:first-child {
        display: block;
        }
    </style>
    <div class="slideshow-container">
        <img src="{{asset('storage/E-commerce/1920-x-700-Intel-13th-gen-D21T.png')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/header-banner-960.jpg')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/asus_amd_mystery_gift_motherboards.jpg')}}" class="w-100" alt="Banner Ad">
        <img src="{{asset('storage/E-commerce/Promotion.jpg')}}" class="w-100" alt="Banner Ad">
    </div>
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("slideshow-container")[0].getElementsByTagName("img");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          setTimeout(showSlides, 2000); /* Change 5000 to your desired interval in milliseconds */
        }
        </script>

<div id="searchresult">

</div>
</x-productslayout>