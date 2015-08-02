<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_car".
 *
 * @property integer $id
 * @property integer $max_passengers
 * @property integer $price
 * @property integer $price_is_for_one
 * @property integer $coefficient
 */
class TypeCar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['max_passengers', 'price', 'price_is_for_one', 'coefficient'], 'integer'],
            [['name'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name car'),
            'max_passengers' => Yii::t('app', 'Max Passengers in car'),
            'price' => Yii::t('app', 'Price car'),
            'price_is_for_one' => Yii::t('app', 'Price Is For One'),
            'coefficient' => Yii::t('app', 'Coefficient'),
        ];
    }
}
