<?php
/* @var $this FacebookDataController */
/* @var $model FacebookData */

$this->breadcrumbs=array(
	'Facebook Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FacebookData', 'url'=>array('index')),
	array('label'=>'Manage FacebookData', 'url'=>array('admin')),
);
?>

<h1>Create FacebookData</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>