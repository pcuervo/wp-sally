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
					CameraTag.observe('myVideo', 'playbackStarted', function(){
					 	myCamera = CameraTag.cameras["myVideo"];
					 	myCamera.stopPlayback();
					});
					CameraTag.observe('myVideo', 'published', function(){
						var api_key = "Vw-bKoSv7bjYq-ekXhzL";
						var uuid = document.getElementById("myVideo_video_uuid").value;
						localStorage.setItem("uuid", uuid);
						window.location.href = site_url + '/exito';
					});
					CameraTag.observe('myVideo', 'recordingStopped', function(){
						console.log('this video is counting down!')
					});

				<?php endif ?>

				<?php if ( is_page( 'ver-tutoriales' ) ) : ?>
					var myVideo = document.getElementById("videoTutorial");

					$('.grid-item').click( function(){
						var video_url = '<?php echo THEMEPATH ?>' + $(this).find('.js-url-video').text();
						createTutorialVideo( $('.js-video-container'), video_url, 'video/mp4' );
						$('.js-modal-titulo').text( $(this).find('.js-titulo').text() );
						$('.js-modal-nombre').text( $(this).find('.js-nombre').text() );
						var shareUrl =  $(this).find('.js-url-share').text();
						console.log(shareUrl);
						$('.btn-fb').attr( 'data-share-url', shareUrl );
						playPause( $('#videoTutorial')[0] );
					});

					runIsotope('.js-grid', '.grid-item');
					$('#tutoriales3').on('hide.bs.modal', function (e) {
						console.log( 'pausing...' );
						playPause( $('#videoTutorial')[0] );
						$('.js-video-container video').remove();
					});

					$('.btn-fb').click( function(e){
						e.preventDefault();
						var shareUrl = $(this).data( 'share-url' );
						shareVideoFB( shareUrl );
					});
				<?php endif; ?>

				<?php if( is_page( 'exito' ) ) : ?>

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
							localStorage.setItem("video_url" , 'render/videos/' + data.video_url);
							localStorage.setItem("img_url", 'render/img/' + data.img_url);
							localStorage.setItem("title", $("#title_field").val());
							localStorage.setItem("name", $("#name_field").val())
							localStorage.setItem("category", $("#frase1_category").val());
			 				window.location.href = site_url + '/vobo';
						});
					 	event.preventDefault();
					});
				<?php endif; ?>

				<?php if( is_page( 'vobo' ) ) : ?>

					var video_url = '<?php echo THEMEPATH ?>' + localStorage.getItem('video_url');
					addSourceToVideo( $('#video1'), video_url, 'video/mp4');

					$('.js-publicar-element').hide();
					$('.js-publicar-opener').on('click', function(){
						$(this).hide();
						publishVideoWP( localStorage.getItem('name'), localStorage.getItem('title'), localStorage.getItem('category'), localStorage.getItem('video_url'), localStorage.getItem('img_url') );
					});

				<?php endif; ?>

				<?php if( is_single() ) : ?>

				<?php endif; ?>

				window.fbAsyncInit = function() {
					FB.init({
						appId  	: '1107163669301864',
						xfbml   : true,
						version	: 'v2.3'
					});
				};

				(function(d, s, id){
				    var js, fjs = d.getElementsByTagName(s)[0];
				    if (d.getElementById(id)) {return;}
				    js = d.createElement(s); js.id = id;
				    js.src = "//connect.facebook.net/en_US/sdk.js";
				    fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));

			});
		</script>
<?php
	endif;
}// footer_scripts
?>