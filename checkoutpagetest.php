<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #ffffff;
        padding: 10px 20px;
        text-align: center;
    }

    .logo img {
        width: 100px;
    }

    .container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    .delivery-section {
        width: 50%;
    }

    .summary-section {
        width: 40%;
    }

    h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #map {
        display: flex;
        gap: 10px;
    }

    #map button {
        flex: 1;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #map-view {
        background-color: #007bff;
        color: white;
    }

    #satellite-view {
        background-color: #6c757d;
        color: white;
    }

    .product {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product input[type="number"] {
        width: 50px;
        padding: 5px;
    }
</style>

<body>
    <header>
        <div class="logo">
            <img src="your-logo-url-here" alt="Akshayakalpa Organic">
        </div>
    </header>

    <div class="container">
        <div class="delivery-section">
            <h2>Delivery Address</h2>
            <input type="text" id="address" placeholder="Search your address">
            <div id="map">
                <button id="map-view">Map</button>
                <button id="satellite-view">Satellite</button>
            </div>
        </div>

        <div class="summary-section">
            <h2>Summary</h2>
            <div class="product">
                <p>Organic Cow Milk Pasteurized & Homogenized</p>
                <span>500 ml • Free</span>
                <input type="number" value="1" min="1">
            </div>
            <div class="product">
                <p>Organic Greek Yoghurt Plain</p>
                <span>100 g • Free</span>
                <input type="number" value="1" min="1">
            </div>
        </div>
    </div>
</body>

</html>