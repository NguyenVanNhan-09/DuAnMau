
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Sửa tài khoản</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=upload_acc" method="post" class="ctn__form-add">
                                <label for="">Tên</label>
                                <input class="ctn__form-add-input" type="text" name="name" value="<?= $updateAcc['name']?>" required>
                                <label for="">Email</label>
                                <input class="ctn__form-add-input" type="text" name="email" value="<?= $updateAcc['email']?>" required>
                                <label for="">Mật khẩu</label>
                                <input class="ctn__form-add-input" type="text" name="pass" value="<?= $updateAcc['pass']?>" required>
                                <label for="">Địa chỉ</label>
                                <input class="ctn__form-add-input" type="text" name="address" value="<?= $updateAcc['address']?>" required>
                                <label for="">Số điện thoại</label>
                                <input class="ctn__form-add-input" type="text" name="tele" value="<?= $updateAcc['tele']?>" required>
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input type="hidden" name="id" value="<?php if(isset($updateAcc['id']) && $updateAcc['id'] > 0) echo $updateAcc['id']; ?>">
                                    <input class="btn" type="submit" name="upload_acc" value="Cập nhật">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_acc"><input class="btn" type="button" name="submit" value="Danh sách"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

