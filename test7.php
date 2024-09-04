<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="row justify-content-center m-5 ">
        <div class="col-md-6 shadow rounded">
            <div class="row p-3">
                <div class="col-md-2 mr-4">
                    <!-- <img src="img/'.$image_product[$x].'" alt="" width="100px;"> -->
                </div>
                <div class="col">
                    <!-- <h6>'.$name_product[$x].'</h6>
                    <p>'.$ml_product[$x].'</p> -->
                    <span>Free  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class="counter">
                            <button class="minus-btn btn btn-primary" id="button_count">-</button>
                            <label class="count">Add</label>
                            <button class="plus-btn btn btn-primary">+</button>
                        </div></span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    document.querySelectorAll('.counter').forEach((counter, index, allCounters) => {
        const minusBtn = counter.querySelector('.minus-btn');
        const plusBtn = counter.querySelector('.plus-btn');
        const countLabel = counter.querySelector('.count');

        let count = 1;

        minusBtn.addEventListener('click', () => {
            if (count > 1) {
                count--;
                countLabel.textContent = count;
            } else {
                // Hide the current counter buttons when count is 1
                minusBtn.style.display = 'none';
                countLabel.textContent = 'Add';
                plusBtn.style.display = 'none';
            }
        });

        plusBtn.addEventListener('click', () => {
            count++;
            countLabel.textContent = count;
            // When plus button is clicked, hide all other counters
            allCounters.forEach((otherCounter, otherIndex) => {
                if (otherIndex !== index) {
                    const otherMinusBtn = otherCounter.querySelector('.minus-btn');
                    const otherPlusBtn = otherCounter.querySelector('.plus-btn');
                    const otherCountLabel = otherCounter.querySelector('.count');

                    otherMinusBtn.style.display = 'none';
                    otherPlusBtn.style.display = 'none';
                    otherCountLabel.textContent = 'Add';
                }
            });

            // Show the buttons for the clicked counter
            minusBtn.style.display = 'inline-block';
            plusBtn.style.display = 'inline-block';
        });
    });
</script>