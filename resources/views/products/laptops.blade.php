<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>

 {{-- subnavbar --}}
 <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                @foreach ($laptops as $laptop)
                <div class="col-md-3">
                    <a href="{{route('productform',['id' => $laptop['id']])}}">
                        <img class="w-100" src="{{$laptop['img_url']}}" alt="">
                    </a>
                    <div class="">
                        {{$laptop['brand_name']}}
                    </div>
                    <div class="">
                        {{$laptop['description']}}
                    </div>
                    <div class="">
                        {{$laptop['price']}}
                    </div>
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