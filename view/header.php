<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tam Store</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./public/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./public/css/styles.css" rel="stylesheet" />
    <link href="./public/css/mystyle.css" rel="stylesheet" />
</head>

<body>
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-while">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php"><img src="public/img/logo.jpg" alt="" class=""
                    style="width: 180px; height: 80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=gioithieu">Giới thiệu</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Danh mục</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?act=allsanpham">Tất cả sản phẩm</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <?php
                            foreach ($dsdm as $dm) {
                                echo '<li><a class="dropdown-item" href="index.php?act=allsanpham&id=' . $dm['id'] . '">' . $dm['tendm'] . '</a></li>';
                            }
                            ?>
                            <!-- <li><a class="dropdown-item" href="index.php?act=jodan">Nike Jodan</a></li>
                            <li><a class="dropdown-item" href="index.php?act=airforce">Nike Airfoce</a></li> -->
                        </ul>
                    </li>
                    
            
                    
                    <?php
                    if (isset($_SESSION['username']) && ($_SESSION['username'] != "")) {
                        echo '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">' . $_SESSION['username'] . '</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.php?act=thoat">Logout</a></li>                                   
                                    <li><a class="dropdown-item" href="index.php?act=thongtinuser">Update</a></li>
                                </ul>
                            </li> ';
                    } else {

                    ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=dangnhap">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=dangki">Đăng ký</a></li>

                    <?php } ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=lienhe">Liên hệ</a></li>

                </ul>
                
                <form class="d-flex">
                    
                    <a class="btn btn-outline-dark" type="submit" href="index.php?act=viewcart">
                        <i class="bi-cart-fill me-1"></i>
                        Giỏ hàng
                        <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                    </a>
                </form>
            </div>
        </div>

    </nav>

    <!-- Header--
    <header class="bg-secondary py-3">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center">
                <h1 class="display-4 fw-bolder">Tam Store</h1>
                <p class="lead fw-normal text-black-50 mb-0">Welcome to everyone go here</p>
               
            </div>
        </div> 
    </header>-->
    