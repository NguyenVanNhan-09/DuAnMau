<?php
    session_start();
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/taikhoan.php";
    include "./assets/globals.php";

    $listDanhMucUser = list_danhmuc();
    $listSanPhamUserFavorite = list_sanpham_user_favorite();
    $listSanPhamUser = list_sanpham_user();

    // Không bao gồm header.php cho trường hợp 'taikhoan'
    if (!(isset($_GET["act"]) && $_GET["act"] === "login")&&!(isset($_GET["act"]) && $_GET["act"] === "register")) {
        include "./view/header.php";
    }

    // Logic điều hướng
    if(isset($_GET["act"]) && $_GET["act"] != ""){
    $act = $_GET['act'];
    switch ($act) {

        // Chi tiết sản phẩm
        case 'detail_product':
            $id = $_GET['id'];
            if(isset($id) && ($id > 0)){
                $detailSp = detail_product($id);
                $idDm = $detailSp['id_dm'];
                $listProductSk = detail_product_samekind($id,$idDm);
                include "./view/detailproduct.php";
            }else{
                include "./view/home.php";
            };
            break;

        // Sản phẩm
        case 'product':
            if(isset($_POST['kyw']) && ($_POST['kyw']!= "")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                $idDm = $_GET['iddm'];
            }else{
                $idDm = 0;
            };
            $dsSp = list_sanpham($kyw, $idDm);
            $nameDm = load_name_dm($idDm);
            include "./view/product.php";
            break;

        // Tài khoản
        
        case 'register':
            if(isset($_POST['register']) && $_POST['register']!= ""){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                add_acc($name, $email, $pass);
                // $noti = "bạn đã đăng kí thành công vui lòng đăng nhập để mua hàng";
                header("Location: index.php?act=login");
            }
            include "./view/taikhoan/register.php";
            break;
        case 'login':
            if(isset($_POST['loginacc']) && $_POST['loginacc']){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $checkacc = check_acc($email,$pass);
                if(is_array($checkacc)){
                    $_SESSION['acc'] = $checkacc;
                    header("location: index.php");
                }else{
                    $noti = "tài khoản hoặc mật khẩu không đúng";
                };
            };
            include "./view/taikhoan/login.php";
            break;
        case 'update_acc':
            $id = $_GET['idtk'];
            if(isset($_GET['idtk']) && ($_GET['idtk'] > 0)){
                $updateAcc = update_acc($id);
            }
            include "./view/taikhoan/update_acc.php";
            break;
        case 'upload_acc':
            // ...
            break;
        default:
            include "./view/home.php";
            break;
    } 

    }else{
        include "./view/home.php";
    }

    // Không bao gồm footer.php cho trường hợp 'taikhoan'
    if (!(isset($_GET["act"]) && $_GET["act"] === "login") && !(isset($_GET["act"]) && $_GET["act"] === "register")) {
        include("./view/footer.php");
    }


?>
