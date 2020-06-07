<?php
/**
 * Class User
 * Author: James Tiller
 * Version: 1.0
 * Purpose: for User
 */

class User
{
public $id; //public friend private protect from variable
private $username;
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


}