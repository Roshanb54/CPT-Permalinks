<?php get_header(); ?>
			<div role="main">
				<?php if (have_posts()) : ?>
				<article class="single single-product media">
					<header class="single-head">
						<h1 class="page-title single-title">
							<?php the_title(); ?>
						</h1>
					</header>
				<?php while (have_posts()) : the_post(); ?>
					<?php if(has_post_thumbnail()): ?>
					<div class="media-img single-media panel bordered dotted">
						<?php my_the_post_thumbnail($post, 'single'); ?>
					</div>
					<?php endif; ?>
					<div class="media-body">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				
					<?php
					// Display any sub-pages of this product
					$sub_products = get_sub_pages($post->ID, 'product');
					if($sub_products): ?>
					<section class="product-index">
						<?php foreach($sub_products as $product): setup_postdata($product); ?>
<?php get_template_part('inc/loop-products'); ?>
						<?php endforeach; ?>
					</section>
					<?php endif; ?>
				
				</article>
				<?php else : ?>
				<em>This product could not be found</em>
				<?php endif; ?>
			</div>
<?php get_sidebar('products'); ?>			
<?php get_footer(); ?>