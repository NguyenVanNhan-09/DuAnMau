<?php 
    if(isset($bill)&&(is_array($bill))){
        extract($bill);
    }
?>

<h2 style="text-align: center;">CẢM ƠN BẠN ĐÃ ĐẶT HÀNG</h2>
<div class="billcomfirm">
    <i class="fa-solid fa-bag-shopping" style="color: #009B48;font-size: 100px; margin-bottom:15px"></i>
    <h4>Cảm ơn bạn đã mua hàng</h4>
    <p>Chào <?php echo $bill['name'] ?>, đơn hàng của bạn với mã DA1-<?php echo $bill['id'] ?> đã được đặt thành công</p>
    <p>Chúng tôi sẽ liên hệ với bạn qua thông tin bạn cung cấp, dưới đây là thông tin bạn đã đặt hàng</p>
    <div class="content-bill">
    <div>
        <p>Mã đơn hàng: DA1-<?php echo $bill['id'] ?></li></p>
        <p>Ngày đặt hàng: <?php echo date('d/m/Y H:i:s', strtotime($bill['orderDate'])); ?></p>
        <p>Tổng đơn hàng: <?php echo number_format($bill['sum_total'], 0, ",", ".") ?> VND</p>
    </div>
    <div>
        <p>Người đặt hàng: <?php echo $bill['name'] ?></p>
        <p>Địa chỉ: <?php echo $bill['address'] ?></p>
        <p>Số điện thoại: <?php echo $bill['tele'] ?></p>
    </div>
</div>
<p>Phương thức thanh toán: <?php echo ($bill['pay_methhod'] == 1) ? "Thanh toán khi nhận hàng" : "Thanh toán online"; ?></p>
    <p>Cảm ơn <?php echo $bill['name'] ?> đã tin dùng sản phẩm của LapTopIa!</p>
    <div class="btn-a">
        <a href="index.php" style="margin-right:30px;">Tiếp tục mua hàng</a>
        <!-- <a href="index.php?act=mybill">Theo dõi đơn hàng</a> -->
    </div>
</div>