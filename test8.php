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
    <div class="item">
        <button class="minus-btn btn btn-primary" style="display:none;">-</button>
        <label class="count">Add</label>
        <button class="plus-btn btn btn-primary" style="display:none;">+</button>
    </div>
    <div class="item">
        <button class="minus-btn btn btn-primary" style="display:none;">-</button>
        <label class="count">Add</label>
        <button class="plus-btn btn btn-primary" style="display:none;">+</button>
    </div>
    <!-- Repeat for additional items -->

</body>

</html>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Select all items
        const items = document.querySelectorAll('.item');

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
        }

        // Function to hide the minus and plus buttons and show the "Add" label
        function hideButtons(item) {
            const minusButton = item.querySelector('.minus-btn');
            const plusButton = item.querySelector('.plus-btn');
            const countLabel = item.querySelector('.count');

            // Hide the addition buttons and show the "Add" label
            minusButton.style.display = 'none';
            plusButton.style.display = 'none';
            countLabel.textContent = 'Add';
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
                } else {
                    hideButtons(item);
                }
            });

            plusBtn.addEventListener('click', () => {
                count++;
                countLabel.textContent = count;
            });
        });
    });
</script>