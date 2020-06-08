<?php
/**
 * Class Catagory
 * Author: James Tiller
 * Date: 2020-06-09
 * Version: 1
 */

class Catagory
{
public $id;
public $name;
public $picture;

    /**
     * Catagory constructor.
     * @param $id
     * @param $name
     * @param $picture
     */
    public function __construct($id, $name, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }
}