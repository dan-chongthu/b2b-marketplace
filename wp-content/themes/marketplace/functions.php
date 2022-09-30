<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// shortcode to display best seller products 
function wp_bestseller_product() { 
ob_start();
   $args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 5,
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
global $product; ?>
<div>
<a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">

<?php if (has_post_thumbnail( $loop->post->ID )) 
        echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
        else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image" width="65px" height="115px" />'; ?>

<h3><?php the_title(); ?></h3>
</a>
</div>
<?php
endwhile;
wp_reset_query();
$myvariable = ob_get_clean();
	return $myvariable; 
}
  
add_shortcode( 'bestseller-product', 'wp_bestseller_product' );

//upsell/recommended products


//display customizable & disposable product
function wp_customizable_disposable_product() { 
ob_start();
// Display featured products by category. on this case its "shirts" which is the slug of the category.
$query_args = array( 
    'category' => array( 'consumable-and-disposable' ),
);
$products = wc_get_products( $query_args );

global $post;
$columns = wc_get_loop_prop( 'columns' );
?>
<div class="woocommerce columns-<?php echo esc_attr( $columns ); ?>">
  <?php
    woocommerce_product_loop_start();
    foreach ($products as $product) {
        $post = get_post($product->get_id());
        setup_postdata($post);
        wc_get_template_part('content', 'product');
    }
    wp_reset_postdata();
    woocommerce_product_loop_end();
  ?>
</div>
<?php
wp_reset_query();
$myvariable = ob_get_clean();
	return $myvariable; 
}  
add_shortcode( 'customizable-disposable-product', 'wp_customizable_disposable_product' );

//display medicines & pharmaceutical products
function wp_medical_device_equipment_products() { 
ob_start();
// Display featured products by category. on this case its "shirts" which is the slug of the category.
$query_args = array( 
    'category' => array( 'medical-device-and-equipment' ),
);
$products = wc_get_products( $query_args );

global $post;
$columns = wc_get_loop_prop( 'columns' );
?>
<div class="woocommerce columns-<?php echo esc_attr( $columns ); ?>">
  <?php
    woocommerce_product_loop_start();
    foreach ($products as $product) {
        $post = get_post($product->get_id());
        setup_postdata($post);
        wc_get_template_part('content', 'product');
    }
    wp_reset_postdata();
    woocommerce_product_loop_end();
  ?>
</div>
<?php
wp_reset_query();
$myvariable = ob_get_clean();
	return $myvariable; 
}  
add_shortcode( 'medical-device-equipment-products', 'wp_medical_device_equipment_products' );

//display medicines & pharmaceutical products
function wp_medicines_pharmaceutical_products() { 
ob_start();
// Display featured products by category. on this case its "shirts" which is the slug of the category.
$query_args = array( 
    'category' => array( 'medicines-and-pharmaceutical-products' ),
);
$products = wc_get_products( $query_args );

global $post;
$columns = wc_get_loop_prop( 'columns' );
?>
<div class="woocommerce columns-<?php echo esc_attr( $columns ); ?>">
  <?php
    woocommerce_product_loop_start();
    foreach ($products as $product) {
        $post = get_post($product->get_id());
        setup_postdata($post);
        wc_get_template_part('content', 'product');
    }
    wp_reset_postdata();
    woocommerce_product_loop_end();
  ?>
</div>
<?php
wp_reset_query();
$myvariable = ob_get_clean();
	return $myvariable; 
}  
add_shortcode( 'medicines-pharmaceutical-products', 'wp_medicines_pharmaceutical_products' );

