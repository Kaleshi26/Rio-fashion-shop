<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIO FASHION</title>
    <style>
        .add-to-cart-button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .Accessories-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 20px; 
            justify-items: center;
        }

        .accessories-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            padding: 20px; 
            width: 300px; 
            height: 400px; 
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .accessories-item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 5px; 
            max-height: 200px; 
            object-fit: contain; 
        }

        @media (max-width: 600px) {
            h2 {
                font-size: 1.5em;
                color: green;
            }

            .add-to-cart-button {
                width: 100%;
                padding: 10px 0;
            }
        }
    </style>
    <script>
        function handleAddToCart(imgSrc) {
            window.location.href = 'addToCart.php?src=' + encodeURIComponent(imgSrc);
        }
    </script>
</head>
<body>
    <?php include("header.php"); ?>
    
    <div id="Accessories" class="section">
        <center><h2>ACCESSORIES</h2></center>
        <div class="Accessories-list">
            <div class="accessories-item">
                <img src="images/acce1.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Men's Bracelet</center><br>
                <center><b>Rs:1600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce1.jpg')">Add To Cart</button>
            </div>
            <div class="accessories-item">
                <img src="images/acce2.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Men's Belt</center><br>
                <center><b>Rs:2600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce2.jpg')">Add To Cart</button>
            </div>
            <div class="accessories-item">
                <img src="images/acce3.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Men's Watch</center><br>
                <center><b>Rs:5600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce3.jpg')">Add To Cart</button>
            </div>
            <div class="accessories-item">
                <img src="images/acce4.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Necklace</center><br>
                <center><b>Rs:1600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce4.jpg')">Add To Cart</button>
            </div>
            <div class="accessories-item">
                <img src="images/acce5.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Earring</center><br>
                <center><b>Rs:1400.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce5.jpg')">Add To Cart</button>
            </div>
            <div class="accessories-item">
                <img src="images/acce6.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Earring</center><br>
                <center><b>Rs:1300.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce6.jpg')">Add To Cart</button>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </div>
</body>
</html>
