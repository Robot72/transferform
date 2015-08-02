<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place_destination".
 *
 * @property integer $id
 * @property integer $id_direction
 * @property string $name
 * @property integer $attribute
 */
class PlaceDestination extends \yii\db\ActiveRecord
{
    const A_AERO = 1;
    const A_CITY = 2;
    const A_OUTLET = 3;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place_destination';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_direction', 'attribute'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_direction' => Yii::t('app', 'Id Direction'),
            'name' => Yii::t('app', 'NameDestination'),
            'attribute' => Yii::t('app', 'Attribute'),
        ];
    }
    
    public function getAttributeName()
    {
        switch ($this->attribute) {
            case self::A_AERO:
                return 'аэропорт';
                break;
            case self::A_CITY:
                return 'город';
                break;
            case self::A_OUTLET:
                return 'оутлет';
            default :
                return false;
                break;
        }
    }
    
    public function getArrayAttributes()
    {
        $arr = array();
        $arr[self::A_AERO] = 'аэропорт';
        $arr[self::A_CITY] = 'город';
        $arr[self::A_OUTLET] = 'оутлет';
        return $arr;
    }
}
