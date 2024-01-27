<?php
ob_start();
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";

    //controler
    if(isset($_GET['act'])){
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
                    insert_danhmuc($tenLoai);
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
                    $thongBao = "Cập nhật thành công";
                }
                $listDanhMuc = list_danhmuc();
                include "danhmuc/list.php";
                break;
                







            /****************************************************************
             *                              SẢN PHẨM                        *
             ****************************************************************/
            case 'add_sp':
                include "sanpham/add.php";
                break;
            case 'list_sp':
                $sql = "SELECT * FROM sanpham order by id desc";
                $listSanPham = pdo_query($sql);
                include "sanpham/list.php";
                break;
            case 'delete_sp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sql = "DELETE FROM sanpham WHERE id=$id";
                    pdo_execute($sql);
                };
                // $sql = "SELECT * FROM sanpham order by id desc";
                // $listSanPham = pdo_query($sql);
                // include "sanpham/list.php";
                // break;





            // khách hàng
            // bình luận
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