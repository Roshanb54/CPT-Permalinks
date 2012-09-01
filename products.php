<?php
/*
Template Name: Products
*/
?>
<?php get_header(); ?>
			<div role="main">
				<h1 class="page-title">
					<?= get_the_title(page_products()); ?>
				</h1>
				<?php
				// Call body content from the "Recipes" page
				$products_page_data = get_post(page_products());
				echo apply_filters('the_content', $products_page_data->post_content);  
				wp_reset_query();
				// Call 'product' custom post type and loop top-level posts
				$root_products = get_root_pages('product');
				if($root_products): ?>
					<?php foreach($root_products as $product): setup_postdata($product); ?>
<?php get_template_part('inc/loop-products'); ?>
					<?php endforeach; ?>
				<?php else: ?>
				<em>No products added yet</em>
				<?php endif; ?>
			</div>
<?php get_sidebar('products'); ?>			
<?php get_footer(); ?>