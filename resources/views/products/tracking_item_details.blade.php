<x-productslayout>
    <x-slot name="title">
        Tracked Item Details
    </x-slot>

    <div class="container">
      <h1 class="text-center mt-4" style="font-weight: bold; color:#4F0354; margin-bottom: 30px;">CUSTOMER'S ITEM STATUS</h1>
      <table class="table">
        <thead class="bg-light" style="border-bottom: 2px solid black;">
          <tr class="border-bottom" >
            <th scope="col" class="text-center font-weight-bold">TRACKING NO.</th>
            <th scope="col" class="text-center font-weight-bold">DATE</th>
            <th scope="col" class="text-center font-weight-bold">DELIVERY STATUS</th>
          </tr>
        </thead>
        
        
        <tbody>
          @foreach ($trackingproduct as $product)
          <tr>
            <td class="text-center">{{$product->tracking_number}}</td>
            <td class="text-center">{{$product->delivery_date}}</td>
            <td class="text-center">{{$product->delivery_status}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    
    
</x-productslayout>