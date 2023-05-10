<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>
 <style>
      .card {
            transition: transform 0.2s ease-in-out;
            height: 100%;
            margin-top: 30px;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100%;
        }
</style>

<div class="container">
    <div class="row">
      @foreach ($laptops as $laptop)
      <div class="col-md-3 mb-3">
        <div class="card h-100" style="margin-top: 30px;">
          <a href="{{route('productform')}}">
            <img class="card-img-top" src="{{$laptop['img_url']}}" alt="">
          </a>
          <div class="card-body d-flex flex-column justify-content-center">
            <h5 class="card-title mb-0 text-center" style="font-weight: bold;">{{$laptop['brand_name']}}</h5>
            <p class="card-text mb-0 text-center" style="font-weight: bold;">{{$laptop['product_model']}}</p>
            <p class="card-text text-center"><span style="font-weight: bold;">Price: </span> ₱ {{$laptop['price']}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  


<div id="searchresult">

</div>

<script>
    var search = document.getElementById('laptopsearch');
    var searchform = document.getElementById('laptopformsearch');
    var laptops = document.querySelectorAll('.laptops');
    

    search.addEventListener('input', function(event) {
            event.preventDefault();
            var formData = new FormData(searchform);
            $.ajax({
                url: $(searchform).attr('action'),
                method: $(searchform).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var laptopdata = response.data;

                         
                    laptopdata.forEach(function(item) {
                        console.log(item.brand_name); 
                        var laptops = document.querySelectorAll('.laptops');
                        for (var i = 0; i < laptops.length; i++) {
                        laptops[i].style.display = 'none';
                        }
                        
                        var laptopcontainer = `
                        <div class="row laptops">
                            <div class="col -translate-y-6 transition transform delay-150 duration-300 translate-y-6">
                                <a href="/products/laptops/details/${item.id}">
                                    <img class="w-100" src="${item.img_url}" alt="">
                                </a>
                                <div class="">
                                    ${item.brand_name}
                                </div>
                                <div class="">
                                    ${item.description}
                                </div>
                                <div class="">
                                    ${item.price}
                                </div>
                            </div>
                        </div>
                        `;

                    $('#searchresult').append(laptopcontainer);



                    });       
                },
                error: function(xhr, status, error) {
                console.error(error);
                }
            });
});



   function performsearch(query) {
    $.ajax({
            url: "/products/laptops/search",
            method:"get",
            data: {
                query: query
            },
            success: function(data) {
                console.log(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
   };


</script>
</x-productslayout>