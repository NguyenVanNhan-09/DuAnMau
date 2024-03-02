<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Cập nhật loại hàng</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=update_bill" method="post" class="ctn__form-add">
                                <label>Tình trạng</label>
                                <?php if ($onebill['status'] == 0) : ?>
                                    <select class="ctn__form-add-input" name="status">
                                        <option value="0" <?php echo ($onebill['status'] == 0) ? 'selected' : ''; ?>>Đơn hàng mới</option>
                                        <option value="1" <?php echo ($onebill['status'] == 1) ? 'selected' : ''; ?>>Đang xử lý</option>
                                        <option value="2" <?php echo ($onebill['status'] == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                        <option value="3" <?php echo ($onebill['status'] == 3) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                        <option value="4" <?php echo ($onebill['status'] == 4) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                    </select>
                                <?php elseif ($onebill['status'] == 1) : ?>
                                    <select class="ctn__form-add-input" name="status">
                                        <option value="1" <?php echo ($onebill['status'] == 1) ? 'selected' : ''; ?>>Đang xử lý</option>
                                        <option value="2" <?php echo ($onebill['status'] == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                        <option value="3" <?php echo ($onebill['status'] == 3) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                        <option value="4" <?php echo ($onebill['status'] == 4) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                    </select>
                                <?php elseif ($onebill['status'] == 2) : ?>
                                    <select class="ctn__form-add-input" name="status">
                                        <option value="2" <?php echo ($onebill['status'] == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                        <option value="3" <?php echo ($onebill['status'] == 3) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                        <option value="4" <?php echo ($onebill['status'] == 4) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                    </select>
                                <?php else : ?>
                                    <select class="ctn__form-add-input" name="status">
                                        <option value="4" <?php echo ($onebill['status'] == 4) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                    </select>
                                <?php endif ?>
                                
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input type="hidden" name="id" value="<?php echo $onebill['id'] ?>">
                                    <input class="btn" type="submit" name="update_bill" value="Cập nhât">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_dh"><input class="btn" type="button" name="submit" value="Danh sách"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>