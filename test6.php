<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Selection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="product-list">
    <div class="product-item">
        <div class="product-info">
            <h4>Amrutha A2 Organic Cow Milk Pasteurized</h4>
            <p>500 ml<br>A2-protein rich, ready-to-consume milk.</p>
            <p><strong>Free</strong> <span class="original-price">₹43.00</span></p>
        </div>
        <div class="product-controls">
            <button class="quantity-btn" onclick="decrement(this)">-</button>
            <span class="quantity">1</span>
            <button class="quantity-btn" onclick="increment(this)">+</button>
        </div>
    </div>

    <div class="product-item">
        <div class="product-info">
            <h4>Organic Cow Milk Pasteurized</h4>
            <p>500 ml<br>No-boiling-required, ready-to-consume milk!</p>
            <p><strong>Free</strong> <span class="original-price">₹40.00</span></p>
        </div>
        <button class="add-btn" onclick="addToCart(this)">ADD</button>
    </div>
</div>

<div class="cart-summary">
    <p><span id="item-count">1</span> Item | Free</p>
    <button class="continue-btn">Continue</button>
</div>

<script src="script.js"></script>
</body>
</html>
