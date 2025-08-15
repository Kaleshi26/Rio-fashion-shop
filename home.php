<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIO FASHION</title>
    <link rel="stylesheet" href="homeStyle.css">
    <style>
        .slideshow-image {
            width: 1300px;
            height: 450px;
            object-fit: cover;
            display: none;
        }

        .welcome {
            color: green;
        }
        .trending {
            color: red;
        }
        .add-to-cart-button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin-top: 10px;
        }

        .trending-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 5px; /* Adjust gap between grid items */
            justify-items: center;
        }

        .trending-item {
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

        .product-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 5px; 
            max-height: 200px; 
            object-fit: contain; 
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

    <div class="slideshow-container">
        <img src="images/homephoto1.jpg" class="slideshow-image" alt="Slide 1">
        <img src="images/homephoto2.jpg" class="slideshow-image" alt="Slide 2">
        <img src="images/homephoto3.jpg" class="slideshow-image" alt="Slide 3">
        <img src="images/homephoto4.jpg" class="slideshow-image" alt="Slide 4">
        <img src="images/homephoto5.jpg" class="slideshow-image" alt="Slide 5">
        <img src="images/homephoto6.jpg" class="slideshow-image" alt="Slide 6">
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slideshow-image');

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.style.display = (index === slideIndex) ? 'block' : 'none';
            });
            slideIndex = (slideIndex + 1) % slides.length;
        }

        showSlides();
        setInterval(showSlides, 2000);
    </script>

    <h1 class="welcome">WELCOME TO</h1><br>
    <h1 class="Rio">RIO FASHION</h1><br>
   
    <marquee><h1 class="trending">Trending items &emsp; Trending items &emsp; Trending items&emsp; Trending items &emsp; Trending items &emsp; Trending items &emsp;Trending items &emsp; Trending items</h1></marquee><br>

    <div id="trending" class="section">
        <div class="trending-list">    
            <div class="trending-item">
                <img src="images/clothes1.jpg" alt="clothes1" class="product-image">
                <hr>
                <center>Tiered Frock</center><br>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/clothes1.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/acce1.jpg" alt="clothshoes1es1" class="product-image">
                <hr>
                <center>Men's Bracelet</center><br>
                <center><b>Rs:1600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce1.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/menT1.jpg" alt="menT1" class="product-image">
                <hr>
                <center>Barbie T-shirt Women</center><br>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/menT1.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/bag9.jpg" alt="bag9" class="product-image">
                <hr>
                <center>Travelling Bag</center><br>
                <center><b>Rs:5100.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag9.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/bag7.jpg" alt="bag7" class="product-image">
                <hr>
                <center>Women's Hand Bag</center><br>
                <center><b>Rs:3900.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/bag7.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/menT3.jpg" alt="menT3" class="product-image">
                <hr>
                <center>Men's Crew Neck T-shirt</center><br>
                <center><b>Rs:2700.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/menT3.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/acce3.jpg" alt="acce3" class="product-image">
                <hr>
                <center>Men's Watch</center><br>
                <center><b>Rs:5600.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce3.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/acce5.jpg" alt="acce5" class="product-image">
                <hr>
                <center>Women's Earrings</center><br>
                <center><b>Rs:1400.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" onclick="handleAddToCart('images/acce5.jpg')">Add To Cart</button>
            </div>
            <div class="trending-item">
                <img src="images/menT2.jpg" alt="menT2" class="product-image">
                <hr>
                <center>Men's Crew Neck T-shirt</center><br>
                <center><b>Rs:2400.00</b></center><br>
                <center><h3>In Stock</h3></center><br>
                <button class="add-to-cart-button" action="addToCart.php" onclick="handleAddToCart('images/menT2.jpg')">Add To Cart</button>
            </div>
        </div>
    </div>    

    

    <?php include("footer.php"); ?>
</body>
</html>
