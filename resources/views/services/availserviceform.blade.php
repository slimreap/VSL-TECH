<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <x-resources.css/>

    <style>
      /* Style the modal */
      .modal {
        display: block;
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
      }

      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 0; /* adjust margin-top */
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        height: 70%;
        max-height: 80%;
        overflow-y: auto;
        }


      /* Style the close button */
      body{
        background: navy;
      }
    </style>

</head>
<body>

<x-slot name="title">
    Avail Service Form
</x-slot>

<!-- The Modal -->
<div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">

        <div class="d-flex align-items-center justify-content-center">
            <img src="{{asset('storage/E-commerce/company_logo.png')}}" style="height:80px; width:80px;" class="img-fluid">
        </div>

        <div class="d-flex align-items-left justify-content-left">
            <h3 style="font-weight:bold; font-size:20px;">Customer Details Form</h3>
        </div>


            <form method = "POST" enctype = "multipart/form-data">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="customer_last_name">Last Name:</label>
                        <input type="text" id="customer_last_name" name="customer_last_name" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="customer_first_name">First Name:</label>
                        <input type="text" id="customer_first_name" name="customer_first_name" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="customer_middle_name">Middle Name:</label>
                        <input type="text" id="customer_middle_name" name="customer_middle_name" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email_address">Email Address:</label>
                        <input type="email" id="email_address" name="email_address" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="contact_number">Contact Number:</label>
                        <input type="number" id="contact_number" name="contact_number" class="form-control">
                    </div>
                </div>

                <div class = "row">
                    <div class="col-md-6 mb-3">
                        <label for="state">State:</label>
                        <input type="text" id="state" name="state" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="postal_code">Postal Code:</label>
                        <input type="number" id="postal_code" name="postal_code" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="service_availed">Service Availed:</label>
                        <input type="text" id="service_availed" name="service_availed" class="form-control">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary rounded-pill mr-2" style = "margin-left:20px;">Submit</button>
                    <button type="button" class="btn btn-secondary rounded-pill" style = "margin-left:20px;">Cancel</button>
                </div>
            </form>
      </div>
    </div>
</body>
</html>