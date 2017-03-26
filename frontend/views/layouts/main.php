<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Roboto+Condensed" rel="stylesheet">

	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="test_header">

	<div class="row">
		<div class="col-md-4">
			<div class="test_logo">
				<a href="<?= Yii::$app->getHomeUrl(); ?>">
					<img src="img/logo.png">
				</a>
			</div>
		</div>
		<div class="col-md-4">
			<div class="test_search">
				<form action="" method="GET">
				
					<div class="input-group">
						<input type="text" class="form-control test_search_input" placeholder="Search for... Lolita ?" name="q">
						
						<span class="input-group-btn">
							<button class="btn btn-default test_search_button" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="test_profile">

				<?php if (Yii::$app->user->getId()): ?>

					<span class="glyphicon glyphicon-menu-hamburger test_hamb"></span>
					<?= Html::a("<span class='glyphicon glyphicon-user test_user'>", ['/site/logout'], ['data-method' => 'post']) ?></span>
				<?php else: ?>

					<div style="margin-top: 15px;">
						<?= Html::a("Sign up", ['site/signup']); ?>
						/
						<?= Html::a("Login", ['site/login']); ?>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</div>

</div>

<div class="test_wrap">
    <?= $content ?>
</div>

<div id="footer">
	Gurachek - Svernyuk
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
