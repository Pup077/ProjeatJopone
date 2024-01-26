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

    public function usernameavailable($uname) {
        $checkuser = mysqli_query($this->dbgod, "SELECT username FROM tbusers WHERE username = 
        '$uname'");
        return $checkuser;
    }

    public function registration($fname, $uname, $uemail, $password)
    {
        $reg = mysqli_query($this->dbgod, "INSERT INTO tbusers(fullname, username, useremail, password) 
        VALUES('$fname', '$uname', '$uemail', '$password')");
        return $reg;
    }

    public function signin($uname, $password) {
        $signinquery = mysqli_query($this->dbgod, "SELECT id, fullname FROM tbusers WHERE username = 
        '$uname' AND password = '$password'");
        return $signinquery;
    }
}

?>