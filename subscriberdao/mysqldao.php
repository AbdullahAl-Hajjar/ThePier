<?php


class mysqldao{

    protected $mysqli;

    protected static $servername = "localhost";
    protected static $username = "wp_eatery";
    protected static $password = "password";
    protected static $database = "wp_eatery";
    
    function __construct()
    {
    $this->mysqli = new mysqli(self::$servername, self::$username, self::$password, self::$database);
    }
    
    public function getMysqli()
    {
        return $this->mysqli;
        
    }
    
  
}
?>