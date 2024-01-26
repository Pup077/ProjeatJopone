<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'project');

class DB_cod
{
    private $dbcod; // Declare $dbgod as a class property

    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcod = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // Function to fetch all records from 'cmsfromone' table
    public function getAllCMSRecords()
    {
        $query = "SELECT cms_id, cms_name, cms_img, cms_textone, cms_texttwo FROM cmsfromone";
        $result = mysqli_query($this->dbcod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbcod));
        }

        $records = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $fname = $row['cms_name'];
            $fimg = $row['cms_img'];
            $fone = $row['cms_textone'];
            $ftwo = $row['cms_texttwo'];

            // You can use $fname, $fimg, $fone, $ftwo here or store them in an array
            // and then use them as needed.

            $records[] = array(
                'fname' => $fname,
                'fimg' => $fimg,
                'fone' => $fone,
                'ftwo' => $ftwo
            );
        }

        return $records;
    }

    public function getCMSRecordById($cms_id)
    {
        $query = "SELECT cms_id, cms_name, cms_img, cms_textone, cms_texttwo FROM cmsfromone WHERE cms_id = " . (int)$cms_id;
        $result = mysqli_query($this->dbcod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbcod));
        }

        $record = mysqli_fetch_assoc($result);

        return $record;
    }

    public function updateCMSRecord($cms_id, $new_values)
    {
        // $new_values is an associative array containing the columns to be updated
        // For example: $new_values = array('cms_name' => 'New Name', 'cms_img' => 'new_image.jpg', ...);

        // Build the SET part of the SQL query
        $set_clause = '';
        foreach ($new_values as $column => $value) {
            $set_clause .= "$column = '" . mysqli_real_escape_string($this->dbcod, $value) . "', ";
        }
        $set_clause = rtrim($set_clause, ', '); // Remove the trailing comma

        // Build the UPDATE query
        $query = "UPDATE cmsfromone SET $set_clause WHERE cms_id = " . (int)$cms_id;

        // Execute the query
        $result = mysqli_query($this->dbcod, $query);

        if (!$result) {
            die("Update query failed: " . mysqli_error($this->dbcod));
        }

        // Check if any rows were affected
        if (mysqli_affected_rows($this->dbcod) > 0) {
            echo "อัพเดมข้อมูลของท่านแล้ว.";
        } else {
            echo "ไม่สามารถทำการอัพเดทข้อมูลได้.";
        }
    }
}

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

    // Function to fetch all records from 'cmsfromone' table
    public function getAllCMSRecords()
    {
        $query = "SELECT cmstw_id, cmstw_name, cmstw_img, cmstw_textone, cmstw_texttwo FROM cmsfromtwo";
        $result = mysqli_query($this->dbgod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbgod));
        }

        $records = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $ftwname = $row['cmstw_name'];
            $ftwimg = $row['cmstw_img'];
            $ftwone = $row['cmstw_textone'];
            $ftwtwo = $row['cmstw_texttwo'];

            // You can use $fname, $fimg, $fone, $ftwo here or store them in an array
            // and then use them as needed.

            $records[] = array(
                'ftwname' => $ftwname,
                'ftwimg' => $ftwimg,
                'ftwone' => $ftwone,
                'ftwtwo' => $ftwtwo
            );
        }

        return $records;
    }

    public function getCMSRecordById($cmstw_id)
    {
        $query = "SELECT cmstw_id, cmstw_name, cmstw_img, cmstw_textone, cmstw_texttwo FROM cmsfromtwo WHERE cmstw_id = " . (int)$cmstw_id;
        $result = mysqli_query($this->dbgod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbgod));
        }

        $record = mysqli_fetch_assoc($result);

        return $record;
    }

    public function updateCMSRecord($cmstw_id, $new_values)
    {
        // $new_values is an associative array containing the columns to be updated
        // For example: $new_values = array('cms_name' => 'New Name', 'cms_img' => 'new_image.jpg', ...);

        // Build the SET part of the SQL query
        $set_clause = '';
        foreach ($new_values as $column => $value) {
            $set_clause .= "$column = '" . mysqli_real_escape_string($this->dbgod, $value) . "', ";
        }
        $set_clause = rtrim($set_clause, ', '); // Remove the trailing comma

        // Build the UPDATE query
        $query = "UPDATE cmsfromtwo SET $set_clause WHERE cmstw_id = " . (int)$cmstw_id;

        // Execute the query
        $result = mysqli_query($this->dbgod, $query);

        if (!$result) {
            die("Update query failed: " . mysqli_error($this->dbgod));
        }

        // Check if any rows were affected
        if (mysqli_affected_rows($this->dbgod) > 0) {
            echo "อัพเดมข้อมูลของท่านแล้ว.";
        } else {
            echo "ไม่สามารถทำการอัพเดทข้อมูลได้.";
        }
    }
}

class DB_aod
{
    private $dbaod; // Declare $dbgod as a class property

    function __construct()
    {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbaod = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // Function to fetch all records from 'cmsfromone' table
    public function getAllCMSRecords()
    {
        $query = "SELECT cmsthr_id, cmsthr_name, cmsthr_img, cmsthr_textone, cmsthr_texttwo FROM cmsfromthree";
        $result = mysqli_query($this->dbaod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbaod));
        }

        $records = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $fthrname = $row['cmsthr_name'];
            $fthrimg = $row['cmsthr_img'];
            $fthrone = $row['cmsthr_textone'];
            $fthrtwo = $row['cmsthr_texttwo'];

            // You can use $fname, $fimg, $fone, $ftwo here or store them in an array
            // and then use them as needed.

            $records[] = array(
                'fthrname' => $fthrname,
                'fthrimg' => $fthrimg,
                'fthrone' => $fthrone,
                'fthrtwo' => $fthrtwo
            );
        }

        return $records;
    }

    public function getCMSRecordById($cmsthr_id)
    {
        $query = "SELECT cmsthr_id, cmsthr_name, cmsthr_img, cmsthr_textone, cmsthr_texttwo FROM cmsfromthree WHERE cmsthr_id = " . (int)$cmsthr_id;
        $result = mysqli_query($this->dbaod, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->dbaod));
        }

        $record = mysqli_fetch_assoc($result);

        return $record;
    }

    public function updateCMSRecord($cmsthr_id, $new_values)
    {
        // $new_values is an associative array containing the columns to be updated
        // For example: $new_values = array('cms_name' => 'New Name', 'cms_img' => 'new_image.jpg', ...);

        // Build the SET part of the SQL query
        $set_clause = '';
        foreach ($new_values as $column => $value) {
            $set_clause .= "$column = '" . mysqli_real_escape_string($this->dbaod, $value) . "', ";
        }
        $set_clause = rtrim($set_clause, ', '); // Remove the trailing comma

        // Build the UPDATE query
        $query = "UPDATE cmsfromthree SET $set_clause WHERE cmsthr_id = " . (int)$cmsthr_id;

        // Execute the query
        $result = mysqli_query($this->dbaod, $query);

        if (!$result) {
            die("Update query failed: " . mysqli_error($this->dbaod));
        }

        // Check if any rows were affected
        if (mysqli_affected_rows($this->dbaod) > 0) {
            echo "อัพเดมข้อมูลของท่านแล้ว.";
        } else {
            echo "ไม่สามารถทำการอัพเดทข้อมูลได้.";
        }
    }
}

// Example usage:
$db = new DB_cod();
$twdb = new DB_god();
$thrdb = new DB_aod();
$cmsRecords = $db->getAllCMSRecords();
$cmstwRecords = $twdb->getAllCMSRecords();
$cmsthrRecords = $thrdb->getAllCMSRecords();

// Now $cmsRecords contains an array of records from 'cmsfromone' table
// print_r($cmsRecords);
