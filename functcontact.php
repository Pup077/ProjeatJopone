<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project');

class DB_god
{
    private $dbgod; // Declare $dbgod as a class property

    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbgod = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function contact($cemail, $ctextone, $ctexttwo)
    {
        $reg = mysqli_query($this->dbgod, "INSERT INTO contact(email, contextone, contexttwo) 
        VALUES('$cemail', '$ctextone', '$ctexttwo')");
        return $reg;
    }

}