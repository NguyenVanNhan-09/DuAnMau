
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
                                <input class="ctn__form-add-input" type="text" name="address" value="<?= $updateAcc['address']?>" >
                                <label for="">Số điện thoại</label>
                                <input class="ctn__form-add-input" type="text" name="tele" value="<?= $updateAcc['tele']?>" >
                                <label>Quền hạn</label>
                                <select name="roll" class="form__select">
                                    <option value="0" <?php echo ($updateAcc['roll'] == 0) ? 'selected' : ''; ?>>Khách hàng</option>
                                    <option value="1" <?php echo ($updateAcc['roll'] == 1) ? 'selected' : ''; ?>>Admin</option>
                                </select>
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

