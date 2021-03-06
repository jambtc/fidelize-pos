<header class="header-mobile d-block d-lg-none ">
	<div class="header-mobile__bar qrcode-hidden">
		<div class="container-fluid">
			<div class="header-mobile-inner">
				<?php Logo::header(); ?>
				<button class="hamburger hamburger--slider" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
		</div>
	</div>
	<nav class="navbar-mobile">
		<div class="container-fluid">
			<ul class="navbar-mobile__list list-unstyled">
			 <?php
			if (Yii::app()->user->isGuest)
			{
			?>
						<li>
							<a class="js-arrow" href="<?php echo Yii::app()->createUrl('site/login'); ?>">
							<i class="fas fa-sign-in-alt"></i><?php echo Yii::t('lang','Sign in');?></a>
						</li>
			<?php
			}else{
			?>

			<li class="active">
				<a class="js-arrow" href="<?php echo Yii::app()->createUrl('keypad/index'); ?>">
					Keypad <i class="glyphicon glyphicon-th"></i></a>
			</li>
			<li>
				<a href="<?php echo Yii::app()->createUrl('tokens/index'); ?>">
					Transazioni <i class="fas fa-star"></i></a>
			</li>


			<li>
				<a href='<?php echo Yii::app()->createUrl('site/contactForm'); ?>' target="_blank">
					 <?php echo Yii::t('lang','Bug report');?> <i class="fa fa-bug"></i></a>
			</li>


			<?php } ?>
			</ul>
		</div>
	</nav>
</header>
