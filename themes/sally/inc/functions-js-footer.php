<?php
/**
* Here we add all the javascript that needs to be run on the footer.
**/
function footer_scripts(){
	global $post;
	if( wp_script_is( 'functions', 'done' ) ) :
?>
		<script type="text/javascript">
			$( document ).ready(function() {
				imgToSvg();

				<?php if( is_page( 'grabando' ) ): ?>
					CameraTag.observe('myVideo', 'initialized', function () {
						document.getElementById('grabar').click();
					});

					CameraTag.observe('myVideo', 'published', function(){
						var api_key = "Vw-bKoSv7bjYq-ekXhzL";
						var uuid = document.getElementById("myVideo_video_uuid").value;
						window.location.href = site_url + '/exito';
					});
				<?php endif ?>

				<?php if ( is_page( 'ver-tutoriales' ) ) : ?>
					var myVideo = document.getElementById("videoTutorial");
				<?php endif; ?>
			});
		</script>
<?php
	endif;
}// footer_scripts
?>