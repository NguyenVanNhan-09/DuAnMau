
    <!-- login -->
    <div class="login">
        <div class="gird">
            <div class="gird__row justify-center">  
                <div class="login-content">
                    <div class="form">
                        <div class="form__heading">update acc</div>
                        <form action="index.php?act=login" method="post" class="form__input">
                            <input type="hidden" name="id">
                            <input type="text" name="email" value="<?= $updateAcc['email']?>">
                            <input type="text" name="pass" value="<?= $updateAcc['pass']?>">
                            <input class="form__btn" name="upload_acc" type="submit" value="cập nhật">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
