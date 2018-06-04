<?php
use yii\helpers\Url;
?>
没有权限访问此页面<a href="<?=Url::toRoute(['site/index'],$this->context::$domain)?>" style="color:blue;">返回首页</a>