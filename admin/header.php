<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../assets/style/base.css">
    <link rel="stylesheet" href="../assets/style/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/themify-icons/themify-icons.css">
</head>
<body>
    <div class="main">
        <div class="gird__full-width">
            <div class="gird__row-full-width">
                <!-- sidebar -->
                <div class="gird__18">
                    <div class="sidebar">
                        <ul class="sidebar__list">
                            <!-- logo -->
                            <li class="sidebar__logo">
                                <a class="sidebar__logo-link" href="index.php">
                                    <span class="sidebar__logo-img"></span>
                                    <span class="sidebar__logo-text">X - Shop</span>
                                </a>
                            </li>
                            <!-- end logo -->
                            <li class="sidebar__item">
                                <a href="index.php" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Trang chủ</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_dm" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Danh mục</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_sp" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Hàng hoá</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_acc" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Khánh hàng</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_comment" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Bình luận</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_dh" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Đơn hàng</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_tk" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Thống kê</span>
                                </a>
                            </li>
                            <li class="sidebar__item">
                                <a href="index.php?act=list_sach" class="sidebar__item-link">
                                    <span class="sidebar__item-icon ti-home"></span>
                                    <span class="sidebar__item-text">Sách</span>
                                </a>
                            </li>
                            <div class="sidebar__bottom">
                                <li class="sidebar__item">
                                    <a href="../../DuAnMau_backup/" class="sidebar__item-link">
                                        <span class="sidebar__item-icon ti-home"></span>
                                        <span class="sidebar__item-text">Người dùng</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                
                <!-- container -->
                <div class="gird__82 admin">
                    <!-- header -->
                    <div class="admin__header">
                            <div class="header__content">
                                <div class="header__topic">Admin</div>
                                <form action="#" method="post" class="header__from-search">
                                    <input type="text" name="" class="header__search" placeholder="Nhập để tìm kiếm">
                                </form>
                                <div class="header__user">
                                    <a href="#" class="header__user-setting-link">
                                        <i class="header__user-setting-icon ti-settings"></i>
                                    </a>
                                    <a href="#" class="header__user-notify-link">
                                        <i class="header__user-notify-icon ti-bell"></i>
                                    </a>
                                    <a href="#" class="header__user-img-link">
                                        <div class="header__user-img" style="background-image: url(https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg);"></div>
                                    </a>
                                </div>
                            </div>
                    </div>
