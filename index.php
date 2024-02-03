<?php

include "./model/pdo.php";
include "./model/danhmuc.php";
include "./model/sanpham.php";
include "./assets/globals.php";

$listDanhMucUser = list_danhmuc();
$listSanPhamUserFavorite = list_sanpham_user_favorite();
$listSanPhamUser = list_sanpham_user();

    include "./view/header.php";

    // logic điều hướng
    if(isset($_GET["act"]) && $_GET["act"] != ""){
      $act = $_GET['act'];
      switch ($act) {
        case 'product':
            include "./view/product.php";
            break;
        default:
            include "./view/home.php";
            break;
      } 
    
    }else{
        include "./view/home.php";
    };
    








    // footer
    include("./view/footer.php");
?> 