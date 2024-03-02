<?php
    session_start();
    ob_start();
    include "./model/pdo.php";
    include "./model/danhmuc.php";
    include "./model/sanpham.php";
    include "./model/taikhoan.php";
    include "./model/cart.php";
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
                exit();
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
                    exit();
                }else{
                    $noti = "tài khoản hoặc mật khẩu không đúng";
                };
            };
            include "./view/taikhoan/login.php";
            break;
        case 'update_acc':
            if(isset($_POST['upload_acc']) && $_POST['upload_acc']!=""){
                $id=$_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tele = $_POST['tele'];
                upload_acc($id,$name,$email,$pass,$address,$tele);
                $_SESSION['acc']=check_acc($email,$pass);
                header("location: index.php?act=update_acc");
                exit(); // Stop further execution after redirect
            }
            include "./view/taikhoan/update_acc.php";
            break;
        case 'forget_pass':
            if(isset($_POST['forgetpass']) && $_POST['forgetpass']!=""){
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if(is_array($checkemail)){
                    $noti = "Mật khẩu của bạn là ".$checkemail['pass'];
                }else{
                    $noti = "Email của bạn không tồn tại";
                }
            }
            include './view/taikhoan/forget_pass.php';
            break;  
        case 'exit_acc':
            session_unset();
            header("location: index.php");
            break;
        // cart
        case 'list_cart': 
            // kiểm tra xem giỏ hàng có dữ liệu hay không 
            if(!empty($_SESSION['cart'])){
                $cart = $_SESSION['cart'];

                // tạo mảng chứa id các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'id');
                // chuyển mảng thành chuỗi
                $idList = implode(',', $productId);
                // lấy sản phẩm tron bảng sản phầm theo id 
                $dataDb = loadone_sanphamCart($idList);
            }
            include 'view/cart/listcartorder.php';
            break;
        case 'bill': 
            
            // kiểm tra xem giỏ hàng có dữ liệu hay không 
            if(!empty($_SESSION['cart'])){
                $cart = $_SESSION['cart'];
                // var_dump($_SESSION['img']);
                // tạo mảng chứa id các sản phẩm trong giỏ hàng
                $productId = array_column($cart, 'id');
                // chuyển mảng thành chuỗi
                $idList = implode(',', $productId);
                // lấy sản phẩm tron bảng sản phầm theo id 
                $dataDb = loadone_sanphamCart($idList);
            }
            include 'view/bill.php';
            break;
        case 'bill_confirm':
            if (isset($_POST['billconfirm'])) {
                if(isset($_SESSION['acc'])) $idUser = $_SESSION['acc']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $tele = $_POST['tele'];
                $address = $_POST['address'];
                $orderDate = date('Y-m-d H:i:s');
                $sumTotal = $_POST['sum_total'];
                // Kiểm tra xem ô radio "paymethod" đã được chọn hay chưa
                if(isset($_POST['paymethod'])) {
                    // Lấy giá trị của ô radio "paymethod"
                    $payMethod = $_POST['paymethod'];
                    // Tiếp tục xử lý dữ liệu
                    $idbill = add_bill($name,$tele,$address,$orderDate,$sumTotal,$payMethod,$idUser);
                    foreach($_SESSION['cart'] as $cart){
                        add_cart($_SESSION['acc']['id'],$cart['name'],$cart['price'],$cart['quantity'],$_SESSION['resultTotal'],$idbill);
                    }
                } else {
                    // Xử lý trường hợp không có phương thức thanh toán được chọn
                    // Ví dụ: Hiển thị thông báo lỗi
                    echo "Vui lòng chọn phương thức thanh toán";
                }   
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            include 'view/cartUser.php';
            break;
        case 'my_bill':
            $listBill = loadall_bill($_SESSION['acc']['id']);
            include "view/mybill.php";
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

    ob_end_flush();
?>
