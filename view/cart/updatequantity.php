<?php 
    session_start();

    // Kiểm tra xem giỏ hàng đã được khởi tạo chưa
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array(); // Nếu không, khởi tạo giỏ hàng là một mảng trống
    }
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // lấy dữ liệu từ ajax đẩy lên thông qua method post
        $productId = $_POST['id'];
        $newQuantity = $_POST['quantity'];

        // kiểm tra trong giỏ hàng có tồn tại sản phẩm hay không 
        if(!empty($_SESSION['cart'])){    
            // Kiểm tra xem giỏ hàng đã được khởi tạo chưa (có thể không cần thiết nếu đã đảm bảo trước)
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array(); // Nếu không, khởi tạo giỏ hàng là một mảng trống
            }

            // kiểm tra sản phẩm đã có trong giỏ hàng chưa
            $index = array_search($productId, array_column($_SESSION['cart'], 'id'));

            // nếu sản phẩm tồn tại cập nhật lại số lượng 
            if($index !== false){
                $_SESSION['cart'][$index]['quantity'] = $newQuantity;
            }else{
                echo 'Sản phẩm không tồn tại';
            }
        }else{
            echo "giỏ hàng không tồn tại";
        }
    }else {
        echo 'yêu cầu không hợp lệ';
    }
?>