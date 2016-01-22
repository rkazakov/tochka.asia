<?php $options = get_option('ribbon'); ?>
	</div><!--#page-->
</div><!--.container-->
</div>
	<footer>
		<div class="container">
			<div class="footer-widgets">
				<?php widgetized_footer(); ?>
			</div><!--.footer-widgets-->
		</div><!--.container-->
        <div class="copyrights"><?php mts_copyrights_credit(); ?></div> 
	</footer><!--footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>