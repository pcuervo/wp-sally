		<?php if ( is_home() ) : ?></div><!-- bg-home bg-image --><?php endif; ?>
		<?php wp_footer(); ?>

		<!-- /////// -->
		<!-- Footers -->
		<!-- /////// -->

		<?php if (is_home()){ ?>
			<footer class="[ text-center ][ width-100 ][ absolute bottom-10 bottom-ls ]">
				<a class="[ color-primary ]" href="<?php echo THEMEPATH; ?>pdf/terminos_y_condiciones.pdf" target="_blank">Términos y Condiciones</a>
			</footer>
		<?php } ?>

		<?php if (is_page('pasos-explicativos') OR is_page('grabando')){ ?>
			<footer class="[ text-center ][ width-100 ][ absolute bottom-10 ]">
				<a class="[ color-light ]" href="<?php echo THEMEPATH; ?>pdf/terminos_y_condiciones.pdf" target="_blank">Términos y Condiciones</a>
			</footer>
		<?php } ?>

		<?php if ( is_page('ver-tutoriales') ){ ?>
			<footer class="[ text-center ][ width-100 ][ margin-bottom--small ]">
				<a class="[ color-primary ]" href="<?php echo THEMEPATH; ?>pdf/terminos_y_condiciones.pdf" target="_blank">Términos y Condiciones</a>
			</footer>
		<?php } ?>

		<?php if (is_page('exito') OR is_page('vobo') OR is_singular('tutoriales')){ ?>
			<footer class="[ text-center ][ width-100 ]">
				<a class="[ color-light ]" href="<?php echo THEMEPATH; ?>pdf/terminos_y_condiciones.pdf" target="_blank">Términos y Condiciones</a>
			</footer>
		<?php } ?>

	</body>
</html>