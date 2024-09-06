<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="item">
        <button type="button" class="minus-btn btn btn-outline-primary" style="display:none;" onclick="decreaseCount(this)">-</button>
        <button type="button" id="milk" class="count btn btn-outline-primary" onclick="addItem(this)">Add</button>
        <button type="button" class="plus-btn btn btn-outline-primary" style="display:none;" onclick="increaseCount(this)">+</button>
    </div>


</body>

</html>

<script>
    let totalItems = 0; // Keep track of total items added

    function addItem(button) {
        // Get the container element that wraps the buttons (this is the 'item' div)
        const itemDiv = button.closest('.item');

        // Show the minus and plus buttons, and update the 'Add' button to show '1'
        itemDiv.querySelector('.minus-btn').style.display = 'inline-block';
        itemDiv.querySelector('.plus-btn').style.display = 'inline-block';
        button.textContent = '1'; // Change 'Add' to '1'

        // Increment the total item count
        totalItems += 1;
        updateItemCounter(); // Update the item counter display (optional)
    }

    function decreaseCount(button) {
        const itemDiv = button.closest('.item');
        const countButton = itemDiv.querySelector('.count');
        let count = parseInt(countButton.textContent);

        // Decrease the count if greater than 1, else hide the buttons and show 'Add'
        if (count > 1) {
            count--;
            countButton.textContent = count;
        } else {
            // If count is 1, hide plus/minus buttons and change '1' to 'Add'
            itemDiv.querySelector('.minus-btn').style.display = 'none';
            itemDiv.querySelector('.plus-btn').style.display = 'none';
            countButton.textContent = 'Add';
        }

        totalItems -= 1;
        updateItemCounter();
    }

    function increaseCount(button) {
        const itemDiv = button.closest('.item');
        const countButton = itemDiv.querySelector('.count');
        let count = parseInt(countButton.textContent);

        // Increase the count by 1
        count++;
        countButton.textContent = count;

        totalItems += 1;
        updateItemCounter();
    }

    function updateItemCounter() {
        // You can use this function to update the item count on the page
        const itemCounterElement = document.querySelector('.btn-primary'); // The counter button
        itemCounterElement.textContent = `${totalItems} | item${totalItems > 1 ? 's' : ''} | Free Continue`;
    }
</script>