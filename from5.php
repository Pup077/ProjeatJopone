<?php
session_start();
include("./sys_cms/connect.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การป้องกันไวรัส</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom5.css">

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
                    <h3 style="font-size:600%; color:#dadada;">ป้องกันไวรัส</h3>';
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
            '<img src="./img/02.png" width="560" height="415" class="img-thumbnail" alt="Cinque Terre">
        </div>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <h3 style="color: rgb(0, 110, 201);">การป้องกันไวรัส</h3>
        </div>
    </div>


    <div class="container overflow-hidden">
        <div class="row gy-5">
            <div class="col-12">
                <br>
                <h5 style="font-size:110%;"><p>วิธีการป้องกัน ไวรัสคอมพิวเตอร์</p>

                        <p>ติดตั้งโปรแกรมป้องกันไวรัสและอัปเดตข้อมูลไวรัสอยู่เสมอ
                        <p>- ติดตั้งโปรแกรมป้องกันไวรัสที่เหมาะสม
                        <p>- สร้างแผ่น Emergency Disk เพื่อใช้ในการกู้ระบบ
                        <p>- อัปเดตข้อมูลไวรัสของโปรแกรมทุกวัน หรือ ทุกครั้งที่โปรแกรมแจ้งเตือนให้อัปเดต
                        <p>- เปิดใช้งาน auto-protect ถ้าโปรแกรมสนับสนุน
                        <p>- ตรวจสอบหาไวรัสทุกครั้งก่อนเปิดไฟล์จากแผ่นหรือสื่อบันทึกข้อมูลต่าง ๆ
                        <p>- ใช้โปรแกรมเพื่อทำการตรวจหาไวรัสบนเครื่องคอมพิวเตอร์อย่างน้อย 1 ครั้ง ต่อสัปดาห์

                        <p>ติดตั้งโปรแกรมอุดช่องโหว่(patch) โดยการอัปเดตซอฟต์แวร์และโปรแกรมประยุกต์ต่าง ๆ ให้ใหม่อยู่เสมอ</p>
                        <p>- ระบบปฏิบัติการ(OS) Windows , ระบบปฏิบัติการโปรแกรม Internet Explorer (IE) และโปรแกรม Microsoft Office เป็นต้น</p>

                        <p>ปรับแต่งให้ซอฟต์แวร์ที่ใช้งานปลอดภัยสูงที่สุด</p>
                        <p>- ปรับแต่งไม่ให้โปรแกรมที่ใช้อ่าน E-mail รันไฟล์แนบ(Attachment) โดยอัตโนมัติ</p>
                        <p>- ถ้าใช้ Microsoft Office ไม่ควรอนุญาตให้รันมาโคร (macro)</p>
                        <p>- ตั้งค่าระบบปฏิบัติการให้แสดงไฟล์ที่มีอยู่ทั้งหมด และแสดงนามสกุลของไฟล์ด้วยโดย ปรับ ค่าการทำงานที่ Folder Options ใน Tools ของ Windows Explorer</p></h5>
                <br>
                <a href="./from3.php" class="btn btn-primary btn-lg btn-block"><- หน้าแรก</a> </p>

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