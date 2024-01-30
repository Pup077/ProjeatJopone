<?php
session_start();
include_once('connect.php');

if ($_SESSION['id'] == "") {
    header("location: ../sys_login/login.php");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>จัดการระบบเว็ป</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/customcms.css">
        <link rel="icon" href="../img/01.png" type="image/png">
    </head>

    <style>
        body {
            font-family: "Itim", cursive;
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
                <a href="#" class="navbar-brand">G&M ROOM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <span class="navbar-text">
                            <b>ยินดีต้อนรับ <?php echo $_SESSION['fname']; ?> เข้าสู่ระบบ</b>
                        </span>
                        <li class="nav-item ml-auto">
                            <a href="../sys_login/logout.php" class="btn btn-outline-danger">ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <!--body-->

        <!-- Side Menu -->
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="./fromcms.php">
                                    หน้าแรก
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    หน้ารวมข้อมูล
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    แก้ไขข้อมูล
                                </a>
                                <!-- Dropdown items -->
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./editfromone.php">หน้า 1</a>
                                    <a class="dropdown-item" href="./editfromtwo.php">หน้า 2</a>
                                    <a class="dropdown-item" href="./editfromthree.php">หน้า 3</a>
                                    <!-- Add more dropdown items as needed -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./indexnumberview.php">
                                    สถิติการเข้าเว็ปไซต์
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <!-- Jumbotron/hero section -->
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4">หน้ารวมข้อมูล</h1>
                    <p></p>

                </div>
            </div>

            <!-- Content Section -->
            <div class="card bg-white text-white">
                <a href="../from17.php" target="_blank">
                    <img class="card-img" src="../img/03.png " width="560" height="300" class="img-thumbnail" alt="Image" alt="Card image cap">
                    <div class="card-img-overlay">
                        <h1 class="card-title">ไวรัสคอมพิวเตอร์</h1>
                        <h3>
                            <p class="card-text">ไวรัสคอมพิวเตอร์ มีอะไรบ้าง</p>
                        </h3>
                        <h4>ดูเนื้อหา</>
                        </h4>
                    </div>
                    <br>
                    <div class="card bg-white text-white">
                        <div class="card bg-white text-white">
                            <a href="../from18.php" target="_blank">
                                <img class="card-img" src="../img/19.jpg " width="560" height="300" class="img-thumbnail" alt="Image" alt="Card image cap">
                                <div class="card-img-overlay">
                                    <h1 class="card-title">จอภาพ</h1>
                                    <h3>
                                        <p class="card-text">จอภาพ คืออะไร</p>
                                    </h3>
                                    <h4>ดูเนื้อหา</>
                                    </h4>
                                </div>
                                </div>
                               

                                <p><a href="#" class="btn btn-primary">หน้าต่อไป</a>
                                    <br>
                                    <p><a href="./dataviewfor.php" class="btn btn-primary">กลับ</a>
                                        <br>
                                        <br>

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

<?php

}
?>