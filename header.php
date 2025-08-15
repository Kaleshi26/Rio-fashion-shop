<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIO FASHION</title>
    <link rel="stylesheet" href="homeStyle.css">
    <style>
         .logo {
            width:150px; /* Adjust the width to your desired size */
            height: 70px; 
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .button-container {
            display: flex;
            gap: 10px; /* Adjust the gap between buttons as needed */
        }

        button {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 1em;
            background-color: green;
            color:white;
        }

        .slideshow-container {
            position: relative;
            width: 800px;
            height: 250px;
            max-width: 800px; 
            margin: auto;
        }
    </style>
</head>
<body>

<div class="horizontalBar">
    <div class="header-bar">
        <input type="text" class="screech-input" placeholder="Screech here...">
        <button class="screech-button">Screech</button>
        <button class="login-button">Log In</button>
    </div>
    <hr class="custom-hr">
    
    <div class="logo-container">
        <img src="images/logo2.jpg" alt="Logo" class="logo"><h1>Rio</h1>
        <div class="button-container">
            <button onclick="handleClick('HOME')">HOME</button>
            <button onclick="handleClick('CLOTHING')">CLOTHING</button>
            <button onclick="handleClick('SHOES')">SHOES</button>
            <button onclick="handleClick('BAGS')">BAGS</button>
            <button onclick="handleClick('ACCESSORIES')">ACCESSORIES</button>
            <button onclick="handleClick('CONTACT US')">CONTACT US</button>
        </div>
        <img src="images/logo2.jpg" alt="Logo" class="logo"><h1>Rio</h1>
    </div>

    <hr class="custom-hr">
</div>

<script>
function handleClick(page) {
    switch(page) {
        case 'HOME':
            window.location.href = 'home.php';
            break;
        case 'CLOTHING':
            window.location.href = 'clothing.php';
            break;
        case 'SHOES':
            window.location.href = 'shoes.php';
            break;
        case 'BAGS':
            window.location.href = 'bag.php';
            break;
        case 'ACCESSORIES':
            window.location.href = 'accessories.php';
            break;
        case 'CONTACT US':
            window.location.href = 'contact.php';
            break;
        default:
            console.error('Unknown page:', page);
    }
}
</script>

</body>
</html>
