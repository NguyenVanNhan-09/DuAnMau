<!-- forget password -->
<div class="login">
    <div class="gird">
        <div class="gird__row justify-center">  
            <div class="login-content">
                <div class="form">
                    <div class="form__heading">Quên mật khẩu</div>
                    <form action="index.php?act=forget_pass" method="post" class="form__input">
                        <input type="hidden" name="id" value="<?php if(isset($acc['id']) && ($acc['id']>0)) echo $acc['id']; ?>">
                        <label for="">Nhập Email</label>
                        <input type="text" name="email" placeholder="Vui lòng nhập email để lấy lại mật khẩu">
                        <h2 class="error-color text-center width-85">
                            <?php
                                if(isset($noti) && ($noti != "")){
                                    echo $noti;
                                }
                            ?>
                        </h2>
                        <input class="form__btn" name="forgetpass" type="submit" value="gửi">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
