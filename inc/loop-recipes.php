				<article class="entry entry-recipe<?= is_sticky() ? ' entry-sticky"' : ''?> panel bordered">
					<header class="entry-head">
						<h1 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h1>
						<p class="entry-meta"><time datetime="<?= the_time('c'); ?>" pubdate><?php the_time('jS F Y'); ?></time> in <?= get_the_term_list( $post->ID, 'recipe_cuisines', '', ' / ', '' ); ?></p>
					</header>
					<div class="entry-body media">
						<?php if(has_post_thumbnail()): ?>
						<div class="media-img">
							<?php my_the_post_thumbnail($post, 1, 'thumb'); ?>
						</div>
						<?php endif; ?>
						<div class="media-body">
							<?php the_excerpt(); ?>
							<?= get_the_term_list( $post->ID, 'recipe_ingredients','<footer class="entry-foot"><p class="entry-meta entry-tags">Ingredients: ',', ','</p></footer>'); ?>
						</div>
					</div>
				</article>