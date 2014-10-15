<?php theme_include('header'); ?>

<?php if(has_search_results()): ?>
	<h1>You searched for &ldquo;<?php echo e(search_term()); ?>&rdquo;.</h1>

	<?php $i = 0; while(search_results()): $i++; ?>
	<article class="article clearfix">
		<h2>
			<a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a>
		</h2>

		<footer>
			Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('jS F Y', article_time()); ?></time>
			by <?php echo article_author('real_name'); ?>.
			<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.
		</footer>
	</article>
	<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<ul class="pagination">
		<li class="previous"><?php echo search_prev('Older'); ?></li>

		<li class="next"><?php echo search_next('Newer'); ?></li>
	</ul>
	<?php endif; ?>

<?php else: ?>
	<h1>Search</h1>

	<p class="description">Unfortunately, there are no results for &ldquo;<?php echo e(search_term()); ?>&rdquo;</p>

	<form class="search" id="search" action="<?php echo search_url(); ?>" method="post" role="search">
		<div class="input-group">
			<input class="float-input" id="term" type="search" name="term" placeholder="Search">
			<label class="float-label" for="term">Search</label>
		</div>
	</form>
<?php endif; ?>

<?php theme_include('footer'); ?>