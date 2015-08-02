<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dependency".
 *
 * @property integer $id
 * @property integer $from
 * @property integer $to
 * @property integer $price
 * @property integer $require_from
 * @property integer $require_to
 * @property integer $require_name
 * @property integer $require_phone
 * @property integer $require_email
 * @property integer $require_date
 * @property integer $require_time
 */
class Dependency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dependency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to', 'price', 'require_from', 'require_to', 'require_name', 'require_phone', 'require_email', 'require_date', 'require_time'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'from' => Yii::t('app', 'From'),
            'to' => Yii::t('app', 'To'),
            'price' => Yii::t('app', 'Price'),
            'require_from' => Yii::t('app', 'Require From'),
            'require_to' => Yii::t('app', 'Require To'),
            'require_name' => Yii::t('app', 'Require Name'),
            'require_phone' => Yii::t('app', 'Require Phone'),
            'require_email' => Yii::t('app', 'Require Email'),
            'require_date' => Yii::t('app', 'Require Date'),
            'require_time' => Yii::t('app', 'Require Time'),
        ];
    }
}
