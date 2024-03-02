<?php 
   session_start();

   // Kiểm tra xem giỏ hàng đã được khởi tạo chưa
   if (!isset($_SESSION['cart'])) {
       $_SESSION['cart'] = array(); // Nếu không, khởi tạo giỏ hàng là một mảng trống
   }
   
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       // lấy dữ liệu từ ajax đẩy lên thông qua method post
       $productId = $_POST['id'];
       $productName = $_POST['name'];
       $productPrice = $_POST['price'];
    
       // Kiểm tra xem giỏ hàng đã được khởi tạo chưa (có thể không cần thiết nếu đã đảm bảo trước)
       if (!isset($_SESSION['cart'])) {
           $_SESSION['cart'] = array(); // Nếu không, khởi tạo giỏ hàng là một mảng trống
       }
   
       // kiểm tra sản phẩm đã có trong giỏ hàng chưa
       $index = array_search($productId, array_column($_SESSION['cart'], 'id'));
       if($index !== false){
           $_SESSION['cart'][$index]['quantity'] += 1;
       }else { 
           // nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
           $product = [
               'id' => $productId,
               'name' => $productName,
               'price' => $productPrice,
               'quantity' => 1
           ];
           $_SESSION['cart'][] = $product;
       }
       // trả về số lượng sản phẩm của giỏ hàng
       echo count($_SESSION['cart']);
   }else {
       echo 'yêu cầu không hợp lệ';
   }
?>