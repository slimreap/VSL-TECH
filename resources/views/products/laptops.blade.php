<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>

 {{-- subnavbar --}}
 
<div class="container">
    <div class="row">
        <div class="col-6">
            @foreach ($laptops as $laptop)
            <div class="col">
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


<div class="row" id="searchresult">

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
                    // for (var i = 0; i < laptops.length; i++) {
                    // laptops[i].style.display = "none";
                    // }
                    // var laptop = `
                    // <div class="row">
                    //     <div class="col">
                    //         <a href="{{route('productform',['id' => $laptop['id']])}}">
                    //             <img class="w-100" src="{{$laptop['img_url']}}" alt="">
                    //         </a>
                    //         <div class="">
                    //             {{$laptop['brand_name']}}
                    //         </div>
                    //         <div class="">
                    //             {{$laptop['description']}}
                    //         </div>
                    //         <div class="">
                    //             {{$laptop['price']}}
                    //         </div>
                    //     </div>
                    // </div>
                    // `;       
                    console.log(response.data[0].brand_name);         
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