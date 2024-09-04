<input type="number" id="value1" placeholder="Enter first number">
<input type="number" id="value2" placeholder="Enter second number">
<button onclick="addValues()">Add</button>

<p id="result"></p>

<script>
    function addValues() {
        // Get the values from the input fields
        let val1 = document.getElementById('value1').value;
        let val2 = document.getElementById('value2').value;

        // Convert the values to numbers
        let num1 = parseFloat(val1);
        let num2 = parseFloat(val2);

        // Add the numbers together
        let sum = num1 + num2;

        // Display the result
        document.getElementById('result').textContent = "The sum is: " + sum;
    }
</script>
