<?php get_header(); ?>

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Nike New <br>Collection!</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Add to Bag</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?php echo bloginfo('template_url'); ?>/assets/img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/features/f-icon1.png" alt="">
                    </div>
                    <h6>Entrega gratis</h6>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Política de devoluciones</h6>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/features/f-icon3.png" alt="">
                    </div>
                    <h6>Soporte 24/7</h6>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Pago seguro</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- start product Area -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                    } ?>
                                </a>
                                <div class="product-details">
                                    <h6><?php the_title(); ?></h6>
                                    <div class="price">
                                        <h6><?php the_excerpt(); ?></h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="<?php the_permalink(); ?>" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">Comprar</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    _e('No Se Encontroraron Productos En La Categoria Selecionada', 'textdomain');
                endif;
                ?>
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                    } ?>
                                </a>
                                <div class="product-details">
                                    <h6><?php the_title(); ?></h6>
                                    <div class="price">
                                        <h6><?php the_excerpt(); ?></h6>
                                    </div>
                                    <div class="prd-bottom">

                                        <a href="<?php the_permalink(); ?>" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">Comprar</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    _e('No Se Encontroraron Productos En La Categoria Selecionada', 'textdomain');
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->

<!-- Start exclusive deal Area -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Exclusive Hot Deal Ends Soon!</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <h4>addidas New Hammer sole
                                for Sports person</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Add to Bag</span>
                            </div>
                        </div>
                    </div>
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.png" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>$150.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                            <h4>addidas New Hammer sole
                                for Sports person</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Add to Bag</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?php echo bloginfo('template_url'); ?>/assets/img/brand/1.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?php echo bloginfo('template_url'); ?>/assets/img/brand/2.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?php echo bloginfo('template_url'); ?>/assets/img/brand/3.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?php echo bloginfo('template_url'); ?>/assets/img/brand/4.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?php echo bloginfo('template_url'); ?>/assets/img/brand/5.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<?php get_footer(); ?>