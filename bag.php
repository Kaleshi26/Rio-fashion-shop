
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

        .BAG-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 20px; 
            justify-items: center;
           
        }

        .bag-item{
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

        .bag-item img {
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
    
    <div id="BAG" class="section">
        <center><h2>BAGS</h2></center>
        <div class="BAG-list">
            <div class="bag-item">
                <img src="images/bag1.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>CityMove waist bag</center><br>
                </hr>
                <center><b>Rs:3600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag1.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag2.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Travelling bag</center><br>
                </hr>
                <center><b>Rs:4600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag2.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag3.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Mini back pack Bag</center><br>
                </hr>
                <center><b>Rs:3600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag3.jpg')">Add To Cart</button>
            </div>
            
            <div class="bag-item">
                <img src="images/bag4.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Hand bag Elegance</center><br>
                </hr>
                <center><b>Rs:3900.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag4.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag5.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Side bag</center><br>
                </hr>
                <center><b>Rs:3700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag5.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag6.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Hand Bag Lavie</center><br>
                </hr>
                <center><b>Rs:5600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag6.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag7.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women's Hand Bag</center><br>
                </hr>
                <center><b>Rs:3900.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag7.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag8.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Travelling bag</center><br>
                </hr>
                <center><b>Rs:5700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag8.jpg')">Add To Cart</button>
            </div>
            <div class="bag-item">
                <img src="images/bag9.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Travelling bag</center><br>
                </hr>
                <center><b>Rs:5100.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag9.jpg')">Add To Cart</button>
            </div>
          
            <?php
                include("footer.php");
            ?>   
        
    </body>
</html>