<!doctype html>
<!--[if lt IE 8]><html class="oldie lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8 lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title('', true, 'right'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<head>
<body>
	<div class="container">
		<nav>
			<ul class="nav-primary">
				<li>
					<a href="<?= get_bloginfo('url'); ?>"<?= is_home() ? ' class="current"' : '' ?>>
						Home
					</a>
				</li>
				<li>
					<a href="<?= get_permalink(page_products()); ?>"<?= is_products() ? ' class="current"' : '' ?>>
						<?= get_the_title(page_products()); ?>
					</a>
				</li>
				<li>
					<a href="<?= get_permalink(page_recipes()); ?>"<?= is_recipes() ? ' class="current"' : '' ?>>
						<?= get_the_title(page_recipes()); ?>
					</a>
				</li>
			</ul>
		</nav>
