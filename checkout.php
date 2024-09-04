<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="text-center ">
                <img src="logo (1).svg" alt="" width="100px;">
            </div>
        </div>

        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <form class="row g-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control mt-4" placeholder="Address" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" id="validationDefault02" placeholder="Flat/Villa Name" required>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control mt-4" placeholder="Flat/Villa No" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="Floor No" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="Block/Tower" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="PinCode" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="City" required>
                    </div>
                    <!-- <div class="col-12 mt-4">
                        <button class="btn btn-primary" type="submit">Update Address</button>
                    </div> -->
            </div>
            <div class="col-md-6">


                <div class="col-md-6">
                    <h4>Summary</h4>
                    <?php 
                    session_start();
                    //  Php code get data using session
                    ?>

                </div>

                <div class="col-md-6">
                    <h4>Delivery Slot</h4>
                    <span>Due to high demand, delivery dates are going  quickly. Reserve yours today!</span>



                </div>

                <div class="col-12 mt-4">
                    <button class="btn btn-primary" type="submit">Update Address</button>
                </div>
            </div>
            <!-- <div class="col-12 mt-4">
                <button class="btn btn-primary" type="submit">Update Address</button>
            </div> -->
            </form>
            <!-- <div class="col-md-6">
               <h2>Summary</h2>
            </div> -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->

</body>

</html>