<?php get_header(); ?>
<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">

                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                } ?>

            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?php the_title(); ?></h3>
                    <h2><?php the_excerpt(); ?></h2>
                    <!--  
                    <ul class="list">
                        <li><a class="active" href="#"><span>Categoría</span> : </a></li>
                        <li><a href="#"><span>Disponibilidad</span> : In Stock</a></li>
                    </ul>
                    -->
                    <?php the_content(); ?>

                    <div class="product_count">
                        <label for="qty">Cantidad:</label>
                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="#">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
<br>
<?php get_footer(); ?>