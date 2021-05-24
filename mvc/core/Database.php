<?php
// Class kết nối Model vs Database

class Database
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=blog";
        $this->user = 'root';
        $this->password = 'phihung610';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->password);
         } catch (PDOException $e) {
            die($e->getMessage());
        }
         
     }
}

