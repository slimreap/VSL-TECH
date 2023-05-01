<x-productslayout>
 <x-slot name="title">
    Laptops
 </x-slot>

 {{-- subnavbar --}}
 <div class="h-25 subnavbar">
    <div class="row">

        <div class="col">
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Apple'])}}">Apple</a>
                
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Hp'])}}">HP </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Lenovo'])}}">Lenovo</a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Dell'])}}">Dell</a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Acer'])}}">Acer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Asus'])}}">Asus </a>
            </div>
        </div>

        <div class="col">
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Razer'])}}">Razer</a>
            </div>
            <div class="row text-white fs-3">
                <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'LG'])}}">LG </a>
            </div>
            <div class="row text-white fs-3">
                 <a class="text-white fs-3" href="{{route('productslaptops',['brandname' => 'Samsung'])}}">Samsung</a>
            </div>
        </div>


        <div class="col">
            <div class="row text-white fs-3">
                 <p class="fs-3">Find your needs :</p>
                 <form id="laptopformsearch" method="post" action="{{route('searchlaptop')}}">
                    @csrf
                 <input class="rounded-pill" id="laptopsearch" type="text" 
                 style="padding-right: 20px;
                 background-image: url('{{asset('storage/img/magnifying glass.png')}}');
                 background-repeat: no-repeat;
                 background-position: right center;
                 background-size: 30px 30px; " name="query" id="">
                 </form>
            </div>


        </div>


    </div>
</div>


@foreach ($laptops as $laptop)
    

<div class="row laptops">
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
</div>

@endforeach

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