<!-- slider -->
        <div class="slider">
            <div class="gird">
                <div class="gird__row">
                    <div class="gird__half">
                        <div class="slider__left">
                            <div class="slider__left-img">
                                <!-- Slideshow container -->
                                <div class="slideshow-container" style="height: 100%;">
                                    <!-- Full-width images with number and caption text -->
                                    <div class="mySlides fade" style="height: 100%;">
                                        <img class="slider__left-img" src="./assets/img/img__slider-4.jpg">
                                    </div>
                                
                                    <div class="mySlides fade" style="height: 100%;">
                                        <img class="slider__left-img" src="./assets/img/img__slider-2.jpg">
                                    </div>
                                
                                    <div class="mySlides fade" style="height: 100%;">
                                        <img class="slider__left-img" src="./assets/img/img__slider-3.jpg">
                                    </div>
                                
                                    <!-- Next and previous buttons -->
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    <!-- The dots/circles -->
                                    <div class="quantity__slider-left" style="text-align:center">
                                        <span class="dot" onclick="currentSlide(1)"></span>
                                        <span class="dot" onclick="currentSlide(2)"></span>
                                        <span class="dot" onclick="currentSlide(3)"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gird__half slider__right">
                        <div class="gird__half slider__right-top">
                            <div class="slider__right-top-img" style="background-image: url(./assets/img/img_slider-5.jpg);"></div>
                        </div>
                        <div class="gird__half slider__right-bottom">
                            <div class="gird__half mr-15">
                                <div class="slider__right-bottom-img" style="background-image: url(./assets/img/img_slider-6.jpg);"></div>
                            </div>
                            <div class="gird__half ml-15">
                                <div class="slider__right-bottom-img" style="background-image: url(./assets/img/img_slider-7.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- content -->
<div class="content">
    <div class="gird">
        <!-- favorite-product -->
        <div class="favorite-product">
            <div class="gird__row content__heading">
                <h2 class="content__heading-text">Sản phẩm yêu thích</h2>
            </div>
            <div class="favorite-product__list">
                <div class="gird__row">
                    <?php foreach($listSanPhamUserFavorite as $spf) : ?>
                    <?php $img = $img_path.$spf['img']?>
                    <div class="gird__col-2-4 product__item">
                        <!-- favorite-product__item -->
                        <a href="index.php?act=detail_product&id=<?=$spf['id']?>" class="favorite-product__item">
                            <div class="favorite-product__item-img" style="background-image: url('<?=$img?>');"></div>
                            <!-- <img src="./assets/img/img_slider-7.jpg" alt="" class="favorite-product__item-img"> -->
                            <div class="favorite-product__item-content">
                                <div class="favorite-product__item-name"><?=$spf['name']?></div>
                                <div class="favorite-product__item-price"><?=$spf['price']?></div>
                                <div class="favorite-product__item__rank">
                                    <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="favorite-product__item__star--gold fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </a>
                        <div class="product__item-overlayL">
                                <button
                                    data-id="<?=$spf['id']?>"
                                    class="cart__icon-link" 
                                    onclick="addToCart(<?=$spf['id']?>, '<?= $spf['name']?>', <?= $spf['price']?>)"
                                >
                                    <div class="text_icon">Giỏ hàng</div>
                                    <i class="cart__icon fa-solid fa-cart-plus"></i>
                                </button>
                        </div>
                        <div class="product__item-overlayR">
                            <button class="heart__icon-link">
                                <i class="heart__icon fa-solid fa-heart"></i>
                                <div class="text_icon">Yêu thích</div> 
                            </button>
                        </div>
                    </div>
                    <?php endforeach;?> 
                </div>
            </div>
        </div>

        <!-- home-product -->
        <div class="home-product">
            <div class="gird__row content__heading">
                <h2 class="content__heading-text">Sản phẩm mới nhất</h2>
            </div>
            <div class="home-product__list">
                <div class="gird__row">
                    <?php foreach($listSanPhamUser as $sp) : ?>
                        <?php $img=$img_path.$sp['img'];?>
                        <div class="gird__col-2-4 product__item pb-10">
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
                            <div class="product__item-overlayL">
                                    <button
                                        data-id="<?=$sp['id']?>"
                                        class="cart__icon-link" 
                                        onclick="addToCart(<?=$sp['id']?>, '<?= $sp['name']?>', <?= $sp['price']?>)"
                                    >
                                        <div class="text_icon">Giỏ hàng</div>
                                        <i class="cart__icon fa-solid fa-cart-plus"></i>
                                    </button>
                            </div>
                            <div class="product__item-overlayR">
                                <button class="heart__icon-link">
                                    <i class="heart__icon fa-solid fa-heart"></i>
                                    <div class="text_icon">Yêu thích</div> 
                                </button>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="brand__list">
            <div class="gird__row">
                <div class="gird__col-2-4">
                    <div class="brand__item">
                        <div class="brand__item-img" style="background-image: url(https://lh6.googleusercontent.com/yydj-C66k_K1bRs6cKW2LWecPIp9O_XqOoyIl8HvpJPgiV_38cWadVs67cRwtQpAZ-jgMcs3NMJLEqCDHD3CepoIRCUuFo_REqHJUrlBCNOpZ1K8pWmqnso-v6g-9BfL8tA8ogRD=s0);"></div>
                    </div>
                </div>
                <div class="gird__col-2-4">
                    <div class="brand__item">
                        <div class="brand__item-img" style="background-image: url(https://ttagencyads.com/wp-content/uploads/2021/04/10-mau-logo-thuong-hieu-2.png);"></div>
                    </div>
                </div>
                <div class="gird__col-2-4">
                    <div class="brand__item">
                        <div class="brand__item-img" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuPhAQ989oDK2UbyujQA0JkoJmvRuH0Ni8Sw&usqp=CAU);"></div>
                    </div>
                </div>
                <div class="gird__col-2-4">
                    <div class="brand__item">
                        <div class="brand__item-img" style="background-image: url(https://censor.vn/wp-content/uploads/2022/02/cac-hang-giay-noi-tieng-17.jpg);"></div>
                    </div>
                </div>
                <div class="gird__col-2-4">
                    <div class="brand__item">
                        <div class="brand__item-img" style="background-image: url(https://censor.vn/wp-content/uploads/2022/03/logo-cac-hang-giay-noi-tieng-6.png);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId,productName,productPrice){
        // Sử dụng jquery + ajax
        $.ajax({
            type: 'POST',
            url: './view/cart/addtocart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response){
                totalProduct.innerText = response;
                alert('them san pham thanh cong');
            },
            error: function(error){
                console.log(error);
            }
        });
    }
</script>