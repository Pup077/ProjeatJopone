<?php
session_start();
include("./functcontact.php");

$contactdata = NEW DB_god();

if (isset($_POST['submit'])) {
    $cemail = $_POST['email'];
    $ctextone = $_POST['contextone'];
    $ctexttwo = $_POST['contexttwo'];
    

    $sql = $contactdata->contact($cemail, $ctextone, $ctexttwo);

    if ($sql) {
        echo "<script>alert('ส่งข้อมูลสำเร็จ');</script>";     
    } else {
        echo "<script>alert('ส่งข้อมูลไม่สำเร็จกรุณาลองใหม่อีกครั้ง');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G&M ROOM</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Add an image to the head section (favicon) -->
    <link rel="icon" href="./img/01.png" type="image/png">

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
                        <a href="./index.php" class="nav-link active" aria-current="page">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            เกี่ยวกับ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./from1.php">ข้อมูลคอมพิวเตอร์</a>
                            <a class="dropdown-item" href="./from2.php">ข้อมูลฮาร์ดแวร์</a>
                            <a class="dropdown-item" href="./from3.php">ข้อมูลอื่น ๆ</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            บริการ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./sys_searching/from_sear.php">ค้นหาข้อมูล</a>
                            <a class="dropdown-item" href="./map.html">แผนที่</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="./contact.php" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="./sys_login/login.php" class="btn btn-outline-success">เข้าสู่ระบบผู้ดูแล</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

    <!--body-->

    <div class="section-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-container-spacer text-center">
                        <h1 class="h2">ช่องทางติดต่อ</h1>
                        <br>
                        <div class="text-center">
                            <div class="content">
                                <img src="./img/10.jpg" width="360" height="215" class="img-thumbnail" alt="Cinque Terre">
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" class="reveal-content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                        </div><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contextone" name="contextone" placeholder="หัวข้อ" required>
                                        </div><br>
                                        <div class="form-group">
                                            <textarea name="contexttwo" class="form-control" rows="5" placeholder="เรื่องที่ต้องการติดต่อ" required></textarea>
                                        </div><br>
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">ส่ง</button>
                                    </div>
                                    <div class="col-md-5 address-container">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </span>
                                                <b>กรุณาใส่อีเมล</b>
                                            </li>
                                            <br>
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa-at" aria-hidden="true"></i>
                                                </span>
                                                <b>กรุณาใส่หัวข้อ</b>
                                            </li>
                                            <br>
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                                </span>
                                                <b>กรุณาใส่เนื้อหาประกอบ</b>
                                            </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
