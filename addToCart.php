<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIO FASHION</title>
    <style>
        h2 {
            color: green;
        }
        .src {
            width: 10px;
            height: 20px;
        }
        .submit {
            background-color: green;
        }
        fieldset {
            border-color: green;
            background-color:white;
            padding: 40px;
            border-radius: 30px;
            border-width: 8px;
        }
        hr {
            border-color: green;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <form action="your_form_handler.php" method="post">
        <fieldset>
            <center><h2>ORDER DETAILS</h2></center>
            <hr>
            
            <input type="button" name="create"  id="create" value="CREATE AN ACCOUNT">
            <input type="button" name="logging"  id="logging" value="LOGGING AN ACCOUNT"><br>

            <h3>
                <label for="src">Item ID:</label>
                <input type="text" id="src" name="src" value="<?php echo htmlspecialchars($_GET['src']); ?>"><br>

                <label for="no">No of items:</label>
                <input type="number" id="no" name="no" onchange="checkItemNumber()"><br><br>

                <img src="<?php echo htmlspecialchars($_GET['src']); ?>" alt="Order Image" name="orderImg" id="orderImg"><br><br>

                <label for="name">Customer name:</label>
                <input type="text" id="name" name="name"><br>

                <label for="address">Customer Address:</label>
                <input type="text" id="address" name="address"><br>

                <label for="postalCode">Postal Code:</label>
                <input type="number" id="postalCode" name="postalCode"><br>

                <label for="tel">Customer Telephone No:</label>
                <input type="text" id="tel" name="tel"><br>
            </h3>

            <input type="submit" class="submit" name="submit" id="submit" value="SUBMIT">
        </fieldset>
    </form>

    <?php include("footer.php"); ?>

    <script>
        function checkItemNumber() {
            var no = document.getElementById("no").value;
            if (no <= 0) {
                alert("Enter correct number of items");
            }
        }
    </script>
</body>
</html>
