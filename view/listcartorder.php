<?php
    if(empty($dataDb)){
        echo '
            <div class="gird">
                <h1 style="color: red;" class="flex justify-center align-center mt-80 mb-80">Chưa có sản phẩm nào trong giỏ hàng</h1>
            </div>
        ';
    }else{
        $sum_total = 0;
?>
<?php 
    $cart = $_SESSION['cart'];

    // tạo mảng chứa id các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');
    // chuyển mảng thành chuỗi
    $idList = implode(',', $productId);
    // lấy sản phẩm trong bảng sản phẩm theo id 
    $dataDb = loadone_sanphamCart($idList); 
?>
<div class="gird">
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
                                        <input type="number" class="number-input" value="<?= $quantityInCart ?>" id="quantity_<?= $product['id'] ?>" min="1" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                                    </div>
                                </div>
                                <div class="cart-l__item-price"><?= number_format((int)$product['price'] * (int)$quantityInCart,0,",",".")?><u>đ</u></div>
                                <button class="cart-l__item-delete" onclick="removeFromCart(<?= $product['id'] ?>)">
                                    <i class="cart-l__item-delete-icon ti-trash"></i>
                                </button>
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
                    <div class="cart-r__content-name">
                        <div class="cart-r__content-name-heading">Tên</div>
                        <input class="cart-r__content-input" type="text" value="<?=$name?>">
                    </div>
                    <div class="cart-r__content-number">
                        <div class="cart-r__content-number-heading">Số điện thoại</div>
                        <input class="cart-r__content-input" type="text" placeholder="Số điện thoại...">
                    </div>
                    <div class="cart-r__content-address">
                        <div class="cart-r__content-address-heading">Địa chỉ</div>
                        <input class="cart-r__content-input" type="text" placeholder="Địa chỉ...">  
                    </div>
                    <div class="cart-r__content-info">
                        <div class="cart-r__content-info-sum">
                            <div class="info-text">Tổng tiền hàng</div>
                            <div class="info-price"><?= number_format((int)$sum_total,0,",",".")?></div>
                        </div>
                        <div class="cart-r__content-info-transport">
                            <div class="info-text">Tổng tiền hàng</div>
                            <div class="info-price"></div>  
                        </div>
                        <div class="cart-r__content-info-total">
                            <div class="info-text">Tổng tiền hàng</div>
                            <div class="info-price">397.500đ</div>
                        </div>
                    </div>
                    <div class="cart-r__content-btn">
                        <button type="submit">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id,index){
        // lấy giá trị của ô input 
        let newQuantity = $('#quantity_' + id).val();
        // console.log(newQuantity);
        if(newQuantity <= 0){
            newQuantity = 1
        }

        // gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updatequantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response){
                // sau khi cập nhật thành công 
                $.post('view/tablecartorder.php', function(data){
                    $('#order').html(data);
                })
            },
            error: function(response){
                console.log(error);
            },
        })
    }
    function removeFromCart(id){
        if(confirm('bạn chắc xóa chứ?')){
            // gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFromCart.php',
                data: {
                    id: id,
                },
                success: function(response){
                    // sau khi cập nhật thành công 
                    $.post('view/tablecartorder.php', function(data){
                        $('#order').html(data);
                    })
                },
                error: function(response){
                    console.log(error);
                },
            })
        }   
    }
</script>
<?php
    }
?>

    