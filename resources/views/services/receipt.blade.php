<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <x-resources.css />
    
    <style>
      .split-background {
        height: 100vh;
        background: linear-gradient(to right, navy 60%, purple 40%);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .box {
        width: 30%;
        height: 500px;
        background-color: white;
        border: 1px solid black;
       
      }
      .box-left{
        width: 40%;
      }
      .box-right {
        margin-left: 20%;
      }
      label{
        font-size: 20px;
      }
      .labels {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        
    }
    .labels label {
        font-size: 12px;
    }

    </style>
  </head>
  <body>
  <x-slot name="title">
    Avail Service Form
  </x-slot>
  <div class="split-background">
      <div class="box box-left">
        <!-- Add your content here -->
        <h3 style="margin-left: 20px; margin-top: 20px;">Customer Detail Summary<h3>
        
        <form>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="customer_name">Customer Name:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="customer_name" name="customer_name" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="email_address">Email Address:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="email_address" name="email_address" class="form-control"/>
                    </div>
                                    
                    <div class="col-md-4 mb-3">
                        <label for="contact_number">Contact Number:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="contact_number" name="contact_number" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="address">Address:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="address" name="address" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="brgy">Barangay:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="brgy" name="brgy" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="state">State:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="state" name="state" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="city">City:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="city" name="city" class="form-control"/>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="postal_code">Postal Code:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                        <input type="text" id="postal_code" name="postal_code" class="form-control"/>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="box box-right">
        <!-- Add your content here -->
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{asset('storage/E-commerce/company_logo.png')}}" style="height:80px; width:80px; margin-top: 10px;" class="img-fluid">
        </div>

        <div class="labels">
            <label>Service Availed</label>
            <label>Price</label>
            <label>Discount</label>
            <label>Total</label>
        </div>
            <div class="d-flex justify-content-end">
                <button type="submit" id= "confirmBtn"class="btn btn-primary rounded-pill mr-2" style = "margin-left:20px;">Submit</button>
                <button type="button" class="btn btn-secondary rounded-pill" style = "margin-left:20px;">Cancel</button>
            </div>
      </div>
    </div>

    <!-- Confirmation Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <p>
            <p>----------------------------------------------------------------------------</p>
                Thank you for availing our services. We will Contact you through you gmail,
                this may take 3-4 days to have a reply.

            <p>----------------------------------------------------------------------------</p>
            </p>
        </div>
    </div>

    
       <script>
    // Get the modal
    const modal = document.getElementById("modal");

    // Get the button that opens the modal
    const btn = document.getElementById("confirmBtn");

    // When the user clicks the button, open the modal
    btn.addEventListener('click', function() {
        modal.style.display = "block";
    });
</script>
  </body>
</html>
