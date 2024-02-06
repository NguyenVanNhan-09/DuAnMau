<div class="gird">
    <div class="home-product">
        <div class="gird__row content__heading">
            <h2 class="content__heading-text">Sản phẩm <?=$nameDm?></h2>
        </div>
        <div class="home-product__list">
            <div class="gird__row">
                <?php foreach($dsSp as $sp) : ?>
                    <?php $img=$img_path.$sp['img'];?>
                    <div class="gird__col-2-4 product-item">
                        <!-- home-product__item -->
                        <a href="index.php?act=detail_product&id=<?=$sp['id']?>" class="home-product__item" >
                            <div class="home-product__item-img" style="background-image: url('<?=$img?>');"></div>
                            <!-- <img src="./assets/img/img_slider-7.jpg" alt="" class="home-product__item-img"> -->
                            <div class="home-product__item-content">
                                <div class="home-product__item-name"><?= $sp['name']?></div>
                                <div class="home-product__item-price"><?= $sp['price']?></div>
                                <div class="home-product__item__rank">
                                    <i class="home-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="home-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>