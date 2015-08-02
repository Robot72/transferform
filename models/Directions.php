<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "directions".
 *
 * @property integer $id
 * @property integer $id_type_country
 * @property integer $id_type_car
 * @property string $name
 * @property string $country
 * @property integer $max_passengers
 */
class Directions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type_country', 'id_type_car', 'max_passengers'], 'integer'],
            [['name'], 'required'],
            [['name', 'country'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_type_country' => Yii::t('app', 'Id Type Country'),
            'id_type_car' => Yii::t('app', 'Id Type Car'),
            'name' => Yii::t('app', 'NameDirection'),
            'country' => Yii::t('app', 'Country'),
            'max_passengers' => Yii::t('app', 'Max Passengers'),
        ];
    }
}
