<?php
session_start();
include_once('functlogin.php');

$userdata = new DB_god();

if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $result = $userdata->signin($uname, $password);
    $num = mysqli_fetch_array($result);

    if ($num > 0) {
        $_SESSION['id'] = $num['id'];
        $_SESSION['fname'] = $num['fullname'];
        echo "<script>alert('เข้าสู่ระบบสำเร็จ');</script>";
        echo "<script>window.location.href='../sys_cms/fromcms.php'</script>";
    } else {
        echo "<script>alert('user หรือ รหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง.');</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="../img/01.png" type="image/png">
</head>

<style>
    body {
        font-family: "Itim", cursive;
        background-color: #F5EED8;
    }

    h1 {
        font-family: "Itim", cursive;
    }

    h2 {
        font-family: "Itim", cursive;
    }
</style>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="./home.html" class="navbar-brand">G&M ROOM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link active" aria-current="page">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            เกี่ยวกับ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../from1.php">ข้อมูลคอมพิวเตอร์</a>
                            <a class="dropdown-item" href="../from2.php">ข้อมูลฮาร์ดแวร์</a>
                            <a class="dropdown-item" href="../from3.php">ข้อมูลอื่น ๆ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            บริการ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../sys_searching/from_sear.php">ค้นหาข้อมูล</a>
                            <a class="dropdown-item" href="../map.html">แผนที่</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="../contact.php" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="./login.php" class="btn btn-outline-success">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>


    <div class="container">
        <h1 class="mb-3">เข้าสู่ระบบ</h1>
        <hr>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="username" onblur="checkusername
            (this.value)">
                <span id="usernameavailable"></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="login" class="btn btn-success">เข้าสู่ระบบ</button>
            <!--<a href="./indexRel.php" class="btn btn-primary">ลงทะเบียน-->

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>