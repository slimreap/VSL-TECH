<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>
<style>
    .card:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease-in-out;
}

.card:hover h5,
.card:hover p {
  color: #4F0354;
}


</style>
 {{-- subnavbar --}}
 <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($laptops as $laptop)
                <div class="col-md-3" style = "margin-top: 20px; margin-bottom: 40px;">
                    <a href="{{route('productform',['id' => $laptop['id']])}}">
                    <div class="card h-100">
                        
                            <div class="aspect-ratio-container aspect-ratio-1-1 align-items-center">
                                <img class="aspect-ratio-object img-fluid" style = "margin-top: 20px;"src="{{$laptop['img_url']}}" alt="">
                            </div>
                        
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <h5 class="card-title text-center" style="font-weight: bold; margin-top: 10px">{{$laptop['prod_name']}}</h5>
                            <p class="card-text text-center" style="margin-bottom: 0px;">₱{{$laptop['price']}}</p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
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