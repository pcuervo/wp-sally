<?php get_header(); ?>
<section class="[ container ]">
	<div class="[ margin-bottom ][ text-center ]">
		<div class="[ margin-top--large ][ visible-xs ]"></div>
		<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
		<div class="[ row ][ margin-top ]">
			<div class="[ col-sm-4 col-sm-offset-4 ][ padding-movil ]">
				<div class="[ ico-small ][ margin-auto margin-bottom ]">
					<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>img/maquillaje.png">
				</div>
				<p class="[ text-uppercase ]"><strong>¡Listo!</strong></p>
				<p>Casi acabamos, solo llena el siguiente formulario para ver el resultado</p>
			</div>
		</div>
	</div>
	<div class="[ form-tutorial ][ col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 ][ color-light ][ margin-bottom--large ]">
		<form id="forma-exito">
		<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Nombre</label>
		<input class="[ form-control ][ margin-bottom ]">
		<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Título del tutorial</label>
		<input class="[ form-control ][ margin-bottom ]">
		<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Resume tu tutorial en tres frases:</label>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">1</span>
						<input type="text" class="[ form-control ]">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">2</span>
						<input type="text" class="[ form-control ]">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">3</span>
						<input type="text" class="[ form-control ]">
					</div>
				</div>
			</div>
			<?php show_select_categorias_tutoriales(); ?>
			<div class="[ col-xs-12 ][ margin-bottom--xlarge ][ text-center ]">
				<input type="submit" value="Continuar" class="[ btn btn-primary ]">
			</div>
		</form>
	</div>

</section>

<div class="[ bg-loader ]" id="loading">
	<div class="[ center-full ][ text-center ]">
		<img src="<?php echo THEMEPATH; ?>icons/loader-.gif" >
		<p class="[ font-title ][ margin-top--small ]">cargando …</p>
	</div>
</div>
<!-- modal-tutorial -->
<div id="tutoriales3" class="[ modal fade ]" tabindex="-1" role="dialog">
	<div class="[ modal-dialog ]">
		<div class="[ relative ]">
			<!-- titulo usuario / close -->
			<div class="[ absolute ][ text-uppercase color-light ][ width-100 ][ container-fluid ]" >
				<div class="[ row ][ margin-top ]">
					<div class="[ col-xs-11 ]">
						<p class="[ no-margin ][ p--xs ]"><strong>Titulo </strong></p>
						<p class="[ p--xs ]">Usuario</p>
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