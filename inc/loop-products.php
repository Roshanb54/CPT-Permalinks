					<?php global $product; ?>
					<article class="entry entry-product panel bordered">
						<header class="entry-head">
							<h1 class="entry-title">
								<a href="<?= get_permalink($product->ID); ?>" rel="bookmark"><?= $product->post_title; ?></a>
							</h1>
						</header>
						<div class="entry-body media">
							<?php if(has_post_thumbnail($product->ID)): ?>
							<div class="media-img">
								<?php my_the_post_thumbnail($product, 1, 'thumb'); ?>
							</div>
							<?php endif; ?>
							<div class="media-body">
								<?= $product->post_excerpt ? '<p>'.$product->post_excerpt.'</p>' : '' ?>
							</div>
						</div>
					</article>
