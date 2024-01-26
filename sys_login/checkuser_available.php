<?php

    include_once('functlogin.php');

    $usernamecheck = new DB_god();


    $uname = $_POST['username'];

    $sql = $usernamecheck->usernameavailable($uname);

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        echo "<span style='color: red;'>มีการสมัครด้วยuserนี้อยู่ในระบบแล้ว.</span>";
        echo "<script>$('#submit').prop('disabled', true);</script>";
    } else {
        echo "<span style='color: green;'>userสามารถใช้ได้.</span>";
        echo "<script>$('#submit').prop('disabled', false);</script>";
    }

?>