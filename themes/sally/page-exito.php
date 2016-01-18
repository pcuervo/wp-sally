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
		<form id="forma-exito" data-parsley-validate>
			<label for="nombre" class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Nombre</label>
			<input type="text" name="name" id="name_field" class="[ form-control ][ margin-bottom ]" required="" data-parsley-error-message="Por favor ingresa la información necesaria.">
			<label for="titulo-del-tutorial" class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Título del tutorial</label>
			<input type="text" name="title" id="title_field" class="[ form-control ][ margin-bottom ]"  required="" data-parsley-error-message="Por favor ingresa la información necesaria.">
			<label for="resumen-1" class="[ text-uppercase ][ fz-small ][ letter-spacing--small ] ">Resume tu tutorial en tres frases:</label>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">1</span>
						<input type="text"  name="frase1" id="frase1_field" class="[ form-control ]"  required="" data-parsley-error-message="Por favor ingresa máximo 25 caracteres." data-parsley-maxlength="25">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">2</span>
						<input type="text"  name="frase2" id="frase2_field" class="[ form-control ]"  required="" data-parsley-error-message="Por favor ingresa máximo 25 caracteres." data-parsley-maxlength="25">
					</div>
				</div>
			</div>
			<div class="[ row ][ margin-bottom--small ]">
				<div class="[ col-xs-12 ]">
					<div class="[ input-group ][ margin-bottom--xsmall ]">
						<span class="[ input-group-addon ]">3</span>
						<input type="text" name="frase3" id="frase3_field" class="[ form-control ]"  required="" data-parsley-error-message="Por favor ingresa máximo 25 caracteres." data-parsley-maxlength="25">
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
		<p class="[ font-title ][ margin-top--small ]">cargando…</p>
	</div>
</div>
<!-- modal-tutorial -->
<div id="exito-ínfo" class="[ modal fade ]" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="[ modal-title ][ color-primary ]">Por favor confirma la infomación de tu tutorial</h4>
      </div>
      <div class="[ modal-body ][ color-primary ]">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary [ js-confirm-exito-info ]">Confirmar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php get_footer(); ?>