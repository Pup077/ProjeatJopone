<?php
session_start();
include("./sys_cms/connect.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เรื่องอื่นๆที่เกี่ยวข้อง</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom3.css">

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

    <!-- Header-->
    <header class="text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h3 style="font-size:600%; color:#da1d1d;">เรื่องอื่นๆที่เกี่ยวข้อง
                    </h3>
                </div>
            </div>
            </form>
        </div>
    </header>
    <br>

    <!-- Body-->
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <?php
                // Check if there are records
                if (!empty($cmsthrRecords)) {
                    // Include a link to the detailed view
                    echo '<a href="./from4.php">';
                    echo '<img class="card-img-top" src="' . $cmsthrRecords[0]['fthrimg'] . '" alt="Card image cap">';
                    echo '</a>';
                } else {
                    echo '<p>No records found.</p>';
                }
                ?>
                <div class="card-body">
                    <?php
                    // Check if there are records
                    if (!empty($cmsthrRecords)) {
                        echo '<h5 class="card-title">' . $cmsthrRecords[0]['fthrone'] . '</h5>';
                        // Reduce the number of characters displayed for fthrtwo
                        echo '<p class="card-text">' . substr($cmsthrRecords[0]['fthrtwo'], 0, 150) . '...</p>';
                        echo '</a>';
                    } else {
                        echo '<p>No records found.</p>';
                    }
                    ?>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <a href="./from5.php">
                <div class="card">
                    <img class="card-img-top" src="./img/02.png " width="560" height="400" class="img-thumbnail" alt="Image" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">การป้องกันไวรัส</h5>
                        <p class="card-text">วิธีการป้องกัน ไวรัสคอมพิวเตอร์</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </a>

            <a href="./from6.php">
                <div class="card">
                    <img class="card-img-top" src="./img/09.jpg " width="560" height="400" class="img-thumbnail" alt="Image" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">ชนิดของคอมพิวเตอร์</h5>
                        <p class="card-text">  คอมพิวเตอร์ในรุ่นปัจจุบันก็ยังถือว่าอยู่ในคอมพิวเตอร์รุ่นที่ ๔ นี้  ในปัจจุบันคอมพิวเตอร์ได้ใช้วงจรเบ็ดเสร็จขนาดใหญ่มาก (very large scale integrated circuit) </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </a>
            
        </div>
    </div>
    </div>
    <br>


    <div class="text-center">
        <p><a href="./index.php" class="btn btn-primary" style="width:1300px;"><- หน้าแรก</a> </p>
        <a href="#" class="btn btn-primary" style="width:1300px;">ต่อไป -></a>

        <br>
        <br>
        <br>
    </div>

    <!-- Footer -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted">&copy; จัดทำโดย วิทยาลัยเทคนิคนครศรีธรรมราช.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>