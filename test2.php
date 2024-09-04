<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
    /* #counter {
      font-size: 24px;
      margin: 10px;
    } */

    button {
        font-size: 20px;
        margin: 5px;
        padding: 5px 15px;
    }

    .button-container .active {
        background-color: #007bff;
        color: white;
    }
</style>


<body>
    <div class="input-group">
        <div class="input-group-prepend">
            <button class="input-group-text">$</button>
        </div>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <div class="input-group-append">
            <button class="input-group-text">.00</button>
        </div>
    </div>

    <div>
        <button class="btn btn-outline-secondary" type="button" onclick="decrement()">-</button>
        <span id="counter1">Add</span>
        <button class="btn btn-outline-secondary" type="button" onclick="increment()">+</button>
        <input type="hidden" id="counterValue1" name="counterValue1" value="0">
    </div>

</body>

</html>