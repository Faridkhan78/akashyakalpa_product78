<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>success page</title>
</head>

<body>
  <?php
  include 'connection.php';
  $sql = "SELECT u.customer_address,u.customer_city,u.customer_pincode,c.order_date FROM user_address u,customer_order c where u.address_id = c.add_id ORDER BY address_id DESC LIMIT 1;";

  $result = mysqli_query($conn, $sql);
  if ($row = mysqli_fetch_assoc($result)) {
  }
  ?>
  <div class="container shadow rounded">
    <div class="row mt-5 justify-content-center">
      <!-- <img src="img/hero.svg" alt="img" class="w-50"> -->
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6  p-3">
        <!-- <h3 class="text-center"> Your Order && Address Detail</h3> -->
        <h1 class="animate__animated animate__bounce">Successfull Order and Address Details</h1>
        <div class="form-control m-2">
          <h5>Adress   &nbsp; &nbsp;  <?php echo $row['customer_address']; ?> </h5>
        </div>
        <div class="form-control m-2">
          <h5>City &nbsp; &nbsp; <?php echo $row['customer_city']; ?></h5>
        </div>
        <div class="form-control m-2">
          <h5>Pincode &nbsp; &nbsp; <?php echo $row['customer_pincode']; ?> </h5>
        </div>
        <div class="form-control m-2">
          <h5>Order_Date &nbsp; &nbsp; <?php echo $row['order_date']; ?> </h5>
        </div>
      </div>
    </div>
    <div class="row mt-3 justify-content-center">
      <button class="btn btn-success w-50"><a href="index.php" style="text-decoration: none;color: white;"><b>BACK TO
            HOME</b></a></button>
    </div>
  </div>
</body>

</html>


</div>
        <!-- <div class="field border-bottom ">
          <h5>City :- <?php echo $row['customer_city']; ?></h5>
        </div> -->