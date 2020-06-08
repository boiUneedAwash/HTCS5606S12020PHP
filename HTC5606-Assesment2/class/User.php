<?php
/**
 * Class User
 * Author: James Tiller
 * Version: 1.0
 * Purpose: for User
 */
include_once "DB.php";
include_once "Catagory.php";
include_once "Product.php";

class User
{
    public $id;
    public $username;
    private $password;
    public $name;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @name viewCatagories
     * @return catagory array
     */
    public function viewCatagories()
    {
        $conn = (new DB())->connection; //create connection from DB Class
        $sql = "select * from Catagory"; //my query
        $catagories = array(); //my catagories is an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $catagory = new Catagory($row["id"], $row["name"], $row["picture"]); //each row in table
                array_push($catagories, $catagory); //push catagory to catagory array
            }
        }
        $conn->close(); ///close database connection
        return $catagories;
    }

    public function showProductsByCatagory($catagoryID)
    {
        $conn = (new DB())->connection;
        $sql = "select * from Product where catagoryID=" . $catagoryID; // . means two string
        $products = array();
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = new Product($row["id"], $row["name"], $row["price"], $row["description"], $row["catagoryID"]);
                array_push($products, $product);
            }
        }
        $conn->close();
        return $products;
    }
}