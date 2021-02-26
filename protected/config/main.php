<?php
$nomeApplicazione = 'Fidelize POS';
$shortName = 'Fidelize POS';
//
$logoAssociazione = '/css/images/logo.png';
$logoAssociazionePrint = '/css/images/logo.png';

$logoApplicazione = '/css/images/logo.png';
$logoUnito = '/css/images/logo.png';

$timeOutSeconds = 3600*24*30; // 1 mese

//configurazione email
$adminEmail = 'info@txlab.it';
$adminName = 'txlab ';
$adminIndirizzo = "Piazza Municipio, 1\n80100 - Napoli\nP.Iva: 011233455667";

//configurazione Token
$TokenImage = '/css/images/tts.png';
$TokenNameComplete = 'Token (TTS)';
$TokenName = 'Token';
$TokenCod = 'TTS';

//IVA AL 22%
$vat = '22';

// configurazione mail per webapp

//explorer btc ed eth
$blockchainCheck = 'https://blockchair.com/search?q=';
//

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

$libsPath = dirname(__FILE__).DIRECTORY_SEPARATOR.'../../../fidelize-packages';
Yii::setPathOfAlias('libs', $libsPath);

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>$nomeApplicazione,
	'language' => 'it', // Specifies which language the application is targeted to
    'sourceLanguage' => 'it_IT', //Specifies which language that the application is written in


	// preloading 'log' component
		'preload'=>array('log','bootstrap','jsTrans'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.yii-mail.YiiMailMessage',
	),


	'modules'=>array(
		// uncomment the following to enable the Gii tool

	),

	// application components
	'components'=>array(
		'session' => array(
			 'autoStart'=>true,
		),
		'jsTrans'=>array(  // abilita la traduzione per javascript
			'class'=>'ext.JsTrans.JsTrans',
			'categories'=>array('js'), // the categories to be made available
			'languages'=>array('it'), // the languages to be made available
			//'onMissingTranslation'=>array('site/missingTranslation'), // optional route to handle untranslated messages
		),
		'bootstrap'=>array(
				'class'=>'bootstrap.components.Bootstrap',
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// SEND EMAIL EXTENSION
		'mail' => array(
				'class' => 'ext.yii-mail.YiiMail',
				'transportType'=>'smtp',
				'transportOptions'=>array(
					'host'=>'',
					'username'=>'',
					'password'=>'',
					'port'=>'',
					'encryption'=>'',
				),
				'viewPath' => 'application.views.mail',
				'logging' => true,
      			'dryRun' => false,
			),
			

		//SSH LIBRARY
		// 'phpseclib' => array(
	    // 	'class' => 'ext.phpseclib.vendor.autoload'
	    // ),


		// MIE CLASSI
		'NMail'=>require(dirname(__FILE__).'../../extensions/NMail.php'),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		'libsPath'=>$libsPath,
		// this is used in contact page
		'adminEmail'=>$adminEmail,
		'adminName'=>$adminName,
		'indirizzo'=>$adminIndirizzo,
		'website'=>'https://napoliblockchain.it', // per il link sul logo

		'logoAssociazione'=>$logoAssociazione,
		'logoAssociazionePrint'=>$logoAssociazionePrint,
		'logoApplicazione'=>$logoApplicazione,
		'logoUnito'=>$logoUnito,
		//'imageComuneNapoli'=>$immagineComuneNapoli,


		//'imageApp'=>$immagineApplicazione,
		//'imageMobile'=>$immagineApplicazioneMobile,
		//'imageComuneNapoli'=>$immagineComuneNapoli,

		'timeOutSeconds'=>$timeOutSeconds,
		'shortName'=>$shortName,
		'blockchainCheck'=>$blockchainCheck,

		'TokenImage'=>$TokenImage,
		'TokenNameComplete'=>$TokenNameComplete,
		'TokenName'=>$TokenName,
		'TokenCod'=>$TokenCod,


		'vat'=>$vat,
	),

);
