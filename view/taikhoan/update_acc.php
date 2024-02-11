<?php 
    if(is_array($_SESSION['acc'])&&isset($_SESSION['acc'])){
        $acc = $_SESSION['acc'];
    }
?> 
    <!-- login -->
    <div class="login">
        <div class="gird">
            <div class="gird__row justify-center">  
                <div class="login-content">
                    <div class="form">
                        <div class="form__heading">update acc</div>
                        <form action="index.php?act=update_acc" method="post" class="form__input">
                            <input type="hidden" name="id" value="<?php if(isset($acc['id']) && ($acc['id']>0)) echo $acc['id']; ?>">
                            <label for="">Name</label>
                            <input type="text" name="name" value="<?= $acc['name']?>">
                            <label for="">Email</label>
                            <input type="text" name="email" value="<?= $acc['email']?>">
                            <label for="">Password</label>
                            <input type="text" name="pass" value="<?= $acc['pass']?>">
                            <label for="">Address</label>
                            <input type="text" name="address" value="<?= $acc['address']?>">
                            <label for="">telephone</label>
                            <input type="text" name="tele" value="<?= $acc['tele']?>">
                            <input class="form__btn" name="upload_acc" type="submit" value="cập nhật">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
