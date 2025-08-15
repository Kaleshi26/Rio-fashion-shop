
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

        .SHOES-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 5px; 
            justify-items: center;
        }

        .shoes-item{
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

        .shoes-item img {
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
    
    <div id="SHOES" class="section">
        <center><h2>SHOES</h2></center>
        <div class="SHOES-list">
            <div class="shoes-item">
                <img src="images/shoes1.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Women KyrieFlytrap Shoes</center><br>
                </hr>
                <center><b>Rs:3600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes1.jpg')">Add To Cart</button>
            </div>
            <div class="shoes-item">
                <img src="images/shoes2.jpg" alt="shoes2" class="product-image">
                <hr>
                <center>Nike KyrieFlytrap Shoes</center><br>
                </hr>
                <center><b>Rs:4600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes2.jpg)">Add To Cart</button>
            </div>
            <div class="shoes-item">
                <img src="images/shoes3.jpg" alt="shoes3" class="product-image">
                <hr>
                <center>Elegant High Heeled</center><br>
                </hr>
                <center><b>Rs:4500.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes3.jpg)">Add To Cart</button>
            </div>
            
            <div class="shoes-item">
                <img src="images/shoes4.jpg" alt="shoes4" class="product-image">
                <hr>
                <center>Men's Classic Leather Shoes</center><br>
                </hr>
                <center><b>Rs:5100.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes4.jpg)">Add To Cart</button>
            </div>
            <div class="shoes-item">
                <img src="images/shoes5.jpg" alt="girlsT2" class="product-image">
                <hr>
                <center>Grey Striprd Sneakers</center><br>
                </hr>
                <center><b>Rs:4900.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes5.jpg)">Add To Cart</button>
            </div>
            <div class="shoes-item">
                <img src="images/shoes6.jpg" alt="girlsT3" class="product-image">
                <hr>
                <center>Nike KyrieFlytrap Shoes</center><br>
                </hr>
                <center><b>Rs:4700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>

                <button class="add-to-cart-button" onclick="handleAddToCart('images/shoes6.jpg)">Add To Cart</button>
            </div>
           
        <?php
            include("footer.php");
        ?>

    </body>
</html>