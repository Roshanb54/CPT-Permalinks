			<aside role="complementary">
				<?php if(get_insection_subnav('product')): ?>
				<div class="panel bordered filled">
					<h2>
						<?php link_by_id(page_products()); ?>
					</h2>
					<?php insection_subnav('product','current'); ?>
				</div>
				<?php endif; ?>
			</aside>