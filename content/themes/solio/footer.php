<?php
$g_settings = get_option('g_settings');
?>

		<footer>
				<div class="wrapper">
				<p>&copy; Copyright <?= date('Y'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
				
				<a href="#top" class="back-to-top">Back to top</a>
				
				<script type="text/javascript" charset="utf-8">
				      $('.back-to-top').click(function() {
				          $('html, body').animate({ scrollTop:0 }, '1000');
				          return false;
				      });
				</script>
				
			<?php wp_footer(); ?>
			
		</footer>
				
		<?php echo $g_settings['footercode']; ?>

	</body>
</html>