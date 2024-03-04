<?php 
    if(isset($_SESSION['acc'])){
        $sum_total = 0;
        $cart = $_SESSION['cart'];

        // tạo mảng chứa id các sản phẩm trong giỏ hàng
        $productId = array_column($cart, 'id');
        // chuyển mảng thành chuỗi
        $idList = implode(',', $productId);
        // lấy sản phẩm trong bảng sản phẩm theo id 
        $dataDb = loadone_sanphamCart($idList); 
?>
<div class="gird">
    <form action="index.php?act=bill_confirm" method="post" enctype="multipart/form-data">
        <div class="cart">
            <div class="gird__row cart__content" id="order">
                <div class="cart-l">
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
                                    <div class="cart-l__item-img"
                                        style="background-image: url('<?=$img_path.$product['img']?>')"></div>
                                    <div class="cart-l__item-name">
                                        <div class="cart-l__item-name-main"><?= $product['name'] ?></div>
                                        <div class="cart-l__item-name-sub">nữ diễn viên sinh đẹp</div>
                                    </div>
                                    <div class="cart-l__item-quantity">
                                        <div class="input-wrapper">
                                            <input disabled class="number-input" name="quantityincart" value="<?= $quantityInCart ?>" id="quantity_<?= $product['id'] ?>" min="1">
                                        </div>
                                    </div>
                                    <div class="cart-l__item-price"><?= number_format((int)$product['price'] * (int)$quantityInCart,0,",",".")?><u>đ</u></div>
                                </div>
                            </li>
                        <?php 
                            $sum_total += ((int)$product['price'] * (int)$quantityInCart);
                            // lưu tổng giá trị vào secssion
                            $_SESSION['resultTotal'] = $sum_total;
                            endforeach;?>
                    </ul>
                </div>
                <?php 
                    if(isset($_SESSION['acc'])){
                        $name = $_SESSION['acc']['name'];
                        $address = $_SESSION['acc']['address'];
                        $email = $_SESSION['acc']['email'];
                        $tele = $_SESSION['acc']['tele'];
                    }else{
                        $name  = "";
                        $address = "";
                        $email = "";
                        $tele  = "";
                    }
                ?>
                <div class="cart-r">
                    <div class="cart-r__content">
                        <div class="cart-r__content-heading">Thanh toán</div>
                        <div class="cart-r__content-card">
                            <div class="cart-r__content-card-heading">Loại thẻ</div>
                            <div class="cart-r__content-card-list">
                                <img src="./assets/img/card1.png" class="cart-r__content-card-img"></img>
                                <img src="./assets/img/card2.png" class="cart-r__content-card-img"></img>
                                <img src="./assets/img/card3.png" class="cart-r__content-card-img"></img>
                                <img src="./assets/img/card.png" class="cart-r__content-card-img"></img>
                            </div>
                        </div>
                        <?php 
                            if(isset($_SESSION["acc"])){
                                $name = $_SESSION["acc"]["name"];
                                $tele = $_SESSION["acc"]["tele"];
                                $address = $_SESSION["acc"]["address"];
                            }else{
                                $name = "";
                                $tele = "";
                                $address = "";
                            }
                        ?>
                        <div class="cart-r__content-name">
                            <div class="cart-r__content-name-heading">Tên</div>
                            <input class="cart-r__content-input" id="name" name="name" type="text" value="<?= $name?>">
                        </div>
                        <div class="cart-r__content-number">
                            <div class="cart-r__content-number-heading">Số điện thoại</div>
                            <input class="cart-r__content-input" id="tele" name="tele" type="text" value="<?= $tele?>">
                        </div>
                        <div class="cart-r__content-address">
                            <div class="cart-r__content-address-heading">Địa chỉ</div>
                            <input class="cart-r__content-input" id="address" name="address" type="text" value="<?= $address?>">  
                        </div>
                        <div>
                            <div class="cart-r__content-address-heading">Phương thức thanh toán</div>
                            <div class="flex justify-around">
                                <div class="flex align-center"><input name="paymethod" type="radio" value="1" checked><span class="text__pay-method">Thanh toán khi nhận hàng</span></div>
                                <div class="flex align-center"><input name="paymethod" type="radio" value="2"><span class="text__pay-method">Thanh toán online</span></div>
                            </div>
                        </div>
                        <div class="cart-r__content-info">
                            <div class="cart-r__content-info-sum">
                                <div class="info-text">Tổng tiền hàng</div>
                                <div class="info-price"><?= number_format((int)$sum_total,0,",",".")?>đ</div>
                            </div>
                            <div class="cart-r__content-info-transport">
                                <div class="info-text">Tiền vận chuyển</div>
                                <div class="info-price">0đ</div> 
                            </div>
                            <div class="cart-r__content-info-total">
                                <div class="info-text">Tổng tiền hàng</div>
                                <div class="info-price"><?= number_format(((int)$sum_total),0,",",".")?>đ</div>
                            </div>
                        </div>
                        <div class="cart-r__content-btn">
                            <input type="hidden" name="sum_total" value="<?= $sum_total ?>">
                            <button onclick="return kiemtraform()" type="submit" name="billconfirm">Buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <script>
        //Validate thông báo chưa nhập
        function kiemtraform() {
            var name = document.getElementById("name");
            if (name.value == "") {
                alert("Vui lòng nhập tên!");
                name.focus();
                return false;
            }
            var address = document.getElementById("address");
            if (address.value == "") {
                alert("Vui lòng nhập địa chỉ!");
                address.focus();
                return false;
            }
            var tele = document.getElementById("tele");
            if (tele.value == "") {
                alert("Vui lòng nhập sdt!");
                tele.focus();
                return false;
            }
            var confirmPayment = confirm("Xác nhận thanh toán?");
            if (confirmPayment) {
                return true; // Nếu người dùng chấp nhận, tiếp tục thanh toán
            } else {
                return false; // Nếu người dùng không chấp nhận, không thanh toán
            }
        }
    </script>
</div>
<?php 
    } else {
?>
<div class="gird">
    <h1 style="color: red;" class="flex justify-center align-center mt-80 mb-80">Bạn phải đăng nhập để có thể mua hàng</h1>
</div>
<?php 
    }
?>
    