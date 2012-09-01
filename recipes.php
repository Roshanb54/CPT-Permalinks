<?php
/*
Template Name: Recipes
*/
?>
<?php get_header(); ?>
			<div role="main">
				<h1 class="page-title">
					<?= get_the_title(page_recipes()); ?>
				</h1>
				<?php
				// Call body content from the "Recipes" page
				$recipes_page_data = get_post(page_recipes());
				echo apply_filters('the_content', $recipes_page_data->post_content);  
				wp_reset_query();
				// Call 'recipe' custom post type and loop posts
				$args = array(
					'post_type'=> 'recipe',
					'paged' => $paged
				);
				query_posts($args); ?>	
				
				<?php if (have_posts()) : ?>
				<!-- -->
				<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('inc/loop-recipes'); ?>
				<?php endwhile; ?>
<?php get_template_part('inc/pagination-recipes'); ?>
				<?php else : ?>
				<em>No recipes added yet</em>
				<?php endif; ?>
			</div>
<?php get_sidebar('recipes'); ?>			
<?php get_footer(); ?>