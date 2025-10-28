/*footer.php */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIO FASHION</title>
    <link rel="stylesheet" href="homeStyle.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .logo {
            width: 150px; /* Adjust the width to your desired size */
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
            color: white;
        }

        .slideshow-container {
            position: relative;
            width: 800px;
            height: 250px;
            max-width: 800px;
            margin: auto;
        }

        .social-buttons {
            display: flex;
            gap: 10px;
            justify-content: center; /* Center the social buttons */
        }

        .social-buttons img {
            width: 30px; /* Adjust the size of the icons */
            height: 30px;
        }

        .customNew-hr {
            margin: 0;
            padding: 0;
        }

        .green-background {
            background-color: green;
            padding-top: 10px; /* Adjust as needed to create space between the hr and the content */
            min-height: 100vh; /* Ensure it covers the full viewport height */
            color: white; /* Optional: Ensures text is visible against the green background */
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the content horizontally */
        }
        .button-feedback{
            background-color: green;
            color: black;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="horizontalBar">
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
    </div>
    
    <hr class="customNew-hr">

    <div class="green-background">
        <div class="social-buttons">
            <a href="https://www.facebook.com" target="_blank">
                <img src="images/Facebook-logo.jpg" alt="Facebook">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="images/inster_logo.jpg" alt="Instagram">
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <img src="images/twitter-logo.jpg" alt="Twitter">
            </a>
        </div>

        <hr class="custom-hr">
        <center>CONTACT NO:+94814569875<br>
                EMAIL: riofashotononline@gamil.com<br>
                STORE CENTER: 123/B MAIN STREET KANDY<br>
        </center>

        <div class="button-feedback">
            <button onclick="handleClick('FAQ')">FAQ</button>
            <button onclick="handleClick('ABOUT US')">ABOUT US</button>
            
        </div>


    </div>

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
