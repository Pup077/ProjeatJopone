<?php
session_start();
include("./sys_cms/connect.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ชนิดของคอมพิวเตอร์</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/01.png" type="image/png">

    <style>
        body {
            font-family: "Itim", cursive;
            background-color: #fff9c4;
        }

        h1 {
            font-family: "Itim", cursive;
        }

        h2 {
            font-family: "Itim", cursive;
        }

        header {
            background: url('./img/16.jpg') no-repeat center center;
            background-size: cover;
            padding-top: 8rem;
            padding-bottom: 8rem;
            height: 500px;
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
                        <a href="./sys_login/login.php" class="btn btn-outline-success">เข้าสู่ระบบ</a>
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
                    <h3 style="font-size:600%; color:#00695c;">CPU</h3>
                </div>
            </div>
            </form>
        </div>
        </div>
        </div>
    </header>
    <br>

    <!-- Body-->

    <div class="text-center">
        <div class="content">
            '<img src="./img/16.jpg" width="560" height="415" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <h3 style="color: rgb(0, 110, 201);">CPU คืออะไร</h3>
        </div>
    </div>


    <div class="container overflow-hidden">
        <div class="row gy-5">
            <div class="col-12">
                <br>
                <h5 style="font-size:130%;"><b> CPU หรือหน่วยประมวลผลกลางเป็นส่วนประกอบฮาร์ดแวร์ที่เป็นหน่วยคำนวณหลักในเซิร์ฟเวอร์ เซิร์ฟเวอร์และอุปกรณ์อัจฉริยะอื่นๆ จะแปลงข้อมูลเป็นสัญญาณดิจิทัลและดำเนินการทางคณิตศาสตร์กับอุปกรณ์เหล่านั้น CPU เป็นองค์ประกอบหลักที่ประมวลผลสัญญาณและทำให้สามารถประมวลผลได้ ซึ่งทำหน้าที่เป็นสมองของอุปกรณ์ประมวลผลต่างๆ โดยจะดึงคำสั่งจากหน่วยความจำ ดำเนินการตามที่จำเป็น และส่งเอาต์พุตกลับไปยังหน่วยความจำ จัดการงานประมวลผลทุกประเภทที่จำเป็นสำหรับเรียกใช้ระบบปฏิบัติการและแอปพลิเคชันต่างๆ</h5>
                <br>
                <a href="./from11.php" class="btn btn-primary btn-lg btn-block"><- กลับ</a> </p>

                        <br>
                        <!-- Footer -->
                        <footer class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="text-muted">&copy; จัดทำโดย นายอดิเทพ ชลสิทธิ์ และ
                                            นางสาวอนุตรา ดารามัน. </p>
                                    </div>
                                </div>
                            </div>
                        </footer>


                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>