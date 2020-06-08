<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Care Products</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<?php
include_once "header.php";
?>
<header>
    <div>
        <ul>
            <li>0800 456 3589</li>
            <li>Mon - Sat 10:00 - 7:00</li>
        </ul>
    </div>
    <nav>
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="https://www.unitec.ac.nz/">Unitec</a></li>
        </ul>
    </nav>
</header>

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
                <p><img src="img/careproducts/leatherdogcollar.jpg" width="200px" length="200px"></p>
                <p>Price: $24.99</p>
                <p>
                    <input id="collarQty" placeholder="qty" type="number">
                    <button id="addCollar" onclick="addProductToCart(this.id)">Add to cart</button>
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