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
			<p class="[ margin-right ][ text-uppercase ]"><strong>Filtros</strong></p>
		</div>
		<div class="[ col-xs-9 col-sm-6 ][ center-block ]" >
			<p id="verfiltros">
				<?php $categorias_tutoriales = get_categorias_tutoriales(); ?>
				<?php foreach ( $categorias_tutoriales as $slug => $name ) : ?>
					<a class="[ margin-right--xsmall margin-bottom--xsmall ][ btn btn-tertiary width-auto ][ text-lowercase ][ <?php echo $slug; ?> ]" href=""><?php echo $name; ?></a>
				<?php endforeach; ?>
			</p>
		</div>
		<div class="[ hidden-xs hidden-sm ][ col-sm-5 ][ text-right ]">
			<ul class="[ pagination large ][ color-primary ]">
				<li>
					<a href="#" aria-label="Previous">
						<img aria-hidden="true" class="[ ico-small ][ svg icon--stroke icon--iconed--medium icon--thickness-1 ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/back.svg">
					</a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
					<a href="#" aria-label="Next">
						<img aria-hidden="true" class="[ ico-small ][ svg icon--stroke icon--iconed--medium icon--thickness-1 ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/next.svg">
					</a>
				</li>
			</ul>
		</div>
	</div><!--/row: filtros / paginacion-->
</div> <!--/container-->
<section class="[ text-center ]">
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
						<p class="[ no-margin ][ p--xs ][ js-modal-titulo ]"><strong></strong></p>
						<p class="[ p--xs ][ js-modal-nombre ]">Usuario</p>
					</div>
					<div class="[ col-xs-1 no-padding--top-bottom no-padding--left padding--right--small ][ z-index--1 ]">
						<button type="button" class="[ close ][ pull-right ]" data-dismiss="modal">
							<img class="[ svg icon--iconed--medium-xs icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/close.svg">
						</button>
					</div>
				</div>
			</div>
			<!-- video -->
			<video class=" z-index---1 " id="videoTutorial" width="100%" height="100%" >
				<source src="movie.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
				 <source type="video/webm" src="video.webm" />
				Your browser does not support the video tag.
			</video>
			<!-- play video -->
			<button class="[ btn-play ]" onclick="playPause()"><img src="<?php echo THEMEPATH; ?>img/play-btn.png">
			</button>
		</div>
		<div class="relative">
			<div class="[ text-center ]">
				<div class="[ margin ]">
					<div class="[ ico-small ][ margin-auto margin-bottom ][ relative ]">
						<img class="[ svg icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/share.svg">
					</div>
				</div>
				<div>
					<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);window.location.href=('http://twitter.com/?status='+tit2+'%20'+dir+'');"  target="_blank">
						<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg">
					</a>
					<a href="javascript:var dir=window.document.URL;var tit=window.document.title;var tit2=encodeURIComponent(tit);var dir2= encodeURIComponent(dir);window.location.href=('http://www.facebook.com/share.php?u='+dir2+'&amp;t='+tit2+'');"  target="_blank">
						<img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg">
					</a>
				</div>
			</div>
		</div>
	</div><!-- /-dialog -->
</div><!-- / modal-tutorial -->
<?php get_footer(); ?>