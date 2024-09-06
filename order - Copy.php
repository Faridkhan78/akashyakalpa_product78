<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the selected gender in the session

    $storesession = array(
        'image' => $_POST['image'],
        'mlmilk' => $_POST['mlmilk'],
        'descmilk' => $_POST['descmilk'],
        'pricemilk' => $_POST['pricemilk'],
    );
    $_SESSION['order'] = $storesession;
    // print_r($_SESSION['order']);
     
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>sample</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center p-5 " style="background-color:#e3f8f3;">
            <div class="col-md-8 text-center ">
                <img src="logo (1).svg" alt="" width="100px;">
                <h5 class="mt-5">Unlock your gift!</h5>
                <p>(You can choose Milk, Curd and various other products)<br>
                    Gift applicable only for 1<sup>st</sup> time users.</p>
            </div>
        </div>
        <ul class="nav nav-tabs justify-content-center">
            <li class="active"><a data-toggle="tab" href="#organic_milk">Organic Milk</a></li>&nbsp;&nbsp;
            <li><a data-toggle="tab" href="#organic_products">Other organic products</a></li>
        </ul>
        <div class="tab-content active">
            <div id="organic_milk" class="tab-pane fade in active">

                <?php
                $image_milk = ['s1.jpg', 's2.jpg', 's3.jpg'];
                $name_milk = ["Organic Cow Milk Pasteurized & Homogenized", "Amrutha A2 Organic Cow Milk Pasteurized", "Organic Cow Milk Pasteurized"];
                $ml_milk = ["500 ml", "500 ml", "500 ml"];
                $desc_milk = [
                    "Pasteurized and homogenized - Ready-to-consume nutrition on the go!",
                    "A2-protein rich, ready-to-consume milk.",
                    "No-boiling-required, ready-to-consume milk!"
                ];
                $price_milk = ["₹45.00", "₹43.00", "₹30.00"];
                $length = count($image_milk);

                for ($i = 0; $i < $length; $i++) {
                    echo '
                    <form method="post" class="milk-form">
                   <div class="row justify-content-center m-5">
                    <div class="col-md-6 shadow rounded">
                        <div class="row p-3">
                            <div class="col-md-2 mr-4">
                                <img src="img/' . $image_milk[$i] . '" alt="" width="100px;">
                                <input type="hidden" name="image" value="' . $image_milk[$i] . '">
                            </div>
                            <div class="col">
                                <h6>' . $name_milk[$i] . '</h6>
                                <input type="hidden" name="milk" value="' . $name_milk[$i] . '">
                                <p>' . $ml_milk[$i] . '</p>
                                <input type="hidden" name="mlmilk" value="' . $ml_milk[$i] . '">
                                <p>' . $desc_milk[$i] . '</p>
                                <input type="hidden" name="descmilk" value="' . $desc_milk[$i] . '">
                                <span>Free <del>' . $price_milk[$i] . '</del> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="hidden" name="pricemilk" value="' . $price_milk[$i] . '">
                                   
                                 <div class="item">
                                    <button type="button" class="minus-btn btn btn-outline-secondary" style="display:none;">-</button>
                                    <button type="button" id="milk" class="count btn btn-outline-secondary">Add</button>
                                    <button type="button" class="plus-btn btn btn-outline-secondary" style="display:none;">+</button>
                                </div>
                                 </span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                   ';
                }

                ?>
            
            </div>
        </div>
        <!-- <div class="tab-content active">
            <div id="organic_products" class="tab-pane">

                <?php
                $image_milk = ['s4.jpg', 's5.jpg', 's6.jpg'];
                $name_milk = ["Organic Cow Milk Pasteurized & Homogenized", "Amrutha A2 Organic Cow Milk Pasteurized", "Organic Cow Milk Pasteurized"];
                $ml_milk = ["500 ml", "500 ml", "500 ml"];
                $desc_milk = [
                    "Pasteurized and homogenized - Ready-to-consume nutrition on the go!",
                    "A2-protein rich, ready-to-consume milk.",
                    "No-boiling-required, ready-to-consume milk!"
                ];
                $price_milk = ["₹45.00", "₹43.00", "₹30.00"];
                $length = count($image_milk);

                for ($i = 0; $i < $length; $i++) {
                    echo '
                    <form method="post" class="milk-form">
                   <div class="row justify-content-center m-5">
                    <div class="col-md-6 shadow rounded">
                        <div class="row p-3">
                            <div class="col-md-2 mr-4">
                                <img src="img/' . $image_milk[$i] . '" alt="" width="100px;">
                                <input type="hidden" name="image" value="' . $image_milk[$i] . '">
                            </div>
                            <div class="col">
                                <h6>' . $name_milk[$i] . '</h6>
                                <input type="hidden" name="milk" value="' . $name_milk[$i] . '">
                                <p>' . $ml_milk[$i] . '</p>
                                <input type="hidden" name="mlmilk" value="' . $ml_milk[$i] . '">
                                <p>' . $desc_milk[$i] . '</p>
                                <input type="hidden" name="descmilk" value="' . $desc_milk[$i] . '">
                                <span>Free <del>' . $price_milk[$i] . '</del> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="hidden" name="pricemilk" value="' . $price_milk[$i] . '">
                                   
                                 <div class="item">
                                    <button type="button" class="minus-btn btn btn-outline-secondary" style="display:none;">-</button>
                                    <button type="button" id="milk" class="count btn btn-outline-secondary">Add</button>
                                    <button type="button" class="plus-btn btn btn-outline-secondary" style="display:none;">+</button>
                                </div>
                                 </span>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                   ';
                }

                ?>
            
            </div>
        </div> -->
        <div class="row justify-content-center m-5 d-5">
            <h2 class="my-0 w-50">
                <a href="register.php" class="btn btn-primary text-white rounded w-100 d-flex align-items-center justify-content-center">0 | item|Free Continue</a>
            </h2>
        </div>
    </div>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    // Select all items
    const items = document.querySelectorAll('.item');
    const forms = document.querySelectorAll('.milk-form');
    const itemCounterElement = document.querySelector('.btn-primary'); // Select the button with the "0 | item | Free Continue" text

    let totalItems = 0; // Keep track of total items added

    // Prevent form submission
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
        });
    });

    // Function to show the minus and plus buttons and hide the "Add" label for the clicked item
    function showButtons(item) {
        const minusButton = item.querySelector('.minus-btn');
        const plusButton = item.querySelector('.plus-btn');
        const countLabel = item.querySelector('.count');

        // Hide all buttons and labels initially
        items.forEach(i => {
            i.querySelector('.minus-btn').style.display = 'none';
            i.querySelector('.plus-btn').style.display = 'none';
            i.querySelector('.count').textContent = 'Add';
        });

        // Show buttons for the clicked item
        countLabel.textContent = 1; // Reset count to 1 when showing buttons
        minusButton.style.display = 'inline-block';
        plusButton.style.display = 'inline-block';

        totalItems += 1; // Increment total items
        updateItemCounter(); // Update the "0 | item | Free Continue" count
    }

    // Function to hide the minus and plus buttons and show the "Add" label
    function hideButtons(item) {
        const minusButton = item.querySelector('.minus-btn');
        const plusButton = item.querySelector('.plus-btn');
        const countLabel = item.querySelector('.count');

        minusButton.style.display = 'none';
        plusButton.style.display = 'none';
        countLabel.textContent = 'Add';
    }

    // Update the "0 | item | Free Continue" count
    function updateItemCounter() {
        itemCounterElement.textContent = `${totalItems} | item${totalItems > 1 ? 's' : ''} | Free Continue`;
    }

    // Assign event listeners to each item
    items.forEach(item => {
        const countLabel = item.querySelector('.count');
        const minusButton = item.querySelector('.minus-btn');

        countLabel.addEventListener('click', () => showButtons(item));
        minusButton.addEventListener('click', () => hideButtons(item));
    });
    // Handle counter increment/decrement

    items.forEach(item => {
        const minusBtn = item.querySelector('.minus-btn');
        const plusBtn = item.querySelector('.plus-btn');
        const countLabel = item.querySelector('.count');

        let count = 1;

        minusBtn.addEventListener('click', () => {
            if (count > 1) {
                count--;
                countLabel.textContent = count;
                totalItems -= 1; // Decrement total items
                updateItemCounter(); // Update the "0 | item | Free Continue" count
            } else {
                hideButtons(item);
                totalItems -= 1; // Decrement total items
                updateItemCounter(); // Update the "0 | item | Free Continue" count
            }
        });

        plusBtn.addEventListener('click', () => {
            count++;
            countLabel.textContent = count;
            totalItems += 1; // Increment total items
            updateItemCounter(); // Update the "0 | item | Free Continue" count
        });
    });
});

</script>

