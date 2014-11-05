
		</div>
	</div>

	<footer class="footer" id="bottom">
		<div class="inner">
			<small><?php echo site_name(); ?>&copy; <?php echo date('Y'); ?>. All rights reserved.</small>

			<span class="scroll-up">&#9650;</span>

			<ul class="foot-links" role="navigation">
				<li><a href="<?php echo rss_url(); ?>">RSS</a></li>

				<?php if(twitter_account()): ?>
				<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
				<?php endif; ?>

				<li><a href="<?php echo base_url('admin'); ?>">Admin area</a></li>

				<li><a href="<?php echo base_url(); ?>">Home</a></li>
			</ul>
		</div>
	</footer>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/highlight.min.js"></script>
<script src="<?php echo theme_url('/js/style.js'); ?>"></script>
<?php if(customised()): ?>
<!--  Custom Javascript -->
<script><?php echo article_js(); ?></script>
<?php endif; ?>
</body>

</html>
