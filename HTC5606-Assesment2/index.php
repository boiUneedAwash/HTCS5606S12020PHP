<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
</head>
<body>
<?php
include_once "header.php";
?>
<h3>The best in <br> <span>Online Pet Shopping</span></h3>
<p>What ever you need, it's all here.</p><br>
<a href="contact.php">Contact Us</a>
<div>
    <img src="img/banner/dog.png" width="500px" length="500px">
    <h3>Products for Every Pet</h3>
    <p>Browse our three most popular catagories</p>
</div>
<div>
    <h3>Pet Food</h3>
    <p>Munchies for your pet to keep them well feed, happy, and healthy</p>
    <img src="img/animalClipart/chiwawa.png">
</div>
<div>
    <h3>Toys</h3>
    <p>All of the best things to keep your pet entertained and to have fun with you</p>
    <img src="img/animalClipart/pug.png">
</div>
<div>
    <h3>Care Products</h3>
    <p>Everything you need from bathroom equipment to cute clothing for you pet</p>
    <img src="img/animalClipart/labrador.png">
</div>
<div class="pet_info">
    <h3><span>We Want To Help You </span> <br> Find The Best For Your Pet </h3>
    <img src="img/about/pet_care.png" width="300px" length="300px">
    <p>If your struggling to figure out what your pet needs you can call or email us to find exactly what you need</p>
    <a href="contact.php" class="boxed-btn3">Contact Us</a>
</div>
<?php
include_once "footer.php";
?>
</body>
</html>