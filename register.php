<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout Akshyakalpa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            /* background: #f7f7f7; */
            background: "white";
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
            border-radius: 40px;
            margin: 4px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 40px;
            border-radius: 10px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<?php

include 'connection.php';



if(isset($_POST['submit'])) {
    // print_r($_POST);
    // exit;

    $name = $_POST['name'];
    $phno = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


    //   $sql = "select mobile from register where mobile='$phno'";
    //   $result = mysqli_query($conn, $sql);

    //   if (mysqli_num_rows($result) > 0) {
    //     // header("location:order.php");
    //   } else {
    $sql = "insert into register (name,mobile,email,gender) values('$name','$phno','$email','$gender')";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        echo "inserted";
    } else {
        echo "not Inserted";
    }
    // header("location:register.php");
    //   }
}
?> 
    <div class="login-form">
        <form action="" method="post">
            <!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
            <h1 class="text-center fa fa-phone aria-hidden='true'">&nbsp;&nbsp;<span style="font-size: 1.5rem;"><b>Contact Info</b></span></h1>
            <div class="form-group mt-4">
                <input type="text" class="form-control" name="name" placeholder="Name" required="required">
            </div>
            <div class="form-group">
                <input type="tel" maxlength="10" minlength="10" name="mobile" class="form-control" placeholder="+91 - Mobile Number" onkeypress="return isNumberKey(event)" autocomplete="off" required="required">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
            </div>
            <!-- <div class="form-group">
                <label for="">Male</label>
                <input type="radio" name="gender" id="male" value="Male" required="required">
                <label for="">Female</label>
                <input type="radio" name="gender" id="female" value="Femal" required="required">
                <label for="">Other</label>
                <input type="radio" name="gender" id="female" value="Other" required="required">
            </div> -->
            <div class="d-flex justify-content-around mb-3 p-2">
                <label class="btn btn-outline-primary gender-btn m-2">
                    <img src="man.png" width="20px;" alt="Male">
                    <input type="radio" name="gender" value="male" autocomplete="off" required>
                    Male
                </label>
                <label class="btn btn-outline-primary gender-btn m-2">
                    <img src="woman.png" width="20px;" alt="Female">
                    <input type="radio" name="gender" value="female" autocomplete="off" required>
                    Female
                </label>
                <label class="btn btn-outline-primary gender-btn m-2">
                    <img src="genders.png" width="20px;" alt="Other">
                    <input type="radio" name="gender" value="other" autocomplete="off" required>
                    Other
                </label>
            </div>
            <div class="form-group">
                <input type="submit" value="Next" name="submit" class="btn btn-primary">
            </div>
        </form>


    </div>
</body>

</html>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

 