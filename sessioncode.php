<?php

session_start(); // Start the session

// Initialize the session variable for storing cart items
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Example: Adding an item to the cart
if (isset($_POST['add_to_cart'])) {
    $item = $_POST['item']; // This should be the item ID or name
    $_SESSION['cart'][] = $item;
}

// Example: Removing an item from the cart
if (isset($_POST['remove_from_cart'])) {
    $item = $_POST['item'];
    if (($key = array_search($item, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}

// Example: Displaying cart items
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>sample</title>
    <!-- Include Bootstrap and other dependencies -->
</head>

<body>
    <div class="container-fluid">
        <!-- Your HTML and PHP code -->

        <div id="organic_milk" class="tab-pane fade in active">
            <?php
            // Your PHP logic for displaying items goes here
            $image_milk = ['s1.jpg', 's2.jpg', 's3.jpg'];
            $name_milk = ["Organic Cow Milk Pasteurized & Homogenized", "Amrutha A2 Organic Cow Milk Pasteurized", "Organic Cow Milk Pasteurized"];
            $ml_milk = ["500 ml", "500 ml", "500 ml"];
            $desc_milk = ["Pasteurized and homogenized - Ready-to-consume nutrition on the go!",
                "A2-protein rich, ready-to-consume milk.", "No-boiling-required, ready-to-consume milk!"];
            $price_milk = ["₹45.00", "₹43.00", "₹30.00"];
            $length = 3;

            for ($i = 0; $i < $length; $i++) {
                echo '
                <div class="row justify-content-center m-5">
                    <div class="col-md-6 shadow rounded">
                        <div class="row p-3">
                            <div class="col-md-2 mr-4">
                                <img src="img/' . $image_milk[$i] . '" alt="" width="100px;">
                            </div>
                            <div class="col">
                                <h6> ' . $name_milk[$i] . '</h6>
                                <p>' . $ml_milk[$i] . '</p>
                                <p>' . $desc_milk[$i] . '</p>
                                <span>Free <del>' . $price_milk[$i] . '</del> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <form method="post">
                                        <input type="hidden" name="item" value="' . $name_milk[$i] . '">
                                        <button type="submit" name="add_to_cart" class="btn btn-outline-secondary">Add</button>
                                    </form>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>

        <!-- Example of displaying cart items -->
        <div class="row justify-content-center m-5">
            <h3>Items in Cart:</h3>
            <ul>
                <?php
                foreach ($_SESSION['cart'] as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>
