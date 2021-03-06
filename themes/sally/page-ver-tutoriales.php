<?php get_header(); ?>
<div class="[ container ]">
	<div class="[ row ]">
		<div class="[ col-xs-12 ]">
			<img class="[ img-responsive img-title ][ margin-bottom--xlarge ]" src="<?php echo THEMEPATH; ?>img/title-2.png">
		</div>
		<div class="[ center-block ][ text-center ][ color-primary ][ margin-top--xsmall ][ col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 ]">
			<p><strong>Todos tenemos algo que compartir.</strong></p>
			<p>Conoce los tips de belleza que las mujeres de México están compartiendo con nosotros</p>
		</div>
	</div>

	<!--/filtros / paginacion-->
	<div class="[ row ]">
		<div class="[ col-xs-3 col-sm-1  ]">
			<p class="[ margin-right ][ text-uppercase ]"><strong>Filtros </strong></p>
		</div>
		<div class="[ col-xs-9 col-sm-6 ][ center-block ]" >
			<p id="verfiltros" class="[ filter-button-group ]">
				<a class="[ margin-right--xsmall margin-bottom--xsmall ][ btn btn-tertiary width-auto ][ text-lowercase ]" data-filter="*" href="#" onClick="ga('send', 'event', 'Tutoriales', 'clic', 'Todos');">Todos</a>
				<?php
				$categorias_tutoriales = get_categorias_tutoriales();
				foreach ( $categorias_tutoriales as $slug => $name ) : ?>
					<a class="[ margin-right--xsmall margin-bottom--xsmall ][ btn btn-tertiary width-auto ][ text-lowercase ]" data-filter=".<?php echo $slug; ?>" href="#" onClick="ga('send', 'event', 'Tutoriales', 'clic', '<?php echo $name ?>');"><?php echo $name; ?></a>
				<?php endforeach; ?>
			</p>
		</div>
	</div><!--/row: filtros / paginacion-->
</div> <!--/container-->
<section class="[ text-center ][ js-grid ][ margin-bottom ]">
	<?php get_template_part('templates/tutoriales', 'single'); ?>
</section>

<!-- modal-tutorial -->
<div id="tutoriales3" class="[ modal fade ]" tabindex="-1" role="dialog">
	<div class="[ modal-dialog ]">
		<div class="[ relative ]">
			<!-- titulo usuario / close -->
			<div class="[ absolute ][ text-uppercase color-light ][ width-100 ][ container-fluid ]" >
				<div class="[ row ][ margin-top ]">
					<div class="[ col-xs-11 ]">
						<p class="[ no-margin ][ p--xs ]"><strong class="[ js-modal-titulo ]"></strong></p>
						<p class="[ p--xs ][ js-modal-nombre ]"></p>
					</div>
					<div class="[ col-xs-1 no-padding--top-bottom no-padding--left padding--right--small ][ z-index--1 ]">
						<button type="button" class="[ close ][ pull-right ]" data-dismiss="modal">
							<img class="[ svg icon--iconed--medium-xs icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/close.svg">
						</button>
					</div>
				</div>
			</div>
			<!-- video -->
			<div class="[ js-video-container ]"></div>

		</div>
		<div class="relative">
			<div class="[ text-center ]">
				<div class="[ margin ]">
					<div class="[ ico-small ][ margin-auto margin-bottom ][ relative ]">
						<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/share.svg">
					</div>
				</div>
				<div>
					<a href="#" class="[ btn-tw ]" target="_blank">
						<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
					</a>
					<a href="#" class="[ btn-fb ]" data-share-url="" >
						<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg">
					</a>
				</div>
			</div>
		</div>
	</div><!-- /-dialog -->
</div><!-- / modal-tutorial -->
<?php get_footer(); ?>