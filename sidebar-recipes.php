			<aside role="complementary">
				<div class="panel bordered filled">
					<h2>
						All Cuisines
					</h2>
					<?php $list_cuisines = wp_list_categories('echo=0&title_li=&taxonomy=recipe_cuisines&show_option_none='.__('No cuisines added yet').''); ?>
					<ul>
						<?= $list_cuisines; ?>
					</ul>
					<h2>
						All Ingredients
					</h2>
					<?php $list_ingredients = wp_list_categories('echo=0&title_li=&taxonomy=recipe_ingredients&show_option_none='.__('No ingredients added yet').''); ?>
					<ul>
						<?= $list_ingredients; ?>
					</ul>
				</div>
			</aside>
