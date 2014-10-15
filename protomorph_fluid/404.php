<?php theme_include('header'); ?>

	<article class="article clearfix">
		<h1>Page not found</h1>

		<p class="description">Unfortunately, the page <code>/<?php echo htmlspecialchars(current_url()); ?></code> could not be found.</p>

		<div>That page has either been moved or no longer exists.</div>
	</article>

<?php theme_include('footer'); ?>
