<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Care Products</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
</head>
<?php
include_once "header.php";
?>

<div>
    <div>
        <img id="leftDivPic" src="img/others/leftdividerparrotfeathers.jpg" width="500px" height="800px"/>
    </div>
    <div id="middle">
        <?php
        $catagoryID = $_GET["catagoryID"];
        $products = $user->showProductsByCatagory($catagoryID);
        $i = 0;
        while ($i < sizeof($products)) {
            $product = $products[$i];
            ?>
            <div class="product">
                <p><img src="img/<?php echo $product->picture;?>"></p>
                <p>Price: <?php echo $product->price;?></p>
                <p>
                    <input placeholder="qty" type="number">
                    <button onclick="addProductToCart(this)"
                            name="<?php echo $product->name; ?>"
                            price = "<?php echo $product->price; ?>">Add to cart</button>
                </p>
            </div>
            <?php
            $i = $i + 1;
        }
        ?>
    </div>
</div>
<div id="rightDiv">
    <h2>Cart</h2>
    <button id="checkOut" onclick="invoice()">Check out</button>
</div>

<!-- The Invoice -->
<div class="modal" id="myModal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="invoicePlace">Invoice</div>
    </div>

</div>
<?php
include_once "footer.php";
?>
</body>
</html>