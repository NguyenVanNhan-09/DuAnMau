<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/sanpham.php";
    include "../../model/taikhoan.php";
    include "../../model/danhmuc.php";
    include "../../assets/globals.php";

    // kiểm tra xem giỏ hàng có dữ liệu hay không 
    if(!empty($_SESSION['cart'])){
        $cart = $_SESSION['cart'];

        // tạo mảng chứa id các sản phẩm trong giỏ hàng
        $productId = array_column($cart, 'id');
        // chuyển mảng thành chuỗi
        $idList = implode(',', $productId);
        // lấy sản phẩm trong bảng sản phẩm theo id 
        $dataDb = loadone_sanphamCart($idList); 

        $sum_total = 0;

        // Hiển thị thông tin giỏ hàng ở đây
?>
        <div class="width-full">
            <a href="#" class="cart-l__heading-link">
                <div class="cart-l__heading">
                    <i class="cart-l__heading-icon ti-angle-left"></i>
                    <h2 class="cart-l__heading-text">Giỏ hàng</h2>
                </div>
            </a>

            <div class="cart-l__sub">
                <div class="cart-l__sub-heading">Sản Phẩm</div>
                <div class="cart-l__sub-desc">bạn có <?=count($cart)?> sản phẩm trong giỏ hàng</div>
            </div>
            <ul class="cart-l__list">
<?php
        foreach($dataDb as $key => $product) :
            //kiểm tra số lượng sản phẩm trong giỏ hàng
            $quantityInCart = 0;
            foreach($_SESSION['cart'] as $item){
                if ($item['id'] == $product['id']) {
                    $quantityInCart = $item['quantity'];
                    break;
                }    
            }
?>
                <li class="cart-l__item">
                    <div class="cart-l__item-link">
                        <div class="cart-l__item-img" style="background-image: url('<?=$img_path.$product['img']?>')"></div>
                        <div class="cart-l__item-name">
                            <div class="cart-l__item-name-main"><?= $product['name'] ?></div>
                            <div class="cart-l__item-name-sub">nữ diễn viên sinh đẹp</div>
                        </div>
                        <div class="cart-l__item-quantity">
                            <div class="input-wrapper">
                                <input type="number" class="number-input" value="<?= $quantityInCart ?>" id="quantity_<?= $product['id'] ?>" min="1" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                            </div>
                        </div>
                        <div class="cart-l__item-price"><?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?><u>đ</u></div>
                        <button class="cart-l__item-delete" onclick="removeFromCart(<?= $product['id'] ?>)">
                            <i class="cart-l__item-delete-icon ti-trash"></i>
                        </button>
                    </div>
                </li>
<?php 
            $sum_total += ((int)$product['price'] * (int)$quantityInCart);
            // lưu tổng giá trị vào session
            $_SESSION['resultTotal'] = $sum_total;
        endforeach;
?>
            </ul>
        </div>
        <h1>Tổng : <span><?= number_format($sum_total,0,",",".")?></span></h1>
        <a href="index.php?act=bill"><button class="button-40" role="button">Đặt hàng</button></a>
<?php
    }
?>
