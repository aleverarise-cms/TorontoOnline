	</div> <!--#contenido -->

	<footer class="site-footer" role="contentinfo">

		<div class="container">
				<nav id="site-navigation" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu_principal')); ?>
				</nav>
				<div class="clear"></div>
		</div> <!--./container -->

		<hr>

		<div class="copyright">
			<p>Visita Toronto <?php echo date('Y'); ?></p>
		</div>
		
	</footer>



</div> <!--#page -->

<?php wp_footer() ?>

</body>

</html>