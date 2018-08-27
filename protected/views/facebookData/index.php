<?php
/* @var $this FacebookDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facebook Datas',
);

$this->menu=array(
	array('label'=>'Create FacebookData', 'url'=>array('create')),
	array('label'=>'Manage FacebookData', 'url'=>array('admin')),
);
?>

<h1>Facebook Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
