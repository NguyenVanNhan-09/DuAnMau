<link rel="stylesheet" href="../../assets/style/admin.css">
<div class="admin__ctn">
                    <div class="gird__row-admin ctn__content">
                        <h1 class="ctn__heading">Thêm mới sản phẩm</h1>
                        
                        <!-- form add -->
                        <div class="ctn__form">
                            <form action="index.php?act=add_dm" method="post" class="ctn__form-add">
                                <label for="">Tên sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="tensanpham" require>
                                <label for="">Giá sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="giasanpham" required>
                                <label for="">Ảnh sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="anhsanpham" required>
                                <label for="">Mô tả chi tiết sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="motasanpham" required>
                                <label for="">Danh mục sản phẩm</label>
                                <input class="ctn__form-add-input" type="text" name="danhmucsanpham" required>
                                <h2 style="color:green">
                                    <?php 
                                        if(isset($thongBao) && ($thongBao != "")){
                                            echo $thongBao;
                                        };
                                    ?>
                                </h2>
                                <!-- btn -->
                                <div class="ctn__form-btn">
                                    <input class="btn" type="submit" name="addnew" value="Thêm mới">
                                    <input class="btn" type="reset" name="submit" value="Nhập lại">
                                    <a href="index.php?act=list_sp"><input class="btn" type="button" name="submit" value="Danh sách"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>