<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/style/base.css">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/product.css">
    <link rel="stylesheet" href="./assets/style/login-out.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
</head>
<body>
    <div class="main">

        <!-- header -->
        <header class="header">
            <div class="topheader">
                <div class="gird__full-width">
                    <div class="topheader-content gird">
                        <div class="topheader__left">
                            <a href="#" class="topheader__left-link-languages">
                                <div class="topheader__left-languages languages-has-option">
                                    <div class="topheader__left-languages-content">
                                        <i class="topheader__left-languages-icon ti-world"></i>
                                        <p class="topheader__left-languages-text">Vietnamese</p>
                                        <i class="icon__agle-down ti-angle-down"></i>
                                    </div>
                                    <ul class="topheader__left-language-list">
                                        <li class="topheader__left-language-item">
                                            <a href="#" class="topheader__left-language-item-link">
                                                <i class="topheader__left-language-item-icon ti-map-alt"></i>
                                                VietNamese
                                            </a>
                                        </li>
                                        <li class="topheader__left-language-item">
                                            <a href="#" class="topheader__left-language-item-link">
                                                <i class="topheader__left-language-item-icon ti-map-alt"></i>
                                                Japanese
                                            </a>
                                        </li>
                                        <li class="topheader__left-language-item">
                                            <a href="#" class="topheader__left-language-item-link">
                                                <i class="topheader__left-language-item-icon ti-map-alt"></i>
                                                English
                                            </a>
                                        </li>
                                        <li class="topheader__left-language-item">
                                            <a href="#" class="topheader__left-language-item-link">
                                                <i class="topheader__left-language-item-icon ti-map-alt"></i>
                                                France
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                            <a href="#" class="topheader__left-link-unit">
                                <div class="topheader__left-unit">
                                    <p class="topheader__left-unit-text">vnđ</p>
                                    <i class="icon__agle-down ti-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <ul class="topheader__right">
                            <li class="right__item">
                                <a href="#" class="right__item-link">
                                    <i class="right__item-icon ti-user"></i>
                                    <div class="right__item-text js-register-btn">Tài khoản của tôi</div>
                                </a>
                            </li>
                            <li class="right__item">
                                <a href="index.php?act=product" class="right__item-link">
                                    <i class="right__item-icon ti-heart"></i>
                                    <div class="right__item-text">Danh sách yêu thích</div>
                                </a>
                            </li>
                            <li class="right__item">
                                <a href="../../DuAnMau/admin" class="right__item-link">
                                    <i class="right__item-icon ti-check-box"></i>
                                    <div class="right__item-text">Quyền hạn</div>
                                </a>
                            </li>
                            <li class="right__item">
                                <?php 
                                    if(isset($_SESSION['acc'])){
                                        extract($_SESSION['acc']);
                                ?>
                                    <a href="index.php?act=login" class="right__item-link">
                                        <div class="right__item-content has-option">
                                            <div class="right__item-link-text">
                                                <i class="right__item-icon ti-key"></i>
                                                <div class="right__item-text"><?=$name?></div>
                                            </div>
                                            <ul class="right__item__select">
                                                <li>
                                                    <a href="index.php?act=edit" class="right__item__option">cập nhật tài khoản</a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=forget" class="right__item__option">quên mật khẩu</a>
                                                </li>
                                                <li>
                                                    <a href="admin/index.php" class="right__item__option">đăng nhập admin</a>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=exit" class="right__item__option">thoát</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </a>
                                <?php
                                    }else{
                                ?>
                                    <a href="index.php?act=login" class="right__item-link">
                                        <div class="right__item-content has-option">
                                            <div class="right__item-link-text">
                                                <i class="right__item-icon ti-key"></i>
                                                <div class="right__item-text">tài khoản</div>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>
            <div class="centerheader">
                <div class="gird">
                    <div class="gird__row centerheader__widget-content"> 
                        <div class="gird__col-3">
                            <div class="centerheader__logo">
                                <a href="index.php" class="centerheader__logo-link">
                                    <img class="centerheader__logo-img" src="./assets/img/logo_X-shop.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="gird__col-9">
                            <div class="centerheader__widget-wrap">
                                <div class="gird__row">
                                    <!-- widget-item -->
                                    <div class="gird__col-9-3">
                                        <a href="#" class="centerheader__widget-item-link">
                                            <div class="centerheader__widget-item">
                                                <div class="centerheader__widget-item-icon">
                                                    <i class="ti-truck"></i>
                                                </div>
                                                <div class="centerheader__widget-item-text">
                                                    <div class="centerheader__widget-item-heading">GIAO HÀNG MIỄN PHÍ</div>
                                                    <div class="centerheader__widget-item-sub">Với đơn hàng trên $100</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- widget-item -->
                                    <div class="gird__col-9-3">
                                        <a href="#" class="centerheader__widget-item-link">
                                            <div class="centerheader__widget-item">
                                                <div class="centerheader__widget-item-icon">
                                                    <i class="ti-cloud-down"></i>
                                                </div>
                                                <div class="centerheader__widget-item-text">
                                                    <div class="centerheader__widget-item-heading">GIẢM GIÁ LÊN ĐẾN 20%</div>
                                                    <div class="centerheader__widget-item-sub">Khách hàng rất vui</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- widget-item -->
                                    <div class="gird__col-9-3">
                                        <a href="#" class="centerheader__widget-item-link">
                                            <div class="centerheader__widget-item">
                                                <div class="centerheader__widget-item-icon">
                                                    <i class="ti-gift"></i>
                                                </div>
                                                <div class="centerheader__widget-item-text">
                                                    <div class="centerheader__widget-item-heading">MUA 1 TẶNG 1</div>
                                                    <div class="centerheader__widget-item-sub">Với đơn hàng trên $100</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nav -->
            <div class="nav">
                <div class="gird">
                    <div class="gird__row nav__content">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="index.php" class="nav__item-link">Trang chủ</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__item-link">Danh mục</a>
                                <!-- subnav -->
                                <ul class="subnav__list">
                                    <?php foreach($listDanhMucUser as $dm) : ?>
                                        <li class="subnav__item">
                                            <a href="index.php?act=product&iddm=<?=$dm['id']?>" class="subnav__item-link"><?=$dm['name']?></a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__item-link">Giới thiệu</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__item-link">Liên hệ</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__item-link">Góp ý</a>
                            </li>
                            <li class="nav__item">
                                <a href="#" class="nav__item-link">Hỏi đáp</a>
                            </li>
                        </ul>
                        <div class="nav__search">
                            <form action="index.php?act=product" method="post">
                                <input type="text" name="kyw" class="nav__search-input" placeholder="tìm kiếm sản phẩm">
                                <i class="nav__search-input-icon ti-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
