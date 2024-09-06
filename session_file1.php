<form method="post" action="">
    <div class="row justify-content-center m-5">
        <div class="col-md-6 shadow rounded">
            <div class="row p-3">
                <div class="col-md-2 mr-4">
                    <!-- <img src="img/<?php echo $image_milk[$i]; ?>" alt="" width="100px;">
                    <input type="hidden" name="image" value="<?php echo $image_milk[$i]; ?>"> -->
                </div>
                <div class="col">
                    <h6><?php echo $name_milk[$i]; ?></h6>
                    <input type="hidden" name="milk" value="<?php echo $name_milk[$i]; ?>">
                    <p><?php echo $ml_milk[$i]; ?></p>
                    <input type="hidden" name="mlmilk" value="<?php echo $ml_milk[$i]; ?>">
                    <p><?php echo $desc_milk[$i]; ?></p>
                    <input type="hidden" name="descmilk" value="<?php echo $desc_milk[$i]; ?>">
                    <span>Free <del><?php echo $price_milk[$i]; ?></del> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="hidden" name="pricemilk" value="<?php echo $price_milk[$i]; ?>">

                    <div class="item">
                        <button type="button" class="minus-btn btn btn-outline-primary" style="display:none;">-</button>
                        <button type="button" id="milk" class="count btn btn-outline-primary" onclick="addItem(this)">Add</button>
                        <button type="button" class="plus-btn btn btn-outline-primary" style="display:none;">+</button>
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Store the form data in the session
    $milkData = [
        // 'image' => $_POST['image'],
        'milk' => $_POST['milk'],
        'mlmilk' => $_POST['mlmilk'],
        'descmilk' => $_POST['descmilk'],
        'pricemilk' => $_POST['pricemilk']
    ];
    
    // Store the form data in a session variable
    if (!isset($_SESSION['order'])) {
        $_SESSION['order'] = [];
    }

    $_SESSION['order'][] = $milkData;

    // Print session data (for debugging)
    echo '<pre>';
    print_r($_SESSION['order']);
    echo '</pre>';
}
?>
