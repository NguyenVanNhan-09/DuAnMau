 <!-- content -->
 <div class="product">
            <div class="gird">
                <div class="gird__row product__content">
                    <div class="product__images">
                        <?php $img=$img_path.$detailSp['img']?>
                        <div class="product__images-main" style="background-image: url('<?=$img?>');"></div>
                        <div class="product__images-share"></div>
                    </div>
                    
                    <div class="product__info">
                        <div class="product__info-name"><?= $detailSp['name'] ?></div>
                        <div class="product__info-rank">
                            <div class="product__info-rank-quatity pr-15 pl-10 border-right">4.0</div>
                            <div class="mb-0 fz-1-1 lh-1 pr-15 pl-10">
                                <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="product__info-rank-sold pr-15 pl-10 border-right border-left"><span class="product__info-rank-sold-quantity pr-10"><?=$detailSp['view']?></span>lượt xem</div>
                        </div>
                        <div class="product__info-price">
                            <div class="product__info-price-old">150.000</div>
                            <div class="product__info-price-new"><?=$detailSp['price']?> usđ</div>
                        </div>
                        <div class="product__info-shipping">
                            <div class="product__info-shipping-title">Vận chuyển</div>
                            <div class="product__info-shipping-list">
                                <div class="product__info-shipping-item">
                                    <div class="product__info-shipping-item-icon ti-money"></div>
                                    Miễn phí vận chuyển
                                </div>
                                <div class="product__info-shipping-item">
                                    <div class="product__info-shipping-item-icon ti-location-pin"></div>
                                    Vận chuyển tới :
                                </div>
                                <div class="product__info-shipping-item">
                                    <div class="product__info-shipping-item-icon ti-truck"></div>
                                    Phí vận chuyển : 0đ
                                </div>
                            </div>
                        </div>
                        <div class="product__info-quantity">
                            <div class="product__info-quantity-title">Số lượng</div>
                            <div class="product__info-quantity-btn">
                                <button><i class="ti-minus"></i></button>
                                <input type="number">
                                <button><i class="ti-plus"></i></button>
                            </div>
                        </div>
                        <div class="product__info-btn">
                            <div class="product__info-btn-buy">
                                <button>mua ngay</button>
                            </div>
                            <div class="product__info-btn-cw">
                                <button class="product__info-btn-cart">
                                    <i class="product__info-btn-cart-icon ti-shopping-cart"></i>
                                    thêm vào giỏ hàng
                                </button>
                                <button class="product__info-btn-wishlist">
                                    <i class="product__info-btn-cart-icon ti-heart"></i>
                                    thêm vào yêu thích
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gird__row product__detail">
                    <div class="product__detail-heading">Mô tả sản phẩm</div>
                    <div class="product__detail-text">
                        <?= $detailSp['detail'] ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#comment").load("view/binhluan/form_comment.php", {idPro: <?= $detailSp['id'] ?>});
                    });
                </script>
                <div id="comment"></div>

                <div class="gird__row product__samekind">
                    <div class="product__samekind-heading">Sản phẩm cùng loại</div>
                    <div class="favorite-product__list width-full">
                        <div class="gird__row">
                            <?php foreach($listProductSk as $spSk) : ?>
                                <?php $img = $img_path.$spSk['img'];?>
                            <div class="gird__col-2-4 product-item">
                                <!-- favorite-product__item -->
                                <a href="index.php?act=detail_product&id=<?=$spSk['id']?>" class="favorite-product__item">
                                    <div class="favorite-product__item-img" style="background-image: url('<?=$img?>');"></div>
                                    <!-- <img src="/upload/" alt="" style="width: 100px;height: 100px;"> -->
                                    <!-- <img src="./assets/img/img_slider-7.jpg" alt="" class="favorite-product__item-img"> -->
                                    <div class="favorite-product__item-content">
                                        <div class="favorite-product__item-name"><?=$spSk['name']?></div>
                                        <div class="favorite-product__item-price"><?=$spSk['price']?></div>
                                        <div class="favorite-product__item__rank">
                                            <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                            <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                            <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                            <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <a class="product__samekind-more" href="index.php?act=product&iddm=<?=$detailSp['id_dm']?>">xem thêm</a>
                </div>
            </div>
        </div>