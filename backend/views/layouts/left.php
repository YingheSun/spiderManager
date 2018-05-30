<?php
use backend\assets\AppAsset;
AppAsset::register($this);

?>

<aside class="main-sidebar">

    <section class="sidebar">

		<ul class="sidebar-menu tree" data-widget="tree">
			<li class="header"><span><span style="color:#fff;">操作菜单</span></span></li>
			<?php foreach($this->context::mainMenu() as $k=>$v):?>
			<li class="treeview <?php if($v['active']=='active'):?>menu-open<?php endif;?>">
				<a href="javascript:void(0);"><i class="fa fa-<?= $v['icon'] ?>"></i>  <span><?= $v['name'] ?></span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
				<ul class="treeview-menu" <?php if($v['active']=='active'):?>style="display:block;"<?php endif;?>>
					<?php foreach($v['item'] as $k=>$v):?>
					<li><a href="<?= \yii\helpers\Url::to(['/'.$v['module']]); ?>"><span style="color:#fff;padding-left:20px;"><?= $v['name'] ?></span></a></li>
					<?php endforeach;?>
				</ul>
			</li>
			<?php endforeach;?>
		</ul>
    </section>

</aside>
