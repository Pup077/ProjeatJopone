<?php
session_start();
include("./sys_cms/connect.php");
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/01.png" type="image/png">

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

        /* Style for the image Showcase section */
        .showcase {
            background-color: #80cbc4;
            /* Set the background color */
            padding: 0px 0;
            /* Add padding for spacing */
        }

        /* Style for the Testimonials section */
        .testimonials {
            background-color: #afbfff;
            /* Set the background color for testimonials section */
            padding: 0px 0;
            /* Add padding for spacing */
        }

        .onemore {
            background-color: #81d4fa;
            /* Set the background color for onemore section */
            padding: 0px 0;
            /* Add padding for spacing */
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
                        <a href="#" class="nav-link active" aria-current="page">หน้าแรก</a>
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
                    <h1 class="mb-5">ค้นหาข้อมูลเกี่ยวกับคอมพิวเตอร์</h1>
                </div>

                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="text-center mx-auto">
                        <a href="./sys_searching/from_sear.php" class="btn btn-primary">ค้นหา</a></p>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </header>

    <!-- Features icons -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                            </svg>
                        </div>

                        <h3>รอบรู้ เรื่องไอที</h3>

                        <p class="lead mb-0">รู้และเข้าใจในเรื่องเทคโนโลยี</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-shield-fill" viewBox="0 0 16 16">
                                <path d="M5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                            </svg>
                        </div>

                        <h3>รู้เท่าทันและป้องกัน</h3>

                        <p class="lead mb-0">ป้องกัน อันตรายจากโลกอินเทอร์เน็ต</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                            </svg>
                        </div>

                        <h3>ปรึกษา ตลอด 24 ชั่วโมง</h3>

                        <p class="lead mb-0">เพื่อสอบถาม และให้คำตอบอย่างทันใจ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- image Showcase -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <?php
                // Check if there are records
                if (!empty($cmsRecords)) {
                    echo '<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url(' . $cmsRecords[0]['fimg'] . ')">';
                } else {
                    echo '<p>No records found.</p>';
                }
                ?>
            </div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <?php
                // Check if there are records
                if (!empty($cmsRecords)) {
                    echo '<h2>' . $cmsRecords[0]['fone'] . '</h2>';
                    echo '<p class="lead mb-0" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis;">' . $cmsRecords[0]['ftwo'] .
                        '</p> <h5>-><a href="./from1.php" style="color: black;">อ่านต่อ</a></h5>';
                } else {
                    echo '<p>No records found.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <?php
                // Check if there are records
                if (!empty($cmsRecords)) {
                    echo '<div class="col-lg-6 text-white showcase-img" style="background-image: url(' . $cmstwRecords[0]['ftwimg'] . ')">';
                } else {
                    echo '<p>No records found.</p>';
                }
                ?>
            </div>
            <div class="col-lg-6 my-auto showcase-text">
                <?php
                // Check if there are records
                if (!empty($cmstwRecords)) {
                    echo '<h2>' . $cmstwRecords[0]['ftwone'] . '</h2>';
                    echo '<p class="lead mb-0" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis;">' . $cmstwRecords[0]['ftwtwo'] . '</p>  <h5>-><a href="./from2.php" style="color: black;">อ่านต่อ</a></f5>';
                } else {
                    echo '<p>No records found.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="onemore">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/05.jpg')">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>เรื่องอื่นๆที่เกี่ยวข้อง</h2>
                    <p class="lead mb-0">ข้อมูลต่างๆ ที่จะทำให้คุณได้รู้และเข้าใจในเรื่องเทคโนโลยี -><a href="./from3.php" style="color: black;">ดู</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">คำแนะนำที่ค้นหาบ่อย</h2>

            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/08.jpg" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>แรมคืออะไร</h5>
                        <p class="font-weight-light mb-0">"แรมเปรียบเสมือนสมองสำรองของคอมพิวเตอร์"
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/02.png" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>การป้องกันไวรัส</h5>
                        <p class="font-weight-light mb-0">"เพื่อความปลอดถัยและรู้ทันภัยไซเบ้อ"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/09.jpg" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>ชนิดของคอมพิวเตอร์</h5>
                        <p class="font-weight-light mb-0">"คอมพิวเตอร์และรูปแบบการใช้งาน"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">รอบรู้เรื่องไอที</h2>
                </div>


            </div>
        </div>
    </section>

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