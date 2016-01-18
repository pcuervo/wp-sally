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
						localStorage.setItem("uuid", uuid);
						window.location.href = site_url + '/exito';
					});

				<?php endif ?>

				<?php if ( is_page( 'ver-tutoriales' ) ) : ?>
					var myVideo = document.getElementById("videoTutorial");
				<?php endif; ?>

				<?php if( is_page( 'exito' ) ) : ?>

					$("#loading").hide();

					$("#forma-exito").submit( function(e){
						console.log('submitting');
						e.preventDefault();
						var uuid = localStorage.getItem("uuid");
						var formData = {
							'uuid' : uuid,
							'name' : $("#name_field").val(),
							'title': $("#title_field").val(),
							'frase1_field' : $("#frase1_field").val(),
							'frase2_field' : $("#frase2_field").val(),
							'frase3_field' : $("#frase3_field").val(),
							'frase1_category' :  $("#frase1_category").val(),
						};
						$.ajax({
							type: 'POST',
							url:  theme_url + 'upload_and_render.php',
							data: formData,
							dataType: 'json',
							encode : true,
							beforeSend : function(){
								$("#loading").show();
							}
						})
						.done(function(data){
							console.log(data);
							$("#loading").hide();
							localStorage.setItem("video_url" , data.video_url);
							localStorage.setItem("img_url", data.img_url);
							localStorage.setItem("title", $("#title_field").val());
							localStorage.setItem("name", $("#name_field").val())
							localStorage.setItem("category", $("#frase1_category").val());
			 				window.location.href = site_url + '/vobo';
						});
					 	event.preventDefault();
					});
				<?php endif; ?>

				<?php if( is_page( 'vobo' ) ) : ?>
					$('.js-publicar-element').hide();
					$('.js-publicar-opener').on('click', function(){
						$('.js-publicar-element').show();
					});

					
				<?php endif; ?>

				<?php if ( is_page( 'tutoriales-single' ) ) : ?>

				<?php endif; ?>
			});
		</script>
<?php
	endif;
}// footer_scripts
?>