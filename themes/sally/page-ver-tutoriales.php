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
		<div class="[ col-xs-12 col-sm-4 col-sm-offset-0 col-md-3 col-md-offset-1 ][ text-center--movil ]">
			<a href="http://www.sallymexico.com/" class="[ btn btn-secondary width-auto ][ margin-bottom ]"><strong>ir a tienda en linea</strong></a>
		</div>
	</div>
	<div class="[ row ][ margin-bottom--large ]">
		<div class="[ col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 ]">
			<div class="input-group">
				<input type="text" class="[ form-control ][ input-search ][ large ]" placeholder="Busco consejos de...">
				<span class="[ input-group-btn ]">
					<button class="[ input-search--button ][ margin-auto ][ relative ]" type="button">
						<img class="[ ico-small ][ svg icon--stroke icon--responsive ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/find.svg">
					</button>
				</span>
			</div>
		</div>
	</div>



	<!--/filtros / paginacion-->
	<div class="[ row ]">
		<div class="[ col-xs-3 col-sm-1  ]">
			<p class="[ margin-right ][ text-uppercase ]">
				<strong><a class="[ color-primary ][ collapsed ]" role="button" data-toggle="collapse" data-parent="#accordion" href="#verfiltros" aria-expanded="false" aria-controls="verfiltros">Filtros</a></strong>
			</p>
		</div>
		<div class="[ col-xs-9 col-sm-6 ][ center-block ]" >
			<p id="verfiltros" class="[ panel-collapse collapse ]" role="tabpanel">
				<?php //$categorias_tutorial = get_categorias_tutorial(); ?>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Ojeras</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Rizos</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Labios</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Chongos</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Piel</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Cabello</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Bases</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Ojeras</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Tratamientos</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Pestañas</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Peinados</a>
				<a class="[ color-primary ][ margin-right--xsmall ]" href="">Rizos</a>
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
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Diana Rodriguez</strong></p>
					<p class="[ color-light ]">Cómo ocultar las ojeras</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
						<button class="[ btn-play ][ center-full ]" onclick="playPause()"><img src="<?php echo THEMEPATH; ?>img/play-btn.png">
						</button>
						<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong> Diana Rodriguez</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]"> Cómo ocultar las ojeras</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Karla Gonzalez</strong></p>
					<p class="[ color-light ]">Labios perfectos</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()"><img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>Karla Gonzalez</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">Labios perfectos</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Jessica Molina</strong></p>
					<p class="[ color-light ]">Chongos</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()">
						<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>Jessica Molina</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">Chongos</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>María Rodríguez</strong></p>
					<p class="[ color-light ]">Cuidado de tu piel</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()">
						<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>María Rodríguez</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">Cuidado de tu piel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Ivonne Torres</strong></p>
					<p class="[ color-light ]">¿Cómo mantener tu cabello?</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()">
						<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>Ivonne Torres</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">¿Cómo mantener tu cabello?</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Angela Anaconda</strong></p>
					<p class="[ color-light ]">Mejores Bases Sally</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()">
						<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>Angela Anaconda</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">Mejores Bases Sally</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="[ col-xs-6 col-sm-3 col-md-2 ][ no-padding ][ grid-item ]">
		<div class="[ padding--square ][ bg-image ][ relative ][ grid-item__image ]" style="background-image: url('<?php echo THEMEPATH; ?>img/mujer.jpg');">
			<div class="[ bg-opacity-dark ][ grid-item__info_compressed ]">
				<div class="[ center-full ]">
					<p class="[ text-uppercase color-primary ]"><strong>Fernanda Valdez</strong></p>
					<p class="[ color-light ]">Preparándome para el trabajo</p>
				</div>
			</div>
			<div class="[ grid-item__info ]" data-toggle="modal" data-target="#tutoriales3">
				<div class="[ relative ][ height-100 ]">
					<button class="[ btn-play ][ center-full ]" onclick="playPause()">
						<img src="<?php echo THEMEPATH; ?>img/play-btn.png">
					</button>
					<div class="[ grid-item__info__bg ]">
						<p class="[ text-uppercase color-black ][ no-margin ][ fz-small ]"><strong>Fernanda Valdez</strong></p>
						<p class="[ color-light ][ no-margin ][ fz-small ]">Preparándome para el trabajo</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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