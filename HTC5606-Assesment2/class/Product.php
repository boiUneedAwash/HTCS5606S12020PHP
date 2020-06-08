<?php
/**
 * Class Product
 * Author: James Tiller
 * Date: 2020-06-09
 * Version: 1
 */

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $catagoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $catagoryID
     */
    public function __construct($id, $name, $price, $description, $catagoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->catagoryID = $catagoryID;
    }
}