<?php get_header(); ?>
			<div role="main">
				<?php if (have_posts()) : ?>
				<article class="single single-recipe media">
					<header class="single-head">
						<h1 class="page-title single-title">
							<?php the_title(); ?>
						</h1>
						<p class="entry-meta"><time datetime="<?= the_time('c'); ?>" pubdate><?php the_time('jS F Y'); ?></time> in <?= get_the_term_list($post->ID, 'recipe_cuisine', '', ' / ', ''); ?></p>
					</header>
				<?php while (have_posts()) : the_post(); ?>
					<?php
					// Test for ingredients
					$list_ingredients = wp_get_object_terms($post->ID, 'recipe_ingredient');
					if($list_ingredients || has_post_thumbnail()): ?>
					<div class="media-img single-media panel bordered dotted">
						<?php my_the_post_thumbnail($post->ID, 0, 'single'); ?>
						<?php
						// List all ingredients (not linked)
						if($list_ingredients): ?>
						<h2>Ingredients:</h2>
						<ul>
							<?php foreach($list_ingredients as $ingredient): ?>
							<li><?= $ingredient->name; ?></li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<div class="media-body">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				</article>
				<?php else : ?>
				<em>This recipe could not be found</em>
				<?php endif; ?>
			</div>
<?php get_sidebar('recipes'); ?>			
<?php get_footer(); ?>