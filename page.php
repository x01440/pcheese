<?php

get_header();

if (have_posts()) :

    while (have_posts()) : the_post(); ?>

        <article class="post page">



            <?php the_content(); ?>

        </article>

    <?php endwhile;



else :

    echo '<p>No content found</p>';



endif;





get_footer();

?>
<script>

window.jQuery(document).ready(function() {
	
	var $ = window.jQuery;
	
	 
	/**
	* get all <img class='so-widget-image' /> tags on document
	* @return Array
	*/
	var banners = $('img.so-widget-image');

	// First img in array
	var b0 = banners[0];
	
	var orderNowDiv = "<div id='image-text'><b><a href='product-category/cheese/old-fashioned-pinconning-cheese/'>Order NOW!</a></b></div>";
	var shopNowDiv = "<div id='shop-now-text'><b>Looking for a GREAT GIFT? <br /><a class='sm-hide' href='product-category/gift-items/gift-boxes/'>Shop Gift Boxes</a><span class='md-show'>Check out our Gift Boxes! <a href='product-category/gift-items/gift-boxes/'>Shop now!</a></span></b></div>";
	// insert orderNowDiv above b0 by selecting b0's parent element
	$(b0).parent().prepend(orderNowDiv);
	$(b0).parent().prepend(shopNowDiv);

	// set css styling
	// see: http://jsfiddle.net/Lyxqd0h1/
	$(b0).parent().css('position', 'relative');

	// jQuery selector function
	var $orderNowDiv = $('#image-text');
	var $shopNowDiv = $('#shop-now-text');

	// set the css properties of orderNowDiv using jQuery
	$($orderNowDiv)
                .css('top', '37%')
		.css('left', '83%')
		.css('position', 'absolute')
		.css('font-size', '1.8vh')
		.css('font-size', '1.0vw');
	$($shopNowDiv)
                .css('padding', '5px')
                .css('border-radius', '10px')
                .css('top', '77%')
                .css('background-color', 'rgba(255, 255, 255, 0.58)') 
		.css('left', '12%')
		.css('position', 'absolute')
		.css('font-size', '3.0vh')
		.css('text-align','center')
		.css('font-size', '1.8vw');
});
</script>