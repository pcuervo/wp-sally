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
		<input class="[ form-control ][ margin-bottom ]" name="name" id="name_field">
		<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Título del tutorial</label>
		<input class="[ form-control ][ margin-bottom ]" name="title" id="title_field">
		<label class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Resume tu tutorial en tres frases:</label>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">1</span>
						<input type="text" class="[ form-control ]" name="frase1" id="frase1_field">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">2</span>
						<input type="text" class="[ form-control ]" name="frase2" id="frase2_field">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">3</span>
						<input type="text" class="[ form-control ]" name="frase3" id="frase3_field">
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
<?php get_footer(); ?>