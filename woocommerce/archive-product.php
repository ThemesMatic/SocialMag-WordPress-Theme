<?php
defined('ABSPATH') or die("please don't runs scripts");
/*
* @file           archive-product.php
* @package        Social Magazine
* @author         ThemesMatic
* @copyright      2015 ThemesMatic
*/
get_header(); ?>
  
<div class="wrap">
	<div class="container under-menu">
		<article class="main-content col-md-12">
			
		<?php woocommerce_content();?>
							
		</article><!-- article -->	
	</div><!-- container -->
</div><!-- wrap -->
<?php get_footer(); ?>