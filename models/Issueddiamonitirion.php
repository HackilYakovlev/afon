<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "issueddiamonitirion".
 *
 * @property integer $id
 * @property string $issued
 */
class Issueddiamonitirion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'issueddiamonitirion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issued'], 'required'],
            [['issued'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'issued' => 'Issued',
        ];
    }
}
