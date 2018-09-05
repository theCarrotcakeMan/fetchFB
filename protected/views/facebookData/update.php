<?php
/* @var $this FacebookDataController */
/* @var $model FacebookData */

$this->breadcrumbs=array(
	'Facebook Datas'=>array('index'),
	$model->idfacebook_data=>array('view','id'=>$model->idfacebook_data),
	'Update',
);

$this->menu=array(
	array('label'=>'List FacebookData', 'url'=>array('index')),
	array('label'=>'Create FacebookData', 'url'=>array('create')),
	array('label'=>'View FacebookData', 'url'=>array('view', 'id'=>$model->idfacebook_data)),
	array('label'=>'Manage FacebookData', 'url'=>array('admin')),
);
?>

<h1>Update FacebookData <?php echo $model->idfacebook_data; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>