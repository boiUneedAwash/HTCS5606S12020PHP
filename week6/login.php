<?php
/**
 * Author: James Tiller
 * Date 26th of May 2020
 * Version 1.0
 * Purpose for login
 */
if (isset($_POST["username"])){
    $username = $_POST["username"];
    $password - $_POST["password"];
    $server = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "dt7if5fn5w2fs141";
    $pwd = "rmycl3gp6mqjkscj";
    $database = "yvj349jjrtc4w5h1";

    $connection = new mysqli($server, $user, $pwd, $database);
    if ($connection->connect_error){
        echo $connection->connect_error;
    }else{
        echo "Connection Created ";
    }

    // is the username in my table
    $sql = "select * from Users where username = '$username'"; //this is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1){ // means user exist in our database
        while ($row = $result->fetch_assoc()){
            if ($row["password"] == $password){ //check password
                echo "access granted";
                session_start();
                $_SESSION["username"] = $username;
                // if login we allow user to do somthing
                ?>
                <p><a href="profile.php">profile</a></p>
                <p><a href="changepassword.php"></a>change password</p>
                <?php
            }else{
                echo "wrong password";
            }
        }
    } else{
        echo "wrong username";
    }
    $connection->close(); //close my connection

}else{
    ?>
    <script>
        window.open("loginform.html","_self"); // go to login form
    </script>
    <?php
}