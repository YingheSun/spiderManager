<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<style>
.skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side{
	background-color:#2b3541;
}
.skin-blue .main-header .logo{
	background-color:#2b3541;
}
.treeview-menu>li>a{
	padding: 10px 5px 10px 15px;
}
</style>
<header class="main-header">

    <?= Html::a('<span class="logo-mini"><img src="./static/images/logo.png" style="width:38px;"></span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">折叠菜单</span>
        </a>
		<?= Html::a('退出',['site/logout'],['data-method' => 'post', 'class' => 'btn bg-purple btn-flat','style'=>'position:absolute;right:10px;top:8px;']) ?>
    </nav>
</header>
