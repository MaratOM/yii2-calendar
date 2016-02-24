<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_goods".
 *
 * @property integer $id
 * @property string $name
 * @property integer $count
 * @property string $email_provider
 * @property string $create_date
 */
class TblGoods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['count'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'email_provider'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'count' => 'Count',
            'email_provider' => 'Email Provider',
            'create_date' => 'Create Date',
        ];
    }
}
