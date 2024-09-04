<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Dynamic Tabs</h2>
        <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Menu 1</h3>

            </div>

        </div>

        <div class="counter">
            <button  class="minus-btn btn btn-primary">-</button>
            <label class="count">Add</label>
            <button class="plus-btn btn btn-primary">+</button>
        </div>

    </div>


    <!-- <a class="text-primary rounded btn btn-outline-primary bg-white card-button justify-content-center d-flex align-items-center fw-bold text-uppercase cat_1" id="sample_product_add_48" onclick="add_item(48,1,166,37)">add</a>
                                                <div class="text-primary rounded btn btn-outline-primary bg-white card-button justify-content-between d-flex align-items-center fw-bold text-uppercase _cat_1" id="sample_product_added_48" style="display:none !important;">
                                                    <a class="text-decoration-none" onclick="remove_item(48,1,166,37)">-</a>
                                                    <label class="text-primary">1</label> <a class="text-decoration-none">+</a> -->

</body>

</html>

<script>
    const counter = document.querySelector('.counter');
    const minusBtn = counter.querySelector('.minus-btn');
    const plusBtn = counter.querySelector('.plus-btn');
    const countLabel = counter.querySelector('.count');

    let count = 1;

    minusBtn.addEventListener('click', () => {
        count--;
        countLabel.textContent = count;
    });

    plusBtn.addEventListener('click', () => {
        count++;
        countLabel.textContent = count;
    });
</script>