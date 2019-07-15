<?php
/* @var $this JadwalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwals',
);

$this->menu=array(
	array('label'=>'Create Jadwal', 'url'=>array('create')),
	array('label'=>'Manage Jadwal', 'url'=>array('admin')),
);
?>

<h1>Jadwals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',

)); ?>



<?php if(Yii::app()->user->name=="admin") { 
	 echo CHtml::button('Tambah Jadwal', array('submit' => array('jadwal/create'))); 
	echo CHtml::button('Ubah Jadwal', array('submit' => array('jadwal/admin')));
echo CHtml::button('Hapus Jadwal', array('submit' => array('jadwal/admin')));} 
else { 
;  
}
  
?>

