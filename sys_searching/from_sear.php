<?php
session_start();

// Include the functions file
include('functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G&M ROOM</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Add an image to the head section (favicon) -->
    <link rel="icon" href="../img/01.png" type="image/png">

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="../home.html" class="navbar-brand">G&M ROOM</a>
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
                            <a class="dropdown-item" href="#">ค้นหาข้อมูล</a>
                            <a class="dropdown-item" href="../map.html">แผนที่</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="../contact.php" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="../sys_login/login.php" class="btn btn-outline-success">เข้าสู่ระบบผู้ดูแล</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <div class="container mt-5">
        <!-- Search Form -->
        <form method="post" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ใส่ชื่อที่ต้องการค้นหา" name="searchTerm" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">ค้นหา</button>
                </div>
            </div>
        </form>

        <!-- Display Search Results -->
        <?php
        // Display search results here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchTerm = $_POST["searchTerm"];
            echo "<h3>ผลการค้นหา '$searchTerm':</h3>";
            displaySearchData($searchTerm);
        }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>


    <!-- Footer -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted">&copy; จัดทำโดย วิทยาลัยเทคนิคนครศรีธรรมราช. </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>