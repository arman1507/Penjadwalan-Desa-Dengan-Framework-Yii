<?php

/**
 * This is the model class for table "jadwal".
 *
 * The followings are the available columns in table 'jadwal':
 * @property integer $id_jadwal
 * @property string $Tempat
 * @property string $Tanggal
 * @property string $Info
 * @property string $Jenis_Kegiatan
 */
class Jadwal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jadwal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tempat, Tanggal, Info, Jenis_Kegiatan', 'required'),
			array('Tempat', 'length', 'max'=>25),
			array('Info', 'length', 'max'=>500),
			array('Jenis_Kegiatan', 'length', 'max'=>100),
			array('berkas', 'file', 'types'=>'pdf, doc, docx','allowEmpty'=> true,'safe'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_jadwal, Tempat, Tanggal, Info, Jenis_Kegiatan, berkas', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_jadwal' => 'Id Jadwal',
			'Tempat' => 'Tempat',
			'Tanggal' => 'Tanggal',
			'Info' => 'Info',
			'Jenis_Kegiatan' => 'Jenis Kegiatan',
			'berkas'=>'berkas'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_jadwal',$this->id_jadwal);
		$criteria->compare('Tempat',$this->Tempat,true);
		$criteria->compare('Tanggal',$this->Tanggal,true);
		$criteria->compare('Info',$this->Info,true);
		$criteria->compare('Jenis_Kegiatan',$this->Jenis_Kegiatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jadwal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
