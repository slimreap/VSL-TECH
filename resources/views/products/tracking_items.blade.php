<x-productslayout>
    <x-slot name="title">
        Item Tracking
    </x-slot>

    <div class="container d-flex justify-content-center" style="margin-top: 10%;">
        <div class="col-md-6">
          <h3 class="font-weight-bold text-center mb-4"style="font-weight: bold; color: #4F0354;">TRACK YOUR ORDER</h3>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="trackNumber" placeholder="Order Number*">
            </div>
            <div class="form-group mt-4">
              <input type="email" class="form-control" id="emailaddress" placeholder="Email*">
            </div>

            <div class="form-group mt-4">
                <button type="submit"class="btn btn-primary rounded-pill px-4 py-2" style="background-color: #4F0354; border-color: #4F0354;">Continue <i class="fas fa-arrow-right ml-2"></i></button>

            </div>
          </form>
        </div>
      </div>
      
      

    
</x-productslayout>