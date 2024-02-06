<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/style/base.css">
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/product.css">
    <link rel="stylesheet" href="./assets/style/login-out.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
</head>
<body>
     <!-- resgister -->
    <div class="register">
        <div class="gird">
            <div class="gird__row">
                <div class="register-content">
                    <div class="form-register">
                        <div class="form__heading">Register</div>
                        <form action="index.php?act=register" class="form__input" method="post">
                            <input type="text" placeholder="nhập name" name="name" required>
                            <input type="email" placeholder="nhập email" name="email" required>
                            <input type="password" placeholder="nhập password" name="pass" required>
                            <div class="form__link">
                                <span>bạn đã có tài khoản?<a class="form__has-acc" href="index.php?act=login"> đăng nhập</a></span>
                            </div>
                            <input class="form__btn" type="submit" value="Đăng ký" name="register">
                        </form>
                        <h2 class="success-color text-center width-85">
                            <?php
                                if(isset($noti) && ($noti != "")){
                                    echo $noti;
                                }
                            ?>
                        </h2>
                        <div class="form__sub">Hoặc tiếp tục với</div>
                        <div class="form__app">
                            <a href="#" class="form__app-instagram"><i class="ti-instagram"></i></a>
                            <a href="#" class="form__app-tiwter"><i class="ti-twitter"></i></a>
                            <a href="#" class="form__app-tumblr"><i class="ti-tumblr"></i></a>
                            <a href="#" class="form__app-apple"><i class="ti-apple"></i></a>
                        </div>
                    </div>
                    <div class="intro-resgister">
                        <div class="intro__heading">Hãy đăng ký một tài khoản ở [X-shop]</div>
                        <div class="intro__desc">
                            Here, we believe that building a strong professional network begins with your participation. 
                            We are delighted to offer a modern and user-friendly service to ensure you have the best experience.</div>
                        <div class="intro__img" style="background-image: url(./assets/img/Frame.png);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>