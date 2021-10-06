<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product discount calculator</title>

    <style>
        form{
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .error{
            color: red;
        }
    </style>
    
</head>
<body>
    <?php
    include_once "display_discount.php";
    ?>
    <form action="" method = "POST">
        <fieldset>
            <legend>Calculate</legend>
            Product Description: <br/>
            <input type = "text" name = "productDescription" placeholder = "input product"/> <br/>
            List Price: <br/>
            <input type = "text" name = "listPrice" placeholder = "input price"/> <br/>
            Discount Percent: <br/>
            <input type = "text" name = "discountPercent" placeholder = "input discount"/> <br/><br/>
            <input type = "submit" value = "Calculate"/> <br/>
            <span class="error">
                <?php
                    echo "<br/>" . $displayErr . "<br/>";
                ?>
            </span>
            <?php echo "<br/>" . "<b>Product:</b> " . $productDescription . 
            "<br/>" . "<b>Price:</b> " . $listPrice . "<br/>" . "<b>Discount Percent:</b> " . $discountPercent . "<br/>" . 
            "<b>Discount Amount:</b> " . $discountAmount . "<br/>" . "<b>Discount Price:</b> " . $discountPrice; ?>
        </fieldset>
    </form>
</body>
</html>