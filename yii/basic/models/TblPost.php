<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_post".
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 */
class TblPost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['create_time'], 'safe'],
            [['title', 'update_time'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
