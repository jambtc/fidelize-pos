<aside class="menu-sidebar d-none d-lg-block">
	<div  class="logo">
		<a href="<?php echo Yii::app()->createUrl('site/index'); ?>">
			<?php Logo::header(); ?>
		</a>
	</div>
	<div id="page-vesuvio"></div>
	<div class="menu-sidebar__content js-scrollbar1">
		<nav class="navbar-sidebar">
			<?php
			if (Yii::app()->user->isGuest)
			{
			?>
				<ul class="list-unstyled navbar__list">
					<li class="active">
						<a class="js-arrow" href="<?php echo Yii::app()->createUrl('site/login'); ?>">
							<i class="fas fa-sign-in-alt"></i><?php echo Yii::t('lang','Sign in');?></a>
					</li>
				</ul>
			<?php
			}else{
				?>
				<ul class="list-unstyled navbar__list">
					<li class="active">
						<a class="js-arrow" href="<?php echo Yii::app()->createUrl('keypad/index'); ?>">
							 <i class="glyphicon glyphicon-th"></i>Keypad</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->createUrl('tokens/index'); ?>">
							<i class="fas fa-star"></i>Transazioni</a>
					</li>
					<li>
						<a href="<?php echo Yii::app()->createUrl('site/contactForm'); ?>" target="_blank">
							 <i class="fa fa-bug"></i><?php echo Yii::t('lang','Bug report');?></a>
					</li>
<<<<<<< HEAD
=======

					<li>
						<a href="<?php echo Yii::app()->createUrl('settings/index',array('id'=>crypt::Encrypt(Yii::app()->user->objUser['id_user'])));?>">
							 <i class="fa fa-gear"></i><?php echo Yii::t('lang','Settings');?> </a>
					</li>
					<li>
						<div class="delete-serviceWorker">
								<a href="<?php echo Yii::app()->createUrl('site/logout');?>" >
								<i class="fa fa-power-off"></i><?php echo Yii::t('lang','Logout');?> </a>
						</div>
					</li>


>>>>>>> a7b530ae7a7b1b20ad5c1f99174c88fa34347b3e
				</ul>
			<?php } ?>
		</nav>
	</div>
</aside>
