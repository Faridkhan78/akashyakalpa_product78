<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="input-group">
    <span class="input-group-btn">
        <button class="btn btn-default minus-btn" type="button">-</button>
    </span>
    <input type="number" class="form-control count-input" value="1">
    <span class="input-group-btn">
        <button class="btn btn-default plus-btn" type="button">+</button>
    </span>
</div>
</body>
</html>


<script>
    $(document).ready(function() {
    let count = 1;

    $('.minus-btn').on('click', function() {
        count--;
        $('.count-input').val(count);
    });

    $('.plus-btn').on('click', function() {
        count++;
        $('.count-input').val(count);
    });
});
</script>