<?php
session_start();
include_once('connect.php');

if ($_SESSION['id'] == "") {
    header("location: ../sys_login/login.php");
} else {
    // Include the database class file

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cmstw_id = $_POST["cmstw_id"];
        $cmstw_name = $_POST["cmstw_name"];
        $cmstw_img = $_POST["cmstw_img"];
        $cmstw_textone = $_POST["cmstw_textone"];
        $cmstw_texttwo = $_POST["cmstw_texttwo"];

        // Update the CMS record
        $new_values = array(
            'cmstw_name' => $cmstw_name,
            'cmstw_img' => $cmstw_img,
            'cmstw_textone' => $cmstw_textone,
            'cmstw_texttwo' => $cmstw_texttwo
        );

        // Create an instance of the database class
        $db_god = new DB_god();

        // Update the record
        $db_god->updateCMSRecord($cmstw_id, $new_values);

        // Display a JavaScript alert after updating
        echo "<script>alert('อัพเดตข้อมูลเรียบร้อยแล้ว'); window.location.href = document.referrer;</script>";
        exit; // Exit to prevent further execution
    }
}
?>