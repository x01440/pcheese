<?php
function website_resources() {
   wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'website_resources');

// Navigation Menu Register

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'header' => __('Header Menu')
));

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/* REGISTER WIDGETS ------------------------------------------------------------*/
function my_widgets_init() {
    add_action( 'widgets_init', 'my_widgets_init' );
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Top-Info',
            'id' => 'info-widget',
            'description' => 'top header widget position.',
            'before_widget' => '<div id="%1$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        ));

    }
}
add_action( 'widgets_init', 'my_widgets_init' );
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description'   => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
}

function megamenu_add_theme_custom_1_copy_1486493554($themes) {
    $themes["custom_1_copy_1486493554"] = array(
        'title' => 'Custom 1 Copy',
        'container_background_from' => 'rgba(0, 0, 0, 0)',
        'container_background_to' => 'rgba(0, 0, 0, 0)',
        'container_border_radius_top_left' => '5px',
        'container_border_radius_top_right' => '5px',
        'menu_item_align' => 'right',
        'menu_item_background_from' => 'rgba(104, 129, 17, 0.59)',
        'menu_item_background_to' => 'rgb(104, 129, 17)',
        'menu_item_background_hover_from' => 'rgb(241, 241, 241)',
        'menu_item_background_hover_to' => 'rgb(241, 241, 241)',
        'menu_item_spacing' => '5px',
        'menu_item_link_height' => '20px',
        'menu_item_link_color' => 'rgb(255, 255, 255)',
        'menu_item_link_color_hover' => 'rgb(104, 129, 17)',
        'menu_item_link_border_radius_top_left' => '20px',
        'menu_item_link_border_radius_top_right' => '20px',
        'menu_item_link_border_radius_bottom_left' => '20px',
        'menu_item_link_border_radius_bottom_right' => '20px',
        'menu_item_highlight_current' => 'on',
        'panel_header_border_color' => '#555',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => '#555',
        'panel_second_level_font_color_hover' => '#555',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_second_level_border_color' => '#555',
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_width' => '230px',
        'flyout_border_color' => 'rgb(104, 129, 17)',
        'flyout_border_left' => '2px',
        'flyout_border_right' => '2px',
        'flyout_border_top' => '2px',
        'flyout_border_bottom' => '2px',
        'flyout_menu_item_divider' => 'on',
        'flyout_menu_item_divider_color' => 'rgb(104, 129, 17)',
        'flyout_background_hover_from' => 'rgba(104, 129, 17, 0.59)',
        'flyout_background_hover_to' => 'rgb(104, 129, 17)',
        'flyout_link_size' => '12px',
        'flyout_link_color' => 'rgb(104, 129, 17)',
        'flyout_link_color_hover' => 'rgb(255, 255, 255)',
        'flyout_link_family' => 'Arial, Helvetica, sans-serif',
        'shadow' => 'on',
        'shadow_horizontal' => '3px',
        'shadow_vertical' => '3px',
        'shadow_blur' => '3px',
        'shadow_spread' => '3px',
        'shadow_color' => 'rgba(104, 129, 17, 0.65)',
        'toggle_background_from' => '#222',
        'toggle_background_to' => '#222',
        'toggle_font_color' => 'rgb(255, 255, 255)',
        'mobile_background_from' => '#222',
        'mobile_background_to' => '#222',
        'custom_css' => '/** Push menu onto new line **/

#{$wrap} {
    clear: both;
}

float:right;',
    );
    return $themes;
}

add_filter("megamenu_themes", "megamenu_add_theme_custom_1_copy_1486493554");

function megamenu_add_theme_custom_1_1486493626($themes) {
    $themes["custom_1_1486493626"] = array(
        'title' => 'Custom 1',
        'container_background_from' => 'rgba(104, 129, 17, 0.65)',
        'container_background_to' => 'rgb(104, 129, 17)',
        'container_border_radius_top_left' => '5px',
        'container_border_radius_top_right' => '5px',
        'menu_item_align' => 'center',
        'menu_item_background_from' => 'rgba(0, 0, 0, 0)',
        'menu_item_background_to' => 'rgba(0, 0, 0, 0)',
        'menu_item_background_hover_from' => 'rgb(241, 241, 241)',
        'menu_item_background_hover_to' => 'rgb(241, 241, 241)',
        'menu_item_spacing' => '5px',
        'menu_item_link_color' => 'rgb(255, 255, 255)',
        'menu_item_link_weight' => 'bold',
        'menu_item_link_color_hover' => 'rgb(104, 129, 17)',
        'menu_item_link_weight_hover' => 'bold',
        'menu_item_highlight_current' => 'on',
        'panel_header_border_color' => '#555',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => '#555',
        'panel_second_level_font_color_hover' => '#555',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_second_level_border_color' => '#555',
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_width' => '230px',
        'flyout_border_color' => 'rgb(104, 129, 17)',
        'flyout_border_left' => '2px',
        'flyout_border_right' => '2px',
        'flyout_border_top' => '2px',
        'flyout_border_bottom' => '2px',
        'flyout_menu_item_divider' => 'on',
        'flyout_menu_item_divider_color' => 'rgb(104, 129, 17)',
        'flyout_background_hover_from' => 'rgba(104, 129, 17, 0.59)',
        'flyout_background_hover_to' => 'rgb(104, 129, 17)',
        'flyout_link_size' => '12px',
        'flyout_link_color' => 'rgb(104, 129, 17)',
        'flyout_link_color_hover' => 'rgb(255, 255, 255)',
        'flyout_link_family' => 'Arial, Helvetica, sans-serif',
        'shadow' => 'on',
        'shadow_horizontal' => '3px',
        'shadow_vertical' => '3px',
        'shadow_blur' => '3px',
        'shadow_spread' => '3px',
        'shadow_color' => 'rgba(104, 129, 17, 0.65)',
        'toggle_background_from' => '#222',
        'toggle_background_to' => '#222',
        'toggle_font_color' => 'rgb(255, 255, 255)',
        'mobile_background_from' => '#222',
        'mobile_background_to' => '#222',
        'custom_css' => '/** Push menu onto new line **/

#{$wrap} {
    clear: both;
}',
    );
    return $themes;
}

add_filter("megamenu_themes", "megamenu_add_theme_custom_1_1486493626");


/**
 * Changes the redirect URL for the Return To Shop button in the cart.
 *
 * @return string
 */
function wc_empty_cart_redirect_url() {
    return WP_CART_REDIRECT_URL;
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination', 10 );


// ---------------------------------------------
// Remove Cross Sells From Default Position

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );


// ---------------------------------------------
// Add them back UNDER the Cart Table

add_action( 'woocommerce_after_cart_table', 'woocommerce_cross_sell_display' );

// ---------------------------------------------
// Display Only 2 Cross Sells instead of default 4

add_filter( 'woocommerce_cross_sells_total', 'bbloomer_change_cross_sells_product_no' );

function bbloomer_change_cross_sells_product_no( $columns ) {
    return 8;
}

add_filter( 'woocommerce_checkout_fields', 'webendev_woocommerce_checkout_fields' );
/**
 * Change Order Notes Placeholder Text - WooCommerce
 * 
 */
function webendev_woocommerce_checkout_fields( $fields ) {

	$fields['order']['order_comments']['placeholder'] = 'Notes about your order, e.g. special notes for delivery and or custom gift message';
	return $fields;
}
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php).
// Used in conjunction with https://gist.github.com/DanielSantoro/1d0dc206e242239624eb71b2636ab148
// Compatible with 3.0.1+, for lower versions, remove "woocommerce_" from the first mention on Line 4
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="minicart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	
	$fragments['a.minicart'] = ob_get_clean();
	
	return $fragments;
}

define("WP_WC_WEIGHT_DISCLAIMER", "This product is cut to order & packaged especially for you. ".
            "Price will vary slightly based on the actual cut weight. ".
            "Your final invoice will always reflect the cost of the exact amount you received.");

define("WP_WC_PRODUCT_BY_WEIGHT_TAG", "by-weight");
define("WP_WC_NO_FLAT_RATE_TAG", "no-flat-rate");

// Allow items in pending state to be edited to allow revising the cost of the order down.

add_filter( 'wc_order_is_editable', 'wc_make_processing_orders_editable', 100, 2 );
function wc_make_processing_orders_editable( $is_editable, $order ) {
    if ( $order->get_status() == 'processing' ) {
        $is_editable = true;
    }

    return $is_editable;
}

/*
 * Calculate handling fees for the cart.
 */
add_action('woocommerce_cart_calculate_fees','endo_handling_fee');
function endo_handling_fee() {
     global $woocommerce;
 
     if ( is_admin() && ! defined('DOING_AJAX'))
          return;
    $fee = 8.00;
    $woocommerce->cart->add_fee('Handling', $fee, false, 'standard');
}

// TODO: Add an action for woocommerce_process_shop_order_meta to make sure order is revised down.
// add_action( 'woocommerce_process_shop_order_meta', 'woocommerce_process_shop_order', 12, 2 );
function woocommerce_process_shop_order ( $post_id, $post ) {
  // print_r($post);
}

// Removes the WooCommerce filter, that is validating the quantity to be an int
remove_filter('woocommerce_stock_amount', 'intval');
 
// Add a filter, that validates the quantity to be a float
add_filter('woocommerce_stock_amount', 'floatval');

// Show a cart subtotal in the admin.
add_action("woocommerce_admin_order_items_after_line_items", "woocommerce_show_admin_subtotal", 12, 2);
function woocommerce_show_admin_subtotal($order_id) {
  global $woocommerce;
  $order = wc_get_order($order_id);
  $subtotal = $order->get_subtotal();
  
  printf("<tr><td colspan='4'>Subtotal</td><td colspan='3'>$".$subtotal."</td></tr>");
}

// Before order review, revise variable product quantities up to 1.33.
// define the woocommerce_checkout_before_order_review callback 
function action_woocommerce_checkout_before_order_review() {
    // *** Setup decimal cart quantity and cart change on checkout ***
    $PRODUCT_WEIGHT_MESSAGE = WP_WC_WEIGHT_DISCLAIMER;
    $PRODUCT_BY_WEIGHT_TAG = "by-weight";
    global $woocommerce;
    $cart_contents = $woocommerce->cart->cart_contents;
    $has_by_weight = false;
    foreach ($cart_contents as $item) {
      $product = wc_get_product($item["product_id"]);
       
      // Get the tags and look for the by-weight tag.  If that tag is set on the product then
      // add a handling fee to the order.
      $tags = get_the_terms($product->get_id(), "product_tag");
      if ($tags) {
        foreach ($tags as $tag) {
          if ($tag->slug == $PRODUCT_BY_WEIGHT_TAG) {
            $has_by_weight = true;
            $quantity = $item["quantity"];
            // In case the user refreshes, don't continue to add 0.33.
            if (fmod($quantity, 1) == 0) {
              $woocommerce->cart->set_quantity($item["key"], $quantity + ($quantity * 0.33));
            }
          }
        }
      } 
    }
    if ($has_by_weight) {
      print $PRODUCT_WEIGHT_MESSAGE;
    }
}; 
         
// add the action 
add_action(
    'woocommerce_checkout_before_order_review',
    'action_woocommerce_checkout_before_order_review',
    10,
    0);

// Allow float values in cart.
// Add min value to the quantity field (default = 1)
add_filter('woocommerce_quantity_input_min', 'min_decimal', 10, 2);
function min_decimal($val, $product) {
  $PRODUCT_BY_WEIGHT_TAG = "by-weight";
  $tags = get_the_terms($product->get_id(), "product_tag");
  if ($tags) {
    foreach ($tags as $tag) {
      if ($tag->slug == $PRODUCT_BY_WEIGHT_TAG) {
        return 0.01;
      }
    }
  }
  return 1;
}
 
// Add step value to the quantity field (default = 1)
add_filter('woocommerce_quantity_input_step', 'nsk_allow_decimal', 10, 2);
function nsk_allow_decimal($val, $product) {
  $PRODUCT_BY_WEIGHT_TAG = "by-weight";
  $tags = get_the_terms($product->get_id(), "product_tag");
  if ($tags) {
    foreach ($tags as $tag) {
      if ($tag->slug == $PRODUCT_BY_WEIGHT_TAG) {
        return 0.01;
      }
    }
  }
  return 1;
}
 
// Add unit price fix when showing the unit price on processed orders
add_filter('woocommerce_order_amount_item_total', 'unit_price_fix', 10, 5);
function unit_price_fix($price, $order, $item, $inc_tax = false, $round = true) {
    $qty = (!empty($item['qty']) && $item['qty'] != 0) ? $item['qty'] : 1;
    if($inc_tax) {
        $price = ($item['line_total'] + $item['line_tax']) / $qty;
    } else {
        $price = $item['line_total'] / $qty;
    }
    $price = $round ? round( $price, 2 ) : $price;
    return $price;
}

/* Show disclaimer for every product that has the sold by weight tag */
add_action( 'woocommerce_product_meta_end', 'woocommerce_show_single_product_disclaimer', 10, 1);
function woocommerce_show_single_product_disclaimer ($val) {
  $PRODUCT_BY_WEIGHT_TAG = "by-weight";
  $tags = get_the_terms(get_the_ID(), "product_tag");
  if ($tags) {
    foreach ($tags as $tag) {
      if ($tag->slug == $PRODUCT_BY_WEIGHT_TAG) {
        print "<br><br><em>".WP_WC_WEIGHT_DISCLAIMER."</em>";
      }
    }
  }
}

// Filter the shipping methods to detect products that can't ship with flat rate.
// Possible necessary filters.
// add_filter('woocommerce_package_rates', 'override_cart_shipping_methods');
// add_filter('woocommerce_cart_totals_before_shipping', 'override_cart_shipping_methods');
// add_filter('woocommerce_get_shipping_classes', 'override_cart_shipping_methods');
add_filter('woocommerce_package_rates', 'override_cart_shipping_methods', 10, 2);

function override_cart_shipping_methods($available_methods) {
    global $woocommerce;
    $is_no_flat_rate = false;

    $cart_contents = $woocommerce->cart->get_cart_contents();
    foreach ($cart_contents as $item) {
      $shipping_class = $item['data']->get_shipping_class();
      if ($shipping_class == WP_WC_NO_FLAT_RATE_TAG) {
        $is_no_flat_rate = true;
      }
    }
    
    if ($is_no_flat_rate) {
      foreach ($available_methods as $shipping_method) {
        $shipping_method_id = $shipping_method->id;
        if (strpos($shipping_method->id,'flat_rate') || strpos($shipping_method->id,'FLAT_RATE')) {
          unset($available_methods[$shipping_method_id]);
        }
        if (strpos(strtolower($shipping_method->label),'flat rate')) {
          unset($available_methods[$shipping_method_id]);
        }
        if (strpos($shipping_method->id,'express') || strpos($shipping_method->id,'EXPRESS')) {
          unset($available_methods[$shipping_method_id]);
        }
      }
    }
    
    return $available_methods;
}
