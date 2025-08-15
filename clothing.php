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

        .cloth-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 5px; /* Adjust gap between grid items */
            justify-items: center;
        }

        .cloth-item {
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

        .cloth-item img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 5px; 
            max-height: 200px; 
            object-fit: contain; 
        }

        @media (max-width: 600px) {
            .h2 {
                font-size: 1.5em;
                color: green;
            }

            .add-to-cart-button {
                width: 100%;
                padding: 10px 0;
            }
            .h3{
                color: green;
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
    
    <div id="CLOTHING" class="section">
        <center><h2>CLOTHING</h2></center>
        <div class="cloth-list">
            <div class="cloth-item">
                <img src="images/clothes1.jpg" alt="clothes1" class="product-image">
                <hr>
                <center>Tiered Frock</center><br>
                </hr>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/clothes1.jpg')>Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/clothes2.jpg" alt="clothes2" class="product-image">
                <hr>
                <hr>
                <center>Sweater Dresses</center><br>
                </hr>
                <center><b>Rs:2400.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/clothes2.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/clothes3.jpg" alt="clothes3" class="product-image">
                <hr>
                <center>Tiered Frock</center><br>
                </hr>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/clothes3.jpg')">Add To Cart</button>
            </div>
            
            <div class="cloth-item">
                <img src="images/girlsT1.jpg" alt="girlsT1" class="product-image">
                <hr>
                <center>Sleeveless Women Dress</center><br>
                </hr>
                <center><b>Rs:2600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/girlsT1.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/girlsT2.jpg" alt="girlsT2" class="product-image">
                <hr>
                <center>Printed T-shirt women</center><br>
                </hr>
                <center><b>Rs:1900.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/girlsT2.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/girlsT3.jpg" alt="girlsT3" class="product-image">
                <hr>
                <center>White T-shirt women </center><br>
                </hr>
                <center><b>Rs:1800.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/irlsT3.jpg')">Add To Cart</button>
            </div>
           
            <div class="cloth-item">
                <img src="images/menT1.jpg" alt="menT1" class="product-image">
                <hr>
                <center>Barbie T-shirt women</center><br>
                </hr>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/menT1.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/menT2.jpg" alt="menT2" class="product-image">
                <hr>
                <center>Men's Crew Neck T-shirt</center><br>
                </hr>
                <center><b>Rs:2400.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/menT2.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/menT3.jpg" alt="menT3" class="product-image">
                <hr>
                <center>Men's Crew Neck T-shirt</center><br>
                </hr>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/menT3.jpg')">Add To Cart</button>
            </div>
           
            <div class="cloth-item">
                <img src="images/shirt1.jpg" alt="shirt1" class="product-image">
                <hr>
                <center>Men's Crew Neck T-shirt</center><br>
                </hr>
                <center><b>Rs:3600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shirt1.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/shirt2.jpg" alt="shirt2" class="product-image">
                <hr>
                <center>Men's Formal shirt</center><br>
                </hr>
                <center><b>Rs:3800.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shirt2.jpg')">Add To Cart</button>
            </div>
            <div class="cloth-item">
                <img src="images/shirt3.jpg" alt="shirt3" class="product-image">
                <hr>
                <center>Men's Formal shirt</center><br>
                </hr>
                <center><b>Rs:4100.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shirt3.jpg')">Add To Cart</button>
            </div>
        </div>
    </div>
    <?php
        include("footer.php");
    ?>

</body>
</html>
