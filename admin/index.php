<?php
ob_start();
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "../model/sach.php";
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
                $listDanhMuc = list_danhmuc();
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
                    $roll = $_POST['roll'];
                    upload_acc($id,$name,$email,$pass,$address,$tele,$roll);
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
            case 'list_comment':
                $idPro = 0;
                $listComment = list_comment($idPro);
                include "binhluan/list.php";
                break;
            case 'delete_comment':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id']!="")){
                    delete_comment($id);
                }
                $idPro = 0;
                $listComment = list_comment($idPro);
                include "binhluan/list.php";
                break;
            /****************************************************************
            *                              đơn hàng                         *
            ****************************************************************/
            case 'list_dh':
                if(isset($_POST['keyword']) && $_POST['keyword'] != ""){
                    $keyword = $_POST['keyword'];
                }else{
                    $keyword = "";
                }
                $listBill =loadall_bill($keyword,0);
                include "order/list.php";
                break;
            case 'delete_bill':
                $id = $_GET['id'];
                if(isset($_GET['id']) && $_GET['id']!=""){
                    delete_bill($id);
                }
                $listBill =loadall_bill(0);
                include "order/list.php";
                break;
            case 'update_bill':
                if (isset($_GET['id']) & $_GET['id'] > 0) {
                    $onebill = loadone_bill($_GET['id']);
                }
                if (isset($_POST['update_bill'])) {
                    $status = $_POST['status'];
                    $id = $_POST['id'];
                    update_bill($id, $status);
                    header("location: index.php?act=list_dh");
                }
                include "order/edit.php";
                break;
            /****************************************************************
            *                             Thống kê                          *
            ****************************************************************/
            case 'list_tk':
                $listTk = loadall_tk();
                include "thongke/list.php";
                break;
            case 'list_bd':
                $listTk = loadall_tk();
                include "thongke/bieudo.php";
                break;
            /****************************************************************
            *                            sách                         *
            ****************************************************************/
            case 'list_sach':
                $listSach = list_sach();
                include "sach/list.php";
                break;
            case 'add_sach':
                if(isset($_POST['addnew']) && ($_POST['addnew'])){
                    $tensach = $_POST['tensach'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $idNxb = $_POST['id_nxb'];
                    $hinhanh = $_FILES['hinhanh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                    add_sach($tensach, $gia, $mota, $hinhanh, $idNxb);
                    header("location: index.php?act=list_sach");
                    exit();
                }
                $listNxb = list_nhaxuatban();
                include "sach/add.php";
                break;
            case 'delete_sach':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sach($id);
                };
                $listSach = list_sach();
                include "sach/list.php";
                break;
            case 'update_sach':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $updateSach = update_sach($id);
                };
                $listNxb = list_nhaxuatban();
                include "sach/update.php";
                break;
            case 'upload_sach':
                if(isset($_POST['upload']) && ($_POST['upload'])){
                    $id = $_POST['id'];
                    $tensach = $_POST['tensach'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $idNxb = $_POST['id_nxb'];
                    $hinhanh = $_FILES['hinhanh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES['hinhanh']['name']);
                    move_uploaded_file($_FILES['hinhanh']['tmp_name'], $target_file);
                    // upload lên
                    upload_sach($id, $tensach, $gia, $mota, $hinhanh, $idNxb);
                };
                $listSach = list_sach();
                include "sach/list.php";
                break;
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