<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# <?php echo Yii::app()->fb->appNamespace; ?>: http://ogp.me/ns/apps/<?php echo Yii::app()->fb->appNamespace; ?>#">
	<?php Yii::app()->controller->widget('ext.seo.widgets.SeoHead', array(
		'defaultDescription'=>Yii::app()->params['appDescription'],
		'httpEquivs'=>array('Content-Type'=>'text/html; charset=utf-8', 'Content-Language'=>'en-US'),
		'title'=>array('class'=>'ext.seo.widgets.SeoTitle', 'separator'=>' :: '),
	)); ?>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico">
	<?php Yii::app()->bootstrap->registerAllCss(); ?>
	<?php Yii::app()->bootstrap->registerCoreScripts(); ?>
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/styles.css'); ?>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-29040179-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body id="top">

<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : <?php echo Yii::app()->fb->appID; ?>, // App ID
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true  // parse XFBML
		});

		// Additional initialization code here
	};

	// Load the SDK Asynchronously
	(function(d){
		var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		d.getElementsByTagName('head')[0].appendChild(js);
	}(document));
</script>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'type'=>'inverse',
	'brand'=>CHtml::encode(Yii::app()->name),
	'brandUrl'=>false,
	'collapse'=>true,
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Docs', 'url'=>Yii::app()->homeUrl,
						'active'=>Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'index'),
				array('label'=>'Setup', 'url'=>array('site/setup')),
			),
			'htmlOptions'=>array('class'=>'pull-left'),
		),
		'<div class="add-this pull-right">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style">
			<a class="addthis_button_facebook"></a>
			<a class="addthis_button_twitter"></a>
			<a class="addthis_button_google"></a>
			<a class="addthis_button_email"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
			</div>
			<!-- AddThis Button END -->
		</div>',
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Bootstrap Home', 'url'=>'http://www.getbootstrap.com', 'linkOptions'=>array('target'=>'_blank')),
				array('label'=>'Fork me on Bitbucket', 'url'=>'http://www.bitbucket.org/Crisu83/yii-bootstrap', 'linkOptions'=>array('target'=>'_blank')),
				array('label'=>'Follow me on Twitter', 'url'=>'http://www.twitter.com/Crisu83', 'linkOptions'=>array('target'=>'_blank')),
			),
			'htmlOptions'=>array('class'=>'pull-right'),
		),
	),
)); ?>

<div class="container">

	<div class="row">
		<div class="span9">

			<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
				'heading'=>Yii::app()->name,
			)); ?>
				<p>
					Bringing together the <?php echo CHtml::link('Yii PHP framework', 'http://www.yiiframework.com'); ?> and
					<?php echo CHtml::link('Twitter Bootstrap', 'http://twitter.github.com/bootstrap/'); ?>.
				</p>
				<p>
					<?php echo CHtml::link('Yii-Bootstrap', 'http://www.yiiframework.com/extension/bootstrap/'); ?>
					is an extension for Yii that provides a wide range of widgets that allow developers to easily use Bootstrap with Yii.
					All widgets have been developed following Yii's conventions and work seamlessly together with Bootstrap and its jQuery plugins.
				</p>
			<?php $this->endWidget(); ?>

			<?php if (!empty($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?>
			<?php endif?>

		</div>

		<div class="span3">
			<div class="donate">

				<h3>Support development</h3>

				<p>Would you like to say thanks for the time and effort put on this project? Consider donating.</p>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="YYJJSWSMN62WU">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				<hr />

				<p>Would you like to support the development of this project on a monthly basis? Consider subscribing.</p>

				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="7UFJKA5YAJR8G">
					<table>
						<tr><td><input type="hidden" name="on0" value="Donate"></td></tr><tr><td><select name="os0">
						<option value="Option 1">???5.00 EUR (monthly)</option>
						<option value="Option 2">???10.00 EUR (monthly)</option>
						<option value="Option 3">???20.00 EUR (monthly)</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>
		</div>
	</div>

	<?php echo $content; ?>

	<hr />

	<footer>

		<div class="row">

			<div class="span6">

				<p class="powered">
					Powered by <?php echo CHtml::link('Yii', 'http://www.yiiframework.com', array('target'=>'_blank')); ?> /
					<?php echo CHtml::link('Yii-Bootstrap', 'http://www.yiiframework.com/extension/bootstrap', array('target'=>'_blank')); ?> /
					<?php echo CHtml::link('Yii-SEO', 'http://www.yiiframework.com/extension/seo', array('target'=>'_blank')); ?> /
					<?php echo CHtml::link('Bootstrap', 'http://twitter.github.com/bootstrap', array('target'=>'_blank')); ?> /
					<?php echo CHtml::link('jQuery', 'http://www.jquery.com', array('target'=>'_blank')); ?> /
					<?php echo CHtml::link('LESS', 'http://www.lesscss.org', array('target'=>'_blank')); ?>
				</p>

			</div>

			<div class="span6">

				<p class="copy">
					&copy; Christoffer Niska <?php echo date('Y'); ?>
				</p>

			</div>

		</div>

	</footer>

</div>

<?php Yii::app()->clientScript->registerScriptFile('http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f362fc83fc39768', CClientScript::POS_END); ?>

</body>
</html>
