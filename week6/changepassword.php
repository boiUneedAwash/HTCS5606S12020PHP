<?php
//whose password we change
//?>
    <!---->
    <!--<form action="changepassword.php" method="post">-->
    <!--    <p>...</p>-->
    <!--    <p>Old Password: <input type=""></p>-->
    <!--</form>-->
<?php
$server = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "dt7if5fn5w2fs141";
$pwd = "rmycl3gp6mqjkscj";
$database = "yvj349jjrtc4w5h1";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error) {
    echo $connection->connect_error;
} else {
    echo "Connection Created";
}

$sql = "select password from Users where username='something'";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDb = $row["password"];
    }
}

if (isset($_POST["oldpwd"])) { //isset check variable exist or not
    if ($_POST["oldpwd"] == $oldPwdInDb) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpwd"];
        $sql .= "'where username = 'something'";
        $result = $connection->query($sql);
        echo "password changed";
    } else {
        echo "go back, input again";
    }

}
$connection->close();