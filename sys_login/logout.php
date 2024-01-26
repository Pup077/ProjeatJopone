<?php

    session_start();
    session_destroy();
    header("location: ../sys_login/login.php");

?>