<?php get_header(); ?>
			<div role="main">
			
				<h1 class="page-title">
					Custom Post Type Permalinks
				</h1>
				<p>Say hello to a WordPress framework <strong>built for CMS purposes</strong> with two example custom post types; one hierarchical (Products) and one with custom taxonomies (Recipes).</p>
				<p>The theme is focused on solving two common problems &mdash; achieving a template &amp; menu architecture that works solidly, with permalinks that contain a taxonomy term in the URL e.g. <code>/post-type/taxonomy-term/post-name</code></p>
				<p><strong>Products</strong> are essentially a replica of the default Pages functionality, and <strong>Recipes</strong> are a replica of Posts. The aim is to prove WordPress can be extended with flexible post types and search-friendly permalinks that mirror what comes out of the box.</p>
				<p>This theme is <strong>intended as an extension</strong> of existing themes, giving you the templates and functions needed to get you up and running with your own custom post types. As such this theme does not contain some of the standard WordPress templates and functions (e.g. the blog), but it could be used as a starting point for a more straight-up CMS project. You may also find parts useful in other areas of your own theme, so take what you need!</p>
				<p><strong><a href="https://github.com/mattberridge/CPT-Permalinks">Read all about it</a></strong> or <strong><a href="https://github.com/mattberridge/CPT-Permalinks">Download on Github</a></strong></p>
				<p><a href="http://builtbyboon.com">built by Boon</a> &ndash; given away free<br />
				If you have any questions or put this to use then <a href="http://twitter.com/mattberridge">hit me up on Twitter</a>.</p>
				<hr />
				<h2>Instructions</h2>
				<ul>
					<li>1.) Create a fresh install of <a href="http://wordpress.org">WordPress</a> on your server<li>
					<li>2.) <a href="https://github.com/mattberridge/CPT-Permalinks">Download the theme</a> and upload to the <code>wp-content/themes</code> folder</li>
					<li>3.) Set your <a href="http://codex.wordpress.org/Using_Permalinks">permalink structure</a> to <code>/%category%/%postname%/</code></li>
					<li>4.) <strong>You're done</strong>. Begin adding Products and Recipes to see the post types in action!</li>
				</ul>
				<hr />
				<h2>Further extensions</h2>
				<p>Here are some neat plugins I recommend to give additional functionality or make your life easier:</p>
				<ul>
					<li><a href="http://www.advancedcustomfields.com/">Advanced Custom Fields</a> - Easily add custom meta boxes / fields to your post types</li>
					<li><a href="http://www.gravityforms.com/">Gravity Forms</a> - The best form plugin there is. Period</li>
					<li><a href="http://wordpress.org/extend/plugins/breadcrumb-navxt/">Breadcrumb Nav XT</a> - Create breadcrumb navigation with custom post type support</li>
					<li><a href="http://wordpress.org/extend/plugins/remove-title-attributes/">Remove Title Attributes</a> - Remove the annoying "View all posts filed under" <code>title</code> attributes from your site</li>
					<li><a href="http://wordpress.org/extend/plugins/wp-page-numbers/">WP Page Numbers</a> - Turn your next and previous links into pagination</li>
					<li><a href="http://wordpress.org/extend/plugins/regenerate-thumbnails/">Regenerate Thumbnails</a> - Re-process existing <code>wp_post_thumbnails</code> when you create a new size</li>
					<li><a href="http://wordpress.org/extend/plugins/disable-revisions/">Disable Revisions</a> and <a href="http://exper.3drecursions.com/2008/07/25/disable-revisions-and-autosave-plugin/">Disable Autosave</a> - Ensure you don't clog up your database during development</li>
				</ul>
			</div>
<?php get_footer(); ?>