<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .gender-btn {
            width: 80px;
            text-align: center;
        }

        .gender-btn img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h5 class="card-title mb-4"><i class="bi bi-telephone"></i> Contact Info</h5>
            <form action="your-action-page.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="+91 - Mobile Number" name="mobile" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                </div>
                <div class="d-flex justify-content-around mb-3">
                    <label class="btn btn-outline-primary gender-btn">
                        <input type="radio" name="gender" value="male" autocomplete="off" required>
                        <img src="path_to_male_icon.png" alt="Male"> Male
                    </label>
                    <label class="btn btn-outline-primary gender-btn">
                        <input type="radio" name="gender" value="female" autocomplete="off" required>
                        <img src="path_to_female_icon.png" alt="Female"> Female
                    </label>
                    <label class="btn btn-outline-primary gender-btn">
                        <input type="radio" name="gender" value="other" autocomplete="off" required>
                        <img src="path_to_other_icon.png" alt="Other"> Other
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Next</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>