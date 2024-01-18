<!-- đóng vai trò là controller -->
<!-- // Điều hướng -->
<?php
    // header
    include("./view/header.php");
    
    // content
    // logic điều hướng
    if(isset($_GET["act"]) && $_GET["act"] != ""){
        if($_GET["act"] == "product"){
            include("./view/product.php");
        }
    } else {
        include("./view/home.php");
    }
    
    
    








    // footer
    include("./view/footer.php");
?> 