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

					$("#forma-exito").on('submit', function(e){
						e.preventDefault();
						var form = $(this);

						form.parsley().validate();

						if (form.parsley().isValid()){
							$('#exito-ínfo').modal('show');

							var formData = {
								'name' : $("#name_field").val(),
								'title': $("#title_field").val(),
								'frase1_field' : $("#frase1_field").val(),
								'frase2_field' : $("#frase2_field").val(),
								'frase3_field' : $("#frase3_field").val(),
								'category' :  $("#category").val(),
							};

							$('#exito-ínfo .modal-body').append(
								'<p><strong>Nombre: </strong>'+formData.name+'</p><p><strong>Título del tutorial: </strong>'+formData.title+'</p><p><strong>Frase 1: </strong>'+formData.frase1_field+'</p><p><strong>Frase 2: </strong>'+formData.frase2_field+'</p><p><strong>Frase 3: </strong>'+formData.frase3_field+'</p><p><strong>Categoría: </strong>'+formData.category+'</p>'
							);
						}
					});

					$('.js-confirm-exito-info').on('click', function(){

						var uuid = getCookie("uuid");
						var formData = {
							'uuid' : uuid,
							'name' : $("#name_field").val(),
							'title': $("#title_field").val(),
							'frase1_field' : $("#frase1_field").val(),
							'frase2_field' : $("#frase2_field").val(),
							'frase3_field' : $("#frase3_field").val(),
							'category' :  $("#category").val(),
						};

						$.ajax({
							type: 'POST',
							url:  theme_url + '/upload_and_render.php',
							data: formData,
							dataType: 'json',
							encode : true,
							beforeSend : function(){
								$("#loading").show();
							}
						})
						.done(function(data){
							$("#loading").hide();

							document.cookie = "video_url =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
							document.cookie = "video_url = " + data.video_url;

							document.cookie = "title =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
							document.cookie = "title =" +   $("#title_field").val();

							document.cookie = "name =;  expires=Thu, 01 Jan 1970 00:00:00 UTC";
							document.cookie = "name = " +  $("#name_field").val();

							window.location.href = site_url + '/vobo';
						});
					 	event.preventDefault();
					});

					// $("#forma-exito").submit( function(e){
					// 	console.log('submitting');
					// 	e.preventDefault();
					// 	var uuid = getCookie("uuid");
					// 	var formData = {
					// 		'uuid' : uuid,
					// 		'name' : $("#name_field").val(),
					// 		'title': $("#title_field").val(),
					// 		'frase1_field' : $("#frase1_field").val(),
					// 		'frase2_field' : $("#frase2_field").val(),
					// 		'frase3_field' : $("#frase3_field").val(),
					// 		'category' :  $("#category").val(),
					// 	};

					// 	$.ajax({
					// 		type: 'POST',
					// 		url:  theme_url + '/upload_and_render.php',
					// 		data: formData,
					// 		dataType: 'json',
					// 		encode : true,
					// 		beforeSend : function(){
					// 			$("#loading").show();
					// 		}
					// 	})
					// 	.done(function(data){
					// 		$("#loading").hide();

					// 		document.cookie = "video_url =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
					// 		document.cookie = "video_url = " + data.video_url;

					// 		document.cookie = "title =; expires=Thu, 01 Jan 1970 00:00:00 UTC";
					// 		document.cookie = "title =" +   $("#title_field").val();

					// 		document.cookie = "name =;  expires=Thu, 01 Jan 1970 00:00:00 UTC";
					// 		document.cookie = "name = " +  $("#name_field").val();

					// 		window.location.href = site_url + '/vobo';
					// 	});
					//  	event.preventDefault();
					// });
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