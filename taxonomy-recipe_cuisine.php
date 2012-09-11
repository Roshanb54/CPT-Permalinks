<?php get_header(); ?>
			<div role="main">
				<h1 class="page-title">
					Cuisine: <i><?php current_tax_title(); ?></i>
				</h1>
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