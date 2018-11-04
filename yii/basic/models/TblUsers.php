<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_users".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $profile
 */
class TblUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profile'], 'integer'],
            [['username', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'profile' => 'Profile',
        ];
    }
}
