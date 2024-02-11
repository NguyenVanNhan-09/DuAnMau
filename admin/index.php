<?php
ob_start();
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "header.php";

    //controler
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch ($act) {
            /****************************************************************
             *                              DANH MỤC                        *
             ****************************************************************/
            
            // add danh mục
            case 'add_dm':
                // kiểm tra người dùng có click vào add hay không
                if(isset($_POST['addnew']) && ($_POST['addnew'])){
                    $tenLoai=$_POST['tenloai'];
                    add_danhmuc($tenLoai);
                    header("Location: index.php?act=list_dm");
                    exit();
                }
                include "danhmuc/add.php";
                break;
            // list danh mục
            case 'list_dm':
                $listDanhMuc = list_danhmuc();
                include "danhmuc/list.php";
                break;

            // delete danh mục
            case 'delete_dm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    delete_danhmuc($_GET['id']);
                }
                $listDanhMuc = list_danhmuc();
                include "danhmuc/list.php";
                break;
                
            // update danh mục
            case 'update_dm':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $updateDm = update_danhmuc($id);
                }
                include 'danhmuc/update.php';
                break;

            // upload danh muc
            case 'upload_dm':
                if(isset($_POST['upload']) && ($_POST['upload'])){
                    $tenLoai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    upload_danhmuc($tenLoai,$id);
                }
                $listDanhMuc = list_danhmuc();
                include "danhmuc/list.php";
                break;
            /****************************************************************
             *                              SẢN PHẨM                        *
             ****************************************************************/
            // add sản phẩm
             case 'add_sp':
                if(isset($_POST['addnew']) && ($_POST['addnew'])){
                    $nameSp = $_POST['namesp'];
                    $priceSp = $_POST['pricesp'];
                    $detailSp = $_POST['detailsp'];
                    $idDm = $_POST['iddm'];
                    $imgSp = $_FILES['imgsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                    move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file);
                    add_sanpham($nameSp, $priceSp, $detailSp, $imgSp, $idDm);
                    header("location: index.php?act=list_sp");
                    exit();
                }
                $listDanhMuc = list_danhmuc();
                include "sanpham/add.php";
                break;
            
            // list sản phẩm
            case 'list_sp':
                // search theo danh mục và tên
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $keyWord=$_POST['keyword'];
                    $idDm = $_POST['iddm'];
                }else{
                    $keyWord = "";
                    $idDm = 0;
                }
                $listDanhMuc = list_danhmuc();
                $listSanPham = list_sanpham($keyWord, $idDm);
                include "sanpham/list.php";
                break;
            // delete sản phẩm
            case 'delete_sp':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                };
                $listSanPham = list_sanpham("",0);
                include "sanpham/list.php";
                break;
            // update sản phẩm 
            case 'update_sp':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $updateSp = update_sanpham($id);
                };
                $listDanhMuc = list_danhmuc();
                include "sanpham/update.php";
                break;

            // upload sản phẩm
            case 'upload_sp':
                if(isset($_POST['upload']) && ($_POST['upload'])){
                    $id = $_POST['id'];
                    $nameSp = $_POST['namesp'];
                    $priceSp = $_POST['pricesp'];
                    $detailSp = $_POST['detailsp'];
                    $idDm = $_POST['iddm'];
                    $imgSp = $_FILES['imgsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['imgsp']['name']);
                    move_uploaded_file($_FILES['imgsp']['tmp_name'], $target_file);
                    // upload lên
                    upload_sanpham($id, $nameSp, $priceSp, $imgSp, $detailSp, $idDm);
                };
                $listDanhMuc = list_danhmuc();
                $listSanPham = list_sanpham("",0);
                include "sanpham/list.php";
                break;

            /****************************************************************
            *                              KHÁCH HÀNG                       *
            ****************************************************************/
            case 'list_acc':
                $listAcc = list_acc();
                include "taikhoan/list.php";
                break;
            case 'update_acc':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $updateAcc = update_acc($id);
                }
                include "taikhoan/update.php";
                break;
            case 'upload_acc':
                if(isset($_POST['upload_acc'])&&($_POST['upload_acc'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tele = $_POST['tele'];
                    upload_acc($id,$name,$email,$pass,$address,$tele);
                }
                $listAcc = list_acc();
                include "taikhoan/list.php";
                break;
            case 'delete_acc':
                $id = $_GET['id'];
                if(isset($_GET['id'])&&($_GET['id'])){
                    delete_acc($id);
                };
                $listAcc = list_acc();
                include "taikhoan/list.php";
                break;
            /****************************************************************
            *                              bình luận                       *
            ****************************************************************/

            
            default:
                include "home.php";
                break;
        }

    } else {
        include "home.php";
    };





    include "footer.php";
ob_end_flush();
?>