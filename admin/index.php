<?php
ob_start();
    include "../model/pdo.php";
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
                    $sql="insert into danhmuc(name) values('$tenLoai')";
                    pdo_execute($sql);
                    header("Location: ?act=list_dm");
                    exit();
                }
                include "danhmuc/add.php";
                break;

            // list danh mục
            case 'list_dm':
                $sql="select * from danhmuc order by id desc";
                $listDanhMuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;

            // delete danh mục
            case 'delete_dm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sql = "DELETE FROM danhmuc WHERE id=".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="select * from danhmuc order by name";
                $listDanhMuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            // update danh mục
            case 'update_dm':
                $id = $_GET['id'];
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sql = "SELECT * FROM danhmuc where id=$id";
                    $updateDm = pdo_query_one($sql);
                }
                include 'danhmuc/update.php';
                break;
            // upload danh muc
            case 'upload_dm':
                if(isset($_POST['upload']) && ($_POST['upload'])){
                    $tenLoai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    $sql="update danhmuc set name='".$tenLoai."' where id=".$id;
                    pdo_execute($sql);
                    $thongBao = "Cập nhật thành công";
                }
                $sql="select * from danhmuc order by id desc";
                $listDanhMuc = pdo_query($sql);
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