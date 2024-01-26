<?php
session_start();
include_once('connect.php');

if ($_SESSION['id'] == "") {
    header("location: ../sys_login/login.php");
} else {
    // Include the database class file
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cms_id = $_POST["cms_id"];
        $cms_name = $_POST["cms_name"];
        $cms_img = $_POST["cms_img"];
        $cms_textone = $_POST["cms_textone"];
        $cms_texttwo = $_POST["cms_texttwo"];

        // Update the CMS record
        $new_values = array(
            'cms_name' => $cms_name,
            'cms_img' => $cms_img,
            'cms_textone' => $cms_textone,
            'cms_texttwo' => $cms_texttwo
        );

        // Create an instance of the database class
        $db_cod = new DB_cod();

        // Update the record
        $db_cod->updateCMSRecord($cms_id, $new_values);

        // Display a JavaScript alert after updating
        echo "<script>alert('อัพเดตข้อมูลเรียบร้อยแล้ว'); window.location.href = document.referrer;</script>";
        exit; // Exit to prevent further execution
    }
}
?>