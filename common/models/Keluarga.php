<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "keluarga".
 *
 * @property int $contact_person_id
 * @property int $employee_person_id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $hubungan
 * @property string $tgl_hubungan
 * @property string $gender
 * @property string $town_or_birth
 * @property string $dependent
 * @property string $status
 */
class Keluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
	public static function primaryKey()
	{
		return ['contact_person_id'];
	}
	 
    public static function tableName()
    {
        return 'keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_person_id', 'employee_person_id', 'nama'], 'required'],
            [['contact_person_id', 'employee_person_id'], 'integer'],
            [['tgl_lahir', 'tgl_hubungan'], 'safe'],
            [['nama'], 'string', 'max' => 128],
            [['hubungan', 'gender'], 'string', 'max' => 25],
            [['town_or_birth'], 'string', 'max' => 50],
            [['dependent'], 'string', 'max' => 45],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_person_id' => 'Contact Person ID',
            'employee_person_id' => 'Employee Person ID',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'hubungan' => 'Hubungan',
            'tgl_hubungan' => 'Tgl Hubungan',
            'gender' => 'Gender',
            'town_or_birth' => 'Town Or Birth',
            'dependent' => 'Dependent',
            'status' => 'Status',
        ];
    }
	
	public function getKaryawan()
    {
        return $this->hasOne(Employee::className(), ['person_id' => 'employee_person_id']);
    }
}
