
	<header class="[ container ]">
		<a href="<?php echo site_url(); ?>">
			<img class="[ logo ]" src="<?php echo THEMEPATH; ?>img/logo1.png">
		</a>
		<span class="[ hidden-xs ][ pull-right ]">
			<a href="https://www.youtube.com/user/SallyBeautyMexico"  target="_blank"><img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/youtube.svg"></a>
			<a href="https://www.instagram.com/sallybeautymx/"  target="_blank"><img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/instagram.svg"></a>
			<a href="https://twitter.com/SallyMexico"  target="_blank"><img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed--medium icon--thickness-3 icon--fill ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg"></a>
			<a href="https://www.facebook.com/SallyMexico"  target="_blank"><img class="[ inline-block align-middle ][ margin-sides--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg"></a>
			<a href="http://www.sallymexico.com/" class="[ no-decoration ]" target="_blank">
				<img class="[ inline-block align-middle ][ margin-left--small ][ svg icon--iconed icon--thickness-3 icon--fill ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/shopping-bag-1.svg">
				<p class="[ inline-block align-middle ][ no-margin ][ color-primary ]">Compra en linea</p>
			</a>
		</span>
		<span class="[ visible-xs ][ pull-right ]">
			<a type="button" data-toggle="modal" data-target="#modal-nav">
				<img class="[ svg icon--stroke icon--iconed icon--thickness-3 ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg">
			</a>
		</span>

		<?php if( ! is_home() ) : ?>
			<div class="[ return ]">
				<a href="<?php echo site_url(); ?>">
					<img class="[ svg icon--stroke icon--iconed icon--thickness-3 ]"  src="<?php echo THEMEPATH; ?>icons/atras.svg">
					<p class="[ fz-xsmall ]">atrás</p>
				</a>
			</div>
		<?php endif; ?>

		<!-- Modal Menú-->
		<div id="modal-nav" class="[ modal fade ]" role="dialog">
			<button type="button" class="[ close close--nav ]" data-dismiss="modal">
				<img class="[ svg icon--stroke icon--iconed icon--thickness-3 ][ color-primary ]" src="<?php echo THEMEPATH; ?>icons/navigation.svg">
			</button>
			<div class="[ modal-dialog modal-dialog--nav ]">
			<!-- Modal content-->
				<div class="[ modal-content modal-content--nav ]">
					<div class="[ modal-body ]">
						<a href="https://www.youtube.com/user/SallyBeautyMexico"  target="_blank"><img class="[ svg icon--iconed--large icon--thickness-3 icon--fill ][ color-light ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/youtube.svg"></a>
						<a href="https://www.instagram.com/sallybeautymx/"  target="_blank"><img class="[ svg icon--iconed--large icon--thickness-3 icon--fill ][ color-light ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/instagram.svg"></a>
						<a href="https://twitter.com/SallyMexico"  target="_blank"><img class="[ svg icon--iconed--large icon--thickness-3 icon--fill ][ color-light ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/twitter.svg"></a>
						<a href="https://www.facebook.com/SallyMexico"  target="_blank"><img class="[ svg icon--iconed--large icon--thickness-3 icon--fill ][ color-light ][ margin-sides--small ]" src="<?php echo THEMEPATH; ?>icons/facebook.svg"></a>
						<a href="http://www.sallymexico.com/" class="[ block ][ text-left ][ margin-top--small ]" target="_blank">
							<img class="[ inline-block align-middle ][ svg icon icon--iconed--large icon--thickness-3 icon--fill ][ color-light ][ margin-left--small ]" src="<?php echo THEMEPATH; ?>icons/shopping-bag-1.svg">
							<p class="[ inline-block align-middle ][ no-margin ][ color-light ]">Compra en linea</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
