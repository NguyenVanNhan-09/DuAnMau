<?php 
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idPro = $_REQUEST['idPro'];
    $listComment = list_comment($idPro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/style/product.css">
    <link rel="stylesheet" href="/assets/style/base.css">
</head>
<body>
    <div class="gird__row product__evaluate">
        <div class="product__evaluate-heading">Đánh giá sản phẩm</div>
        <ul class="product__evaluate-list">
            <?php foreach ($listComment as $cm) : ?>
                <li class="product__evaluate-item"><?= $cm['noidung'] . ' - ' . $cm['id_user'] . ' - ' . $cm['ngaybinhluan']; ?></li>
            <?php endforeach;?>
        </ul>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="product__evaluate-form">
            <input type="hidden" name="idPro" value="<?=$idPro?>">
            <input class="product__evaluate-input" type="text" name="textcomment">
            <input type="submit" name="addcomment" class="product__evaluate-btn" value="Gửi">
        </form>
        <?php 
            ob_start();
            if(isset($_POST['addcomment']) && ($_POST['addcomment'])){
                $noiDung = $_POST['textcomment'];
                $idPro = $_POST['idPro'];
                $idUser = $_SESSION['name']['id'];
                $ngayBinhLuan = date('h:i:sa d/m/Y');
                add_comment($noiDung,$idUser,$idPro,$ngayBinhLuan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
                exit();
            }
            ob_end_flush();
        ?>
    </div>
</body>
</html>
