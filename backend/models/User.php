<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $id_number
 * @property int $level
 * @property string $email
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'id_number', 'level', 'email'], 'required'],
            [['id_number', 'level'], 'integer'],
            [['username', 'password'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'id_number' => 'Id Number',
            'level' => 'Level',
            'email' => 'Email',
        ];
    }
}
