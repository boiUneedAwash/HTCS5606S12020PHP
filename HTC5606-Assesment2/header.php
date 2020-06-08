<header>
    <div id = "header">
        <div id="headerPicture">
            <img src="img/banner/bradcam.png"/>
        </div>
    <div>
        <ul>
            <li>0800 456 3589</li>
            <li>Mon - Sat 10:00 - 7:00</li>
        </ul>
    </div>
    <nav>
        <ul id="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.html">Products</a></li>
<!--            <li><a href="contact.php">Contact</a></li>-->
            <?php
            include_once "class/User.php"
            $user = new User(null, "", "", "");
            $catagories = $user->viewCatagories();
            $i=0;
            while ($i < sizeof($catagories)){
                $catagory = $catagories[$i];
                echo "<li><a href='products.php?catagoryID=".$catagory->id."'>".$catagory->name."</a>,</li>";
                $i = $i + 1;
            }
            ?>
            <li><a href="https://www.unitec.ac.nz/">Unitec</a></li>
        </ul>
    </nav>
</header>