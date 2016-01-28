<!--Language Strings Camera Tag-->

<?php get_header(); ?>
<div class="[ bg-primary ][ margin-top--large ]">
	<camera class="camera_tag" id='myVideo' data-app-id='a-2ff6f020-9856-0133-e782-22000bb743dd' data-maxlength='180' data-autopreview='false' data-poll-for-processed='true' data-cssurl='<?php echo THEMEPATH;?>camera-no-style.css'></camera>

	<div id="myVideo-start-screen" class="[ cameratag_screen ]">
		<div class="[ color-light ][ center-full ]">
			<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
			<img class="[ svg icon icon--iconed icon--stroke ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/webcam.svg">
			<p class="[ text-uppercase ][ no-margin ]"><strong>Comencemos</strong></p>
			<p>¿Estás lista para contarnos tu tip?</p>
			<a id="grabar" class="[ cameratag_record ]">
				<div class="[ btn btn-primary btn-auto ][ margin-bottom margin-sides--small ]">Estoy lista</div>
			</a>
			<a id="myVideo_upload_link" class="[ cameratag_primary_link cameratag_upload_link cameratag_upload ][ inline align-inherit ][ hidden-xs ]" >
				<div class="[ btn btn-primary btn-auto ][ margin-bottom ]">Subir un archivo</div>
			</a>
		</div>
	</div>
	<div id="myVideo-error-screen"  class="cameratag_screen cameratag_error">
		<div class="cameratag_error_message">
			No se encontro la cámara
		</div>
	</div>
	<div id="myVideo-camera-detection-screen"  class="cameratag_screen cameratag_detect">
		<div class="cameratag_prompt [ color-light ][ dt ][ large ][ center-full ]">
			<section class="[ container ][ text-center ][ center-full margin--landscape ]">
				<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
				<div class="[ icon--iconed--medium ][ margin-auto margin-bottom ][ relative ]">
					<img class="[ svg icon icon--stroke icon--responsive ][ color-light ]" src="<?php echo THEMEPATH; ?>icons/webcam.svg">
				</div>
				<div class="[ margin-bottom ]">
					<p class="[ large ][ no-margin ]"><strong>¡Estás a punto de comenzar!</strong></p>
				</div>
			</section>
		</div>
	</div>
	<div id="myVideo-countdown-screen"  class="cameratag_screen cameratag_count">
		<div class="[ cameratag_ready ][ color-light ][ font-title fz--xxlarge ][ padding-bottom ]">¿Lista?</div>
		<div class="[ cameratag_countdown_status ][ color-primary ][ font-title ]">1</div>
	</div>
	<div id="myVideo-recording-screen" class="[ cameratag_screen cameratag_recording cameratag_stop_recording ]">
		<div class="[ cameratag_prompt ][ text-center ]">
			<div class="[ row ]">
				<div class="[ cameratag_screen__info ][ margin-bottom--small ][ col-xs-12 col-sm-2 col-sm-offset-4 ]">
					<p class="[ text-uppercase ][ no-margin ]"><strong>Grabando</strong></p>
					<img src="//www.cameratag.com/assets/recording.gif"><span class="[ cameratag_record_timer_prompt ]">180</span><span class="[ js-record-time-min ]"></span>
				</div>
				<div class="[ cameratag_screen__info_stop ][ margin-bottom--small ][ col-xs-12 col-sm-2 ]">
					<p class="[ text-uppercase ][ no-margin ]"><strong>stop</strong></p>
					<img class="[ svg icon icon--iconed--medium icon--stroke ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/stop-button.svg">
				</div>
			</div>
		</div>
	</div>
	<div id="myVideo-accept-screen"  class="cameratag_screen cameratag_accept" style="background-color: #f90e42;">
		<div class="[ center-full ][ width-100 ]">
			<img class="[ img-responsive img-title ]" src="<?php echo THEMEPATH; ?>img/title-1.png">
			<a class="[ cameratag_accept_btn cameratag_publish ][ btn btn-primary btn--auto ]">Continuar</a>
			<a class="[ cameratag_play_btn cameratag_play ][ btn btn-primary btn--auto ]">Ver Video</a>
			<a class="[ cameratag_rerecord_btn cameratag_record ][ btn btn-primary btn--auto ]">Volver a Grabar</a>
		</div>
	</div>
	<div id="myVideo-wait-screen"  class="cameratag_screen cameratag_wait">
		<div class="cameratag_spinner">
			<img src="<?php echo THEMEPATH; ?>icons/loader-.gif" class="[ margin-bottom ]">
			<br>
			<span class="cameratag_wait_message [ color-light ][ font-title ]">Conectando…</span>
		</div>
	</div>
	<div id="myVideo-completed-screen"  class="cameratag_screen cameratag_completed">
		<div class="cameratag_spinner">
			<img src="<?php echo THEMEPATH; ?>icons/loader-.gif" class="[ margin-bottom ]">
			<br>
			<span class="cameratag_wait_message [ color-light ][ font-title ]">Estamos guardando tu video, este proceso puede tardar hasta 5 minutos…</span>
		</div>
	</div>
</div>
<div class="[ bg-loader ]" id="loading">
	<div class="[ center-full ][ text-center ]">
		<img src="<?php echo THEMEPATH; ?>icons/loader-.gif" >
		<p class="[ font-title ][ margin-top--small ]">Estamos guardando tu video, este proceso puede tardar hasta 5 minutos…</p>
	</div>
</div>
<div class="[ relative top-40 ]">
	<?php get_footer(); ?>
</div>
