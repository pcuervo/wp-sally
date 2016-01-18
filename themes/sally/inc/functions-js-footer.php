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

				<?php if( is_page( 'exito' ) ) : ?>
					$("#loading").hide();

					$("#forma-exito").submit( function(e){
						console.log('submitting');
						e.preventDefault();
						var uuid = getCookie("uuid");
						var formData = {
							'uuid' : uuid,
							'name' : $("#name_field").val(),
							'title': $("#title_field").val(),
							'frase1_field' : $("#frase1_field").val(),
							'frase1_category' : $("#frase1_category").val(),
							'frase2_field' : $("#frase2_field").val(),
							'frase2_category': $("#frase2_category").val(),
							'frase3_field' : $("#frase3_field").val(),
							'frase3_category' : $("#frase3_category").val(),
							'category' :  $("#category").val(),
						};

						// $.ajax({
						// 	type: 'POST',
						// 	url:  'upload_and_render.php',
						// 	data: formData,
						// 	dataType: 'json',
						// 	encode : true,
						// 	beforeSend : function(){
						// 		$("#loading").show();
						// 	}
						// })
						// .done(function(data){
						// 	console.log(data)
						// 	$("#loading").hide();
						// 	document.cookie = "video_url =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
						// 	document.cookie = "video_url = " + data.video_url;

						// 	document.cookie = "title =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
						// 	document.cookie = "title =" +   $("#title_field").val();

						// 	document.cookie = "name =;  expires=Thu, 01 Jan 1970 00:00:00 UTC";
						// 	document.cookie = "name = " +  $("#name_field").val();
						// 	window.location.href = 'http://localhost:8888/sally/sally/tutoriales-single.html';
			 		// 		document.cookie = "name =;  expires=Thu, 01 Jan 1970 00:00:00 UTC";
			 		// 		document.cookie = "name = " +  $("#name_field").val();
			 		// 		window.location.href = 'http://localhost:8888/sally/sally/tutoriales-single.html';
						// });
					 //event.preventDefault();

					});
				<?php endif; ?>

				<?php if( is_page( 'vobo' ) ) : ?>
					$('.js-publicar-element').hide();
					$('.js-publicar-opener').on('click', function(){
						$('.js-publicar-element').show();
					});
				<?php endif; ?>
			});
		</script>
<?php
	endif;
}// footer_scripts
?>