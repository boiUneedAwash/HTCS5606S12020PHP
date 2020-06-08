<?php


class DB
{
private $server = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
private $user = "dt7if5fn5w2fs141";
private $pwd = "rmycl3gp6mqjkscj";
private $database = "yvj349jjrtc4w5h1";

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }
}