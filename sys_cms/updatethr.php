<?php
session_start();
include_once('connect.php');

if ($_SESSION['id'] == "") {
    header("location: ../sys_login/login.php");
} else {
    // Include the database class file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cmsthr_id = $_POST["cmsthr_id"];
        $cmsthr_name = $_POST["cmsthr_name"];
        $cmsthr_img = $_POST["cmsthr_img"];
        $cmsthr_textone = $_POST["cmsthr_textone"];
        $cmsthr_texttwo = $_POST["cmsthr_texttwo"];

        // Update the CMS record
        $new_values = array(
            'cmsthr_name' => $cmsthr_name,
            'cmsthr_img' => $cmsthr_img,
            'cmsthr_textone' => $cmsthr_textone,
            'cmsthr_texttwo' => $cmsthr_texttwo
        );

        // Create an instance of the database class
        $db_aod = new DB_aod();

        // Update the record
        $db_aod->updateCMSRecord($cmsthr_id, $new_values);

        // Display a JavaScript alert after updating
        echo "<script>alert('อัพเดตข้อมูลเรียบร้อยแล้ว'); window.location.href = document.referrer;</script>";
        exit; // Exit to prevent further execution
    }
}
?>