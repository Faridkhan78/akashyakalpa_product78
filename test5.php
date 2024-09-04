<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <button class="btn btn-white btn-outline-secondary" id="add_button" onclick="toggleButton()">Add</button>
<button class="btn btn-white btn-outline-secondary" id="addition_button" style="display:none;">-</button>
<span id="counter">1</span>
<button class="btn btn-white btn-outline-secondary" onclick="incrementCounter()">+</button> -->


<button class="btn btn-white btn-outline-secondary" id="add_button">Add</button>
<button class="btn btn-white btn-outline-secondary" id="addition_button" style="display:none;">-</button>
<span id="counter">1</span>
<button class="btn btn-white btn-outline-secondary" id="increment_button">+</button>
   
</body>
</html>

<!-- <script>
function toggleButton() {
    var additionButton = document.getElementById("addition_button");
    if (additionButton.style.display === "none") {
        additionButton.style.display = "inline-block";
    } else {
        additionButton.style.display = "none";
    }
}

function incrementCounter() {
    var counterElement = document.getElementById("counter");
    var count = parseInt(counterElement.textContent);
    counterElement.textContent = count + 1;
}
</script> -->


<script>
$(document).ready(function() {
    // Toggle the visibility of the decrement button
    $('#add_button').click(function() {
        $('#addition_button').toggle();
    });

    // Increment the counter
    $('#increment_button').click(function() {
        var count = parseInt($('#counter').text());
        $('#counter').text(count + 1);
    });

    // Decrement the counter
    $('#addition_button').click(function() {
        var count = parseInt($('#counter').text());
        if(count > 1) { // Ensure the counter doesn't go below 1
            $('#counter').text(count - 1);
        }
    });
});
</script>