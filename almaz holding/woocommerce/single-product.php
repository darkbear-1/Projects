<?php
$product = wc_get_product( $post->ID );
$productMeta = get_post_meta($post->ID);
$productAttr = unserialize($productMeta['_product_attributes'][0]);
$brands = get_the_terms( $post->ID, 'brands' );
get_header();
 ?>
<div class="main single-product-template">
    <div class="content_wrap">
      <section class="breadcrumbs-wrap">
        <div class="container">
            <div class="breadcrumbs"><?php the_breadcrumb() ?></div>
        </div>
      </section>
      <section class="single-product">
        <div class="container">
          <div class="single-product__column">
            <?php echo woocommerce_show_product_images(); ?>
          </div>
          <div class="single-product__column">
            <div class="title_container">
              <div class="single-product__liked"><?php echo do_shortcode('[ti_wishlists_addtowishlist]'); ?></div>
              <h1 class="single-product__title"><?php echo the_title() ?></h1>
            </div>
            <div class="single-product__articul">Артикул: <?php echo $productMeta['_sku'][0] ?></div>
            <div class="product__attributes-wrap"><?php echo $product->list_attributes(); ?></div>
            <div class="single-product__add">
              <?php if ($product->is_type( 'variable' )): ?>
                <?php echo woocommerce_variable_add_to_cart(); ?>
              <?php else: ?>
                <div class="single-product__add-simple">
                  <?php echo $product->get_price_html(); ?>
                  <?php do_action('woocommerce_simple_add_to_cart'); ?>
                </div>
              <?php endif; ?>
            </div>
            <button class="single-product__one-click">Купить в 1 клик</button>
          </div>
        </div>
      </section>
      <?php if ($product->description != ""): ?>
        <section class="single-product__info">
          <div class="container">
            <div class="single-product__info-column">
              <h2 class="single-product__description-title">Описание</h2>
            </div>
            <div class="single-product__info-column">
                <div class="single-product__description"><?php echo the_content() ?></div>
            </div>
          </div>
        </section>
      <?php endif; ?>
      <?php get_template_part( 'template-parts/loop-dopolnite', 'product' ); ?>
      <section class="interest">
        <div class="container">
          <h2 class="interest__title">Вас может заинтересовать</h2>
          <div id="zainteresovat" class="owl-carousel products-owl">
            <?php get_template_part( 'template-parts/loop-zainteresovat', 'product' ); ?>
          </div>
        </div>
      </section>
  </div>
</div>
<?php
get_footer();
