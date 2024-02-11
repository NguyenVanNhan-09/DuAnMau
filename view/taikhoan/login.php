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
    <!-- login -->
    <div class="login">
        <div class="gird">
            <div class="gird__row">
                <div class="login-content">
                    <div class="intro">
                        <div class="intro__heading">Welcome to [X-shop]</div>
                        <div class="intro__desc">
                            Ở đây, chúng tôi tin rằng việc xây dựng mạng lưới chuyên nghiệp vững mạnh bắt đầu từ sự tham gia của bạn. Chúng tôi rất vui mừng được cung cấp dịch vụ hiện đại và thân thiện với người dùng để đảm bảo bạn có trải nghiệm tốt nhất.
                        </div>
                        <div class="intro__img" style="background-image: url(./assets/img/Frame.png);"></div>
                    </div>
                    <div class="form">
                        <div class="form__heading">Login</div>
                        <form action="index.php?act=login" method="post" class="form__input">
                            <input type="email" placeholder="nhập name" name="email">
                            <input type="password" placeholder="nhập password" name="pass">
                            <div class="form__link">
                                <span>bạn chưa có tài khoản? <a class="form__has-acc" href="index.php?act=register">đăng ký</a></span>
                                <a class="form__forget" href="#">quên mật khẩu?</a>
                            </div>
                            <input class="form__btn" name="loginacc" type="submit" value="Đăng nhập">
                        </form>
                        <h2 class="error-color text-center width-85">
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
                        <a href="index.php?act=home">quay vể home</a>   

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>